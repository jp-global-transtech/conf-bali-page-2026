{{--
    SECTION: SPEAKER TOPIC SELECTION
    Allows participants to select which keynote sessions they want to attend

    Emotional Goal: Personalization, Planning, Engagement
--}}
@section('content')
<section id="topic-selection" class="section-cinematic bg-ivory relative">

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div x-data="scrollReveal" :class="{ 'is-visible': visible }" class="scroll-reveal-group text-center mb-12">
            <span style="--stagger-index: 0" class="inline-block px-4 py-1.5 bg-forest/10 text-forest font-medium text-sm rounded-full mb-4 font-sans">Personalize Your Experience</span>
            <h2 style="--stagger-index: 1" class="text-cinematic text-4xl sm:text-5xl lg:text-6xl text-forest mb-4 leading-tight">
                Select Your Sessions
            </h2>
            <p style="--stagger-index: 2" class="font-sans text-lg text-earth max-w-2xl mx-auto editorial-relaxed">
                Choose which keynote sessions you'd like to attend. Build your personalized conference schedule.
            </p>
        </div>

        {{-- Topic Selection Card --}}
        <div x-data="{
            selectedTopics: [],
            indonesiaExpanded: true,
            indiaExpanded: true,
            get selectedCount() {
                return this.selectedTopics.length;
            },
            get selectedTopicsList() {
                return this.keynoteSpeakers.filter(s => this.selectedTopics.includes(s.id));
            }
        }" :class="{ 'is-visible': visible }" class="scroll-reveal-group bg-white rounded-2xl shadow-xl p-8 md:p-12">

            {{-- Progress Summary --}}
            <div class="bg-gradient-to-r from-forest/5 to-sage/5 rounded-xl p-6 mb-8 border border-forest/10">
                <div class="flex items-center justify-between mb-4">
                    <h4 class="font-display font-semibold text-forest">Your Selection</h4>
                    <span class="text-sm text-earth" x-text="`${selectedCount} of 8 sessions selected`"></span>
                </div>
                <div class="w-full bg-earth/20 rounded-full h-2">
                    <div class="bg-gradient-to-r from-forest to-sage h-2 rounded-full transition-all duration-300"
                         :style="`width: ${(selectedCount / 8) * 100}%`"></div>
                </div>
                <div x-show="selectedCount > 0" class="mt-4 text-sm text-atmosphere">
                    <strong>Selected Topics:</strong>
                    <span class="text-earth" x-text="selectedTopicsList.map(t => t.speaker).join(', ')"></span>
                </div>
            </div>

            @php
                $keynoteSpeakers = config('conference.keynote_speakers', []);
                $indonesiaSpeakers = collect($keynoteSpeakers)->where('delegation', 'indonesia')->values();
                $indiaSpeakers = collect($keynoteSpeakers)->where('delegation', 'india')->values();
            @endphp

            {{-- Indonesia Delegation --}}
            <div class="mb-8">
                <button @click="indonesiaExpanded = !indonesiaExpanded"
                        class="w-full flex items-center justify-between p-4 bg-gradient-to-r from-forest/5 to-sage/5 rounded-xl mb-4 hover:from-forest/10 hover:to-sage/10 transition-colors">
                    <div class="flex items-center gap-3">
                        <span class="text-3xl">🇮🇩</span>
                        <div class="text-left">
                            <h4 class="font-display font-semibold text-forest">Indonesia Delegation</h4>
                            <p class="text-sm text-earth/70">Future Tech & Applied Sciences</p>
                        </div>
                    </div>
                    <svg class="w-5 h-5 text-forest transition-transform duration-300"
                         :class="{ 'rotate-180': indonesiaExpanded }"
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div x-show="indonesiaExpanded" x-collapse class="space-y-3">
                    @foreach($indonesiaSpeakers as $speaker)
                    <label class="flex items-start gap-4 p-4 border border-forest/10 rounded-lg hover:border-forest/30 hover:bg-forest/5 transition-all cursor-pointer group">
                        <input type="checkbox"
                               value="{{ $speaker['id'] }}"
                               x-model="selectedTopics"
                               class="mt-1 w-5 h-5 text-forest rounded border-earth/30 focus:ring-forest focus:ring-offset-0">
                        <div class="flex-1">
                            <div class="flex items-start justify-between mb-1">
                                <div>
                                    <h5 class="font-semibold text-forest group-hover:text-sage transition-colors">{{ $speaker['name'] }}</h5>
                                    <p class="text-xs text-atmosphere">{{ $speaker['institution'] }}</p>
                                </div>
                                <span class="text-xs text-earth/60 bg-ivory px-2 py-1 rounded-full">{{ $speaker['time'] }}</span>
                            </div>
                            <p class="text-sm text-earth/80">{{ $speaker['topic'] }}</p>
                        </div>
                    </label>
                    @endforeach
                </div>
            </div>

            {{-- India Delegation --}}
            <div class="mb-8">
                <button @click="indiaExpanded = !indiaExpanded"
                        class="w-full flex items-center justify-between p-4 bg-gradient-to-r from-atmosphere/5 to-sage/5 rounded-xl mb-4 hover:from-atmosphere/10 hover:to-sage/10 transition-colors">
                    <div class="flex items-center gap-3">
                        <span class="text-3xl">🇮🇳</span>
                        <div class="text-left">
                            <h4 class="font-display font-semibold text-forest">India Delegation</h4>
                            <p class="text-sm text-earth/70">Business, Society & Policy</p>
                        </div>
                    </div>
                    <svg class="w-5 h-5 text-forest transition-transform duration-300"
                         :class="{ 'rotate-180': indiaExpanded }"
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div x-show="indiaExpanded" x-collapse class="space-y-3">
                    @foreach($indiaSpeakers as $speaker)
                    <label class="flex items-start gap-4 p-4 border border-atmosphere/10 rounded-lg hover:border-atmosphere/30 hover:bg-atmosphere/5 transition-all cursor-pointer group">
                        <input type="checkbox"
                               value="{{ $speaker['id'] }}"
                               x-model="selectedTopics"
                               class="mt-1 w-5 h-5 text-atmosphere rounded border-earth/30 focus:ring-atmosphere focus:ring-offset-0">
                        <div class="flex-1">
                            <div class="flex items-start justify-between mb-1">
                                <div>
                                    <h5 class="font-semibold text-forest group-hover:text-atmosphere transition-colors">{{ $speaker['name'] }}</h5>
                                    <p class="text-xs text-atmosphere">{{ $speaker['institution'] }}</p>
                                </div>
                                <span class="text-xs text-earth/60 bg-ivory px-2 py-1 rounded-full">{{ $speaker['time'] }}</span>
                            </div>
                            <p class="text-sm text-earth/80">{{ $speaker['topic'] }}</p>
                        </div>
                    </label>
                    @endforeach
                </div>
            </div>

            {{-- Actions --}}
            <div class="flex flex-col sm:flex-row gap-4 justify-center pt-6 border-t border-forest/10">
                <button @click="selectedTopics = []"
                        class="px-6 py-3 border border-forest/20 text-forest rounded-full hover:bg-forest/5 transition-colors font-sans font-medium">
                    Clear Selection
                </button>
                <button x-show="selectedCount > 0"
                        class="px-8 py-3 bg-gradient-to-r from-forest to-sage text-white rounded-full hover:shadow-lg hover:shadow-sage/25 transition-all font-sans font-semibold">
                    Save My Schedule
                </button>
            </div>

        </div>

        {{-- Personal Schedule Preview --}}
        <div x-show="selectedCount > 0"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 translate-y-4"
             x-transition:enter-end="opacity-100 translate-y-0"
             class="mt-8 bg-gradient-to-br from-forest to-sage rounded-2xl p-8 md:p-12 text-white">
            <div class="text-center mb-6">
                <h4 class="text-2xl font-display font-bold mb-2">Your Personalized Schedule</h4>
                <p class="text-ivory/80">Based on your selected sessions</p>
            </div>

            <template x-for="topic in selectedTopicsList" :key="topic.id">
                <div class="flex items-center gap-4 mb-4 bg-white/10 rounded-lg p-4">
                    <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center text-xl"
                         x-text="topic.delegation === 'indonesia' ? '🇮🇩' : '🇮🇳'"></div>
                    <div class="flex-1">
                        <h5 class="font-semibold" x-text="topic.speaker"></h5>
                        <p class="text-sm text-ivory/80" x-text="topic.topic"></p>
                    </div>
                    <span class="text-sm text-ivory/70" x-text="topic.time"></span>
                </div>
            </template>

            <div class="mt-6 text-center">
                <button class="inline-flex items-center gap-2 px-6 py-3 bg-white text-forest rounded-full hover:bg-ivory transition-colors font-sans font-semibold">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                    </svg>
                    <span>Download My Schedule</span>
                </button>
            </div>
        </div>

    </div>

</section>
@endsection
