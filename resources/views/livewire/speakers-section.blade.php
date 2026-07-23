{{--
    resources/views/livewire/speakers-section.blade.php
    JIC Bali 2026 — Speakers Section (Livewire + Alpine.js + Tailwind + Preline)
--}}

<div class="w-full py-12 px-4 md:px-8">

    {{-- ── STATS BAR ─────────────────────────────────────────────────── --}}
    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mb-10">
        @php
            $statItems = [
                ['value' => $stats['total'],     'label' => 'Total speakers confirmed', 'color' => 'text-emerald-600'],
                ['value' => $stats['plenary'],   'label' => 'Plenary speakers',          'color' => 'text-amber-600'],
                ['value' => $stats['invited'],   'label' => 'Invited speakers',          'color' => 'text-orange-600'],
                ['value' => $stats['countries'], 'label' => 'Countries represented',     'color' => 'text-slate-500'],
            ];
        @endphp

        @foreach ($statItems as $stat)
            <div class="bg-slate-50 rounded-xl px-4 py-3 border border-slate-100">
                <div class="text-2xl font-medium {{ $stat['color'] }} leading-none">{{ $stat['value'] }}</div>
                <div class="text-xs text-slate-400 mt-1">{{ $stat['label'] }}</div>
            </div>
        @endforeach
    </div>

    {{-- ── FILTER TABS ───────────────────────────────────────────────── --}}
    <div class="flex flex-wrap items-center gap-2 mb-10 pb-4 border-b border-slate-100">

        {{-- Role filters --}}
        @php
            $roleTabs = [
                ['key' => 'all',     'label' => 'All speakers'],
                ['key' => 'plenary', 'label' => 'Plenary'],
                ['key' => 'invited', 'label' => 'Invited'],
            ];
        @endphp

        @foreach ($roleTabs as $tab)
            <button
                wire:click="setRoleFilter('{{ $tab['key'] }}')"
                class="text-xs px-4 py-1.5 rounded-full border transition-all duration-150
                    {{ $roleFilter === $tab['key']
                        ? 'bg-emerald-50 text-emerald-800 border-transparent font-medium'
                        : 'text-slate-500 border-slate-200 hover:border-slate-300 hover:text-slate-700' }}"
            >
                {{ $tab['label'] }}
            </button>
        @endforeach

        <span class="text-slate-200 mx-1 hidden md:inline">|</span>

        {{-- Country filters --}}
        @foreach (['all' => 'All countries', 'India' => '🇮🇳 India', 'Indonesia' => '🇮🇩 Indonesia'] as $key => $label)
            <button
                wire:click="setCountryFilter('{{ $key }}')"
                class="text-xs px-4 py-1.5 rounded-full border transition-all duration-150
                    {{ $countryFilter === $key
                        ? 'bg-slate-100 text-slate-700 border-transparent font-medium'
                        : 'text-slate-400 border-slate-200 hover:border-slate-300' }}"
            >
                {{ $label }}
            </button>
        @endforeach
    </div>

    {{-- ═══════════════════════════════════════════════════════════════
         SECTION A · PLENARY / CHIEF PATRON
         ═══════════════════════════════════════════════════════════════ --}}
    @if (count($chiefPatron) > 0)
        <div class="mb-14">
            <x-speakers.section-label
                color="emerald"
                tag="Opening address"
                heading="Keynote Speaker"
            />

            @foreach ($chiefPatron as $speaker)
                <x-speakers.keynote-card :speaker="$speaker" />
            @endforeach
        </div>
    @endif

    {{-- ═══════════════════════════════════════════════════════════════
         SECTION B · KEYNOTE SPEAKERS
         ═══════════════════════════════════════════════════════════════ --}}
    @if (count($keynote) > 0)
        <div class="mb-14">
            <x-speakers.section-label
                color="amber"
                tag="Keynote sessions"
                heading="Keynote Speakers"
            />

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                @foreach ($keynote as $speaker)
                    <x-speakers.keynote-card
                        :speaker="$speaker"
                        wire:click="openModal({{ $speaker['id'] }})"
                    />
                @endforeach
            </div>
        </div>
    @endif

    {{-- ═══════════════════════════════════════════════════════════════
         SECTION C · INVITED SPEAKERS
         ═══════════════════════════════════════════════════════════════ --}}
    @if (count($invited) > 0)
        <div class="mb-14">
            <x-speakers.section-label
                color="orange"
                tag="Invited speakers"
                heading="Invited Speakers"
            />

            <div class="masonry-grid -mx-2">
                <style>
                    .masonry-grid {
                        column-count: 2;
                        column-gap: 1rem;
                    }
                    @media (min-width: 640px) {
                        .masonry-grid { column-count: 2; }
                    }
                    @media (min-width: 768px) {
                        .masonry-grid { column-count: 3; }
                    }
                    @media (min-width: 1024px) {
                        .masonry-grid { column-count: 4; }
                    }
                    .masonry-item {
                        break-inside: avoid;
                        margin-bottom: 1rem;
                    }
                </style>
                @foreach ($invited as $speaker)
                    <div class="masonry-item">
                        @if ($speaker['confirmed'])
                            <x-speakers.invited-card
                                :speaker="$speaker"
                                wire:click="openModal({{ $speaker['id'] }})"
                            />
                        @else
                            <x-speakers.tbc-card :speaker="$speaker" />
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    {{-- Empty state --}}
    @if (count($chiefPatron) === 0 && count($keynote) === 0 && count($invited) === 0)
        <div class="text-center py-20 text-slate-400 text-sm">
            <i class="ti ti-users text-3xl block mb-2 opacity-30" aria-hidden="true"></i>
            Tidak ada speaker yang sesuai filter.
        </div>
    @endif

    {{-- ═══════════════════════════════════════════════════════════════
         MODAL DETAIL SPEAKER (Alpine.js)
         ═══════════════════════════════════════════════════════════════ --}}
    @if ($modalSpeaker)
        <x-speakers.modal
            :speaker="$modalSpeaker"
            wire:click.self="closeModal"
        />
    @endif

</div>
