{{--
    SECTION: DISTINGUISHED SPEAKERS
    Confirmed + Coming Soon
--}}

@php
    $allSpeakers = collect(include resource_path('data/speakers.php'))->values();

    $confirmedNames = [
        'Dr. Goutam Jha',
        'Prof. Takeshi Takama',
        'Prof. J. U. Ahmed',
        'Prof. L. S. Sharma',
        'Shri M. Priyananda Sharma',
        'Irfan Misuari',
        'Prof. Dr. Ir. I Made Sudarma, M.S.',
    ];

    $confirmedSpeakers = $allSpeakers->whereIn('name', $confirmedNames);

    $invitedSpeakers = $allSpeakers->where('role', 'invited')->where('confirmed', true);
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

    {{-- ═══════════════════════════════════════════════════════════════════
         1. CONFIRMED SPEAKERS — CAROUSEL
         ═══════════════════════════════════════════════════════════════════ --}}
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 mb-16">
        <div class="flex items-center gap-2 mb-8">
            <span class="inline-block w-2 h-2 bg-emerald-500 rounded-full"></span>
            <h3 class="text-xl font-semibold text-slate-800">Confirmed Speakers</h3>
            <span class="text-sm text-slate-400 font-medium ml-auto">{{ count($confirmedSpeakers) }} speakers</span>
        </div>

        <div
            x-data="{
                canPrev: false,
                canNext: true,
                update() {
                    const t = this.$refs.track;
                    this.canPrev = t.scrollLeft > 4;
                    this.canNext = t.scrollLeft < t.scrollWidth - t.clientWidth - 4;
                },
                scroll(dir) {
                    const t = this.$refs.track;
                    const card = t.querySelector('[data-carousel-card]');
                    const step = card ? card.offsetWidth + 24 : 300;
                    t.scrollBy({ left: dir === 'next' ? step : -step, behavior: 'smooth' });
                }
            }"
            x-init="update(); $nextTick(() => update())"
            class="relative"
        >
            {{-- Track --}}
            <div
                x-ref="track"
                @scroll="update()"
                class="flex items-stretch overflow-x-auto snap-x snap-mandatory gap-6 pb-4 -mx-1 px-1 scrollbar-hide"
            >
                @foreach ($confirmedSpeakers as $speaker)
                    <div
                        data-carousel-card
                        class="snap-start shrink-0 flex w-[86%] sm:w-[46%] md:w-[30.5%] lg:w-[23%]"
                    >
                        <div class="w-full bg-white rounded-2xl border border-slate-200 overflow-hidden hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group flex flex-col">
                            {{-- Photo --}}
                            <div class="aspect-square p-3 overflow-hidden bg-gradient-to-br from-emerald-50 to-emerald-100">
                                @if ($speaker['photo'])
                                    <img
                                        src="{{ asset($speaker['photo']) }}"
                                        alt="{{ $speaker['name'] }}"
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
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-emerald-50 text-emerald-700 border border-emerald-200 text-xs font-medium rounded-full mb-3">
                                    <span class="w-2 h-2 bg-emerald-500 rounded-full"></span>
                                    Confirmed Speaker
                                </span>
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

            {{-- Navigation --}}
            <div class="flex items-center justify-center gap-2 mt-2">
                <button
                    type="button"
                    @click="scroll('prev')"
                    :disabled="!canPrev"
                    aria-label="Previous speakers"
                    :class="canPrev
                        ? 'bg-white border-slate-200 text-slate-600 hover:bg-slate-50 hover:text-emerald-700'
                        : 'bg-slate-50 border-slate-100 text-slate-300 cursor-not-allowed'"
                    class="w-10 h-10 flex items-center justify-center border rounded-full shadow-sm transition-colors"
                >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button
                    type="button"
                    @click="scroll('next')"
                    :disabled="!canNext"
                    aria-label="Next speakers"
                    :class="canNext
                        ? 'bg-white border-slate-200 text-slate-600 hover:bg-slate-50 hover:text-emerald-700'
                        : 'bg-slate-50 border-slate-100 text-slate-300 cursor-not-allowed'"
                    class="w-10 h-10 flex items-center justify-center border rounded-full shadow-sm transition-colors"
                >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- ═══════════════════════════════════════════════════════════════════
         2. INVITED SPEAKERS
         ═══════════════════════════════════════════════════════════════════ --}}
    @if (count($invitedSpeakers) > 0)
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 mb-16">
            <div class="flex items-center gap-2 mb-8">
                <span class="inline-block w-2 h-2 bg-orange-500 rounded-full"></span>
                <h3 class="text-xl font-semibold text-slate-800">Invited Speakers</h3>
                <span class="text-sm text-slate-400 font-medium ml-auto">{{ count($invitedSpeakers) }} speakers</span>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                @foreach ($invitedSpeakers as $speaker)
                    <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group flex flex-col">
                        {{-- Photo --}}
                        <div class="aspect-square p-3 overflow-hidden bg-gradient-to-br from-orange-50 to-orange-50">
                            @if ($speaker['photo'])
                                <img
                                    src="{{ asset($speaker['photo']) }}"
                                    alt="{{ $speaker['name'] }}"
                                    class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-300 rounded-xl"
                                />
                            @else
                                <div class="w-full h-full flex items-center justify-center">
                                    <span class="text-4xl font-bold text-orange-600">{{ $speaker['initials'] }}</span>
                                </div>
                            @endif
                        </div>

                        {{-- Info --}}
                        <div class="p-5 flex-1">
                            <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-orange-50 text-orange-700 border border-orange-200 text-xs font-medium rounded-full mb-3">
                                <span class="w-2 h-2 bg-orange-500 rounded-full"></span>
                                Invited Speaker
                            </span>
                            <h4 class="text-base font-semibold text-slate-800 mb-1 leading-tight">{{ $speaker['name'] }}</h4>
                            @if (!empty($speaker['institution']))
                                <p class="text-sm text-slate-500 truncate">{{ $speaker['institution'] }}</p>
                            @endif
                            @if (!empty($speaker['country']))
                                <p class="text-xs text-slate-400 mt-1">{{ $speaker['country'] }}</p>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    {{-- ═══════════════════════════════════════════════════════════════════
         3. MORE DISTINGUISHED SPEAKERS — Placeholder
         ═══════════════════════════════════════════════════════════════════ --}}
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-2 mb-4">
            <span class="inline-block w-2 h-2 bg-amber-400 rounded-full"></span>
            <h3 class="text-xl font-semibold text-slate-800">More Distinguished Speakers</h3>
        </div>

        <p class="text-gray-600 mb-8 max-w-3xl">
            Our international speaker lineup is currently being finalized. Additional keynote speakers, researchers, industry leaders, and policymakers will be announced soon.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @for ($i = 0; $i < 4; $i++)
                <div class="bg-slate-50 rounded-2xl border border-dashed border-slate-300 overflow-hidden opacity-80">
                    {{-- Placeholder illustration --}}
                    <div class="aspect-square bg-gradient-to-br from-slate-100 to-slate-200 flex items-center justify-center">
                        <svg class="w-16 h-16 text-slate-300" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                        </svg>
                    </div>

                    {{-- Info --}}
                    <div class="p-5 text-center">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-amber-50 text-amber-700 border border-amber-200 text-xs font-medium rounded-full mb-3">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Coming Soon
                        </span>
                        <h4 class="text-base font-medium text-slate-500">Speaker To Be Announced</h4>
                        <p class="text-xs text-slate-400 mt-1">Announcement Coming Soon</p>
                    </div>
                </div>
            @endfor
        </div>
    </div>

</section>
