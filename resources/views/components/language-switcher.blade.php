@php
    $currentLocale = app()->getLocale();
    $languages = config('languages.languages', []);

    // Map locale to display code
    $localeCodes = [
        'en' => 'US',
        'id' => 'IDN',
        'ja' => 'JPN',
        'hi' => 'IND'
    ];
    $currentCode = $localeCodes[$currentLocale] ?? strtoupper($currentLocale);
@endphp

<div class="relative" x-data="{ open: false }">
    {{-- Current Language Button --}}
    <button
        @click="open = !open"
        @click.away="open = false"
        class="flex items-center gap-2 px-3 py-2 rounded-lg hover:bg-forest/10 transition-colors"
        type="button"
        aria-label="Switch language"
    >
        <span class="text-sm font-medium text-forest">
            {{ $currentCode }}
        </span>
        <svg class="w-4 h-4 text-forest transition-transform" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </button>

    {{-- Language Dropdown --}}
    <div
        x-show="open"
        x-cloak
        x-transition:enter="transition ease-out duration-100"
        x-transition:enter-start="transform opacity-0 scale-95"
        x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95"
        class="absolute right-0 mt-2 w-40 bg-white rounded-xl shadow-lg border border-forest/10 py-2 z-50"
    >
        @foreach($languages as $code => $lang)
            @if($code !== $currentLocale)
                <a
                    href="{{ route('language.switch', $code) }}"
                    class="flex items-center gap-3 px-4 py-2 hover:bg-forest/5 transition-colors"
                >
                    <span class="text-xl">{{ $lang['flag'] ?? '🌐' }}</span>
                    <div class="text-left">
                        <p class="text-sm font-medium text-forest">{{ $lang['native'] }}</p>
                        <p class="text-xs text-gray-500">{{ $lang['name'] }}</p>
                    </div>
                </a>
            @endif
        @endforeach
    </div>
</div>
