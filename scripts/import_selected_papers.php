<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Regenerate config/selected_papers.php from presenter CSV files
|--------------------------------------------------------------------------
|
| Usage:
|   php scripts/import_selected_papers.php
|
| Reads the three "Presenter" CSV exports (Offline / Online / Certificate),
| merges them into a single ordered list of selected papers and writes
| config/selected_papers.php. Certificate file only drives the display order.
|
| Override the source directory with the SELECTED_PAPERS_CSV_PATH env var.
|
*/

const BASE_PATH = __DIR__ . '/../config/selected_papers.php';

$csvDir = getenv('SELECTED_PAPERS_CSV_PATH') ?: '/home/dev-reina/web-dev';

const FILES = [
    'offline' => 'India_Participant_Database.xlsx - Presenter (Offline).csv',
    'online'  => 'India_Participant_Database.xlsx - Presenter (Online).csv',
    'cert'    => 'India_Participant_Database.xlsx - Presenter (Certificate).csv',
];

function parseCsv(string $path): array
{
    $lines = file($path, FILE_IGNORE_NEW_LINES);
    if ($lines === false) {
        throw new RuntimeException("Cannot read CSV: {$path}");
    }

    $rows = [];
    foreach ($lines as $index => $line) {
        if ($index === 0) {
            $line = preg_replace('/^\xEF\xBB\xBF/', '', $line); // strip BOM
        }
        $rows[] = str_getcsv($line);
    }

    return $rows;
}

/**
 * Build a list of papers (with grouped authors) from a parsed CSV.
 */
function parsePapers(array $rows, string $mode): array
{
    $papers = [];
    $currentIndex = null;

    foreach ($rows as $row) {
        if (!isset($row[0])) {
            continue;
        }

        $paperNo = trim((string) ($row[1] ?? ''));

        if (trim($row[0]) === 'Sl. No.' || trim($paperNo) === '') {
            if (trim($paperNo) !== '' || $currentIndex === null) {
                continue; // header row or leading metadata rows
            }

            // Co-author row: attach to the current paper
            $papers[$currentIndex]['authors'][] = [
                'name'        => trim((string) ($row[3] ?? '')),
                'designation' => trim((string) ($row[4] ?? '')),
                'institution' => trim((string) ($row[5] ?? '')),
                'is_presenter'=> false,
            ];
            continue;
        }

        // New paper row (first / presenting author)
        $papers[] = [
            'paper_no' => (int) $paperNo,
            'title'    => trim((string) ($row[2] ?? '')),
            'mode'     => $mode,
            'authors'  => [[
                'name'        => trim((string) ($row[3] ?? '')),
                'designation' => trim((string) ($row[4] ?? '')),
                'institution' => trim((string) ($row[5] ?? '')),
                'is_presenter'=> true,
            ]],
        ];

        $currentIndex = count($papers) - 1;
    }

    return $papers;
}

$rows = [];
foreach (FILES as $key => $file) {
    $rows[$key] = parseCsv($csvDir . '/' . $file);
}

$papers = [
    'offline' => parsePapers($rows['offline'], 'offline'),
    'online'  => parsePapers($rows['online'], 'online'),
];

$byTitle = [];
foreach ($papers as $modePapers) {
    foreach ($modePapers as $paper) {
        $byTitle[$paper['title']] = $paper;
    }
}

// Display order comes from the Certificate master export
$ordered = [];
foreach ($rows['cert'] as $row) {
    if (isset($row[0], $row[2]) && trim((string) $row[1]) !== '' && trim($row[0]) !== 'Sl. No.') {
        $title = trim((string) $row[2]);
        if (isset($byTitle[$title])) {
            $ordered[] = $byTitle[$title];
        }
    }
}

$config = <<<'PHP'
<?php

/*
|--------------------------------------------------------------------------
| Selected Papers for Presentation
|--------------------------------------------------------------------------
|
| List of accepted papers selected for presentation at GETS 2026.
| Generated automatically — run `php scripts/import_selected_papers.php`
| to regenerate after uploading a new Participant Database export.
|
*/

return
PHP;

$config .= "\n" . var_export($ordered, true) . ";\n";

file_put_contents(BASE_PATH, $config);

$total = count($ordered);
$offline = count(array_filter($ordered, fn ($p) => $p['mode'] === 'offline'));
$online = count(array_filter($ordered, fn ($p) => $p['mode'] === 'online'));

echo "Wrote " . BASE_PATH . "\n";
echo "Total papers: {$total} (offline: {$offline}, online: {$online})\n";
