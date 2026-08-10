{{--
    SECTION: DISTINGUISHED SPEAKERS
    Single auto-play carousel
--}}

@php
    $allSpeakers = collect(include resource_path('data/speakers.php'))->values();
@endphp

<section id="speakers" class="relative py-16">

    <style>
        .scrollbar-hide { scrollbar-width: none; -ms-overflow-style: none; }
        .scrollbar-hide::-webkit-scrollbar { display: none; }
    </style>

    {{-- Section Header --}}
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center mb-14">
        <div class="inline-flex items-center gap-2 px-4 py-2 bg-emerald-50 text-emerald-800 text-sm font-medium rounded-full mb-5">
            <span class="w-2 h-2 bg-emerald-500 rounded-full"></span>
            Distinguished Speakers
        </div>
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Distinguished Speakers</h2>
        <p class="text-lg text-gray-600 max-w-3xl mx-auto">
            We are proud to present our confirmed international speakers. Additional keynote speakers, researchers, industry leaders, and policymakers will be announced in the coming weeks.
        </p>
    </div>

    <style>
        .scrollbar-hide { scrollbar-width: none; -ms-overflow-style: none; }
        .scrollbar-hide::-webkit-scrollbar { display: none; }

        .speaker-marquee { overflow: hidden; }
        .speaker-marquee__track {
            display: flex;
            align-items: stretch;
            gap: 1.5rem;
            width: max-content;
            animation: speaker-marquee 60s linear infinite;
            will-change: transform;
        }
        .speaker-marquee:hover .speaker-marquee__track { animation-play-state: paused; }
        @keyframes speaker-marquee {
            from { transform: translateX(0); }
            to   { transform: translateX(-50%); }
        }
    </style>

    {{-- ═══════════════════════════════════════════════════════════════════
         CONTINUOUS INFINITE MARQUEE (lazy images)
         ═══════════════════════════════════════════════════════════════════ --}}
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 mb-8">
        <div class="flex items-center gap-2">
            <span class="inline-block w-2 h-2 bg-emerald-500 rounded-full"></span>
            <h3 class="text-xl font-semibold text-slate-800">Speakers</h3>
            <span class="text-sm text-slate-400 font-medium ml-auto">{{ count($allSpeakers) }} speakers</span>
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="speaker-marquee overflow-hidden" x-data="{ mounted: false }" x-init="$nextTick(() => mounted = true)">
            <div class="speaker-marquee__track scrollbar-hide">
                @php
                    $loopSpeakers = $allSpeakers->concat($allSpeakers);
                @endphp
                @foreach ($loopSpeakers as $speaker)
                    <div class="shrink-0 w-72 sm:w-64 lg:w-72">
                    <div class="w-full bg-white rounded-2xl border border-slate-200 overflow-hidden hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group flex flex-col relative">
                        {{-- Status Badge --}}
                        @if(!empty($speaker['confirming']))
                            <div class="absolute top-3 right-3 z-20">
                                <span class="inline-flex items-center gap-1 px-2 py-1 bg-sky-50 text-sky-700 border border-sky-200 text-xs font-medium rounded-full">
                                    <span class="w-2 h-2 bg-sky-400 rounded-full animate-pulse"></span>
                                    In Confirmation
                                </span>
                            </div>
                        @endif
                        {{-- Photo (lazy) --}}
                        <div class="aspect-square p-3 overflow-hidden bg-gradient-to-br from-emerald-50 to-emerald-100">
                            @if ($speaker['photo'])
                                <img
                                    src="{{ asset($speaker['photo']) }}"
                                    alt="{{ $speaker['name'] }}"
                                    loading="lazy"
                                    decoding="async"
                                    class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-300 rounded-xl"
                                />
                            @else
                                <div class="w-full h-full flex items-center justify-center">
                                    <span class="text-4xl font-bold text-emerald-600">{{ $speaker['initials'] }}</span>
                                </div>
                            @endif
                        </div>

                        {{-- Info --}}
                        <div class="p-5 flex-1">
                            <h4 class="text-base font-semibold text-slate-800 mb-1 leading-tight">{{ $speaker['name'] }}</h4>
                            @if (!empty($speaker['institution']))
                                <p class="text-sm text-slate-500 truncate">{{ $speaker['institution'] }}</p>
                            @endif
                            @if (!empty($speaker['country']))
                                <p class="text-xs text-slate-400 mt-1">{{ $speaker['country'] }}</p>
                            @endif
                        </div>
</div>
                    </div>
                @endforeach
        </div>
    </div>
    </div>

</section>
