<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'inertia' => env('SEO_TOOLS_INERTIA', false),
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => 'GETS 2026 - Global Environment & Transition Summit',
            'titleBefore'  => false,
            'description'  => 'Global Environment & Transition Summit 2026 (GETS 2026) — International conference on climate resilience, green technology, and sustainable business in Bali, Indonesia.',
            'separator'    => ' - ',
            'keywords'     => ['GETS 2026', 'Global Environment Summit', 'Climate Conference', 'Sustainability', 'Bali Conference', 'Green Technology', 'Climate Resilience', 'Environmental Conference Indonesia'],
            'canonical'    => false,
            'robots'       => 'all',
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'GETS 2026 - Global Environment & Transition Summit',
            'description' => 'Global Environment & Transition Summit 2026 (GETS 2026) — International conference on climate resilience, green technology, and sustainable business in Bali, Indonesia.',
            'url'         => null,
            'type'        => 'website',
            'site_name'   => 'GETS 2026',
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            'card'        => 'summary_large_image',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'GETS 2026 - Global Environment & Transition Summit',
            'description' => 'Global Environment & Transition Summit 2026 (GETS 2026) — International conference on climate resilience, green technology, and sustainable business in Bali, Indonesia.',
            'url'         => null,
            'type'        => 'Conference',
            'images'      => [],
        ],
    ],
];
