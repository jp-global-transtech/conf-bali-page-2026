{{--
    SECTION: CONFERENCE TRACKS
    Premium International Summit Style
--}}
@props(['subThemes' => []])

@php
    $themes = config('conference-structure.sub_themes', []);
    $trackCategoriesConfig = config('conference-structure.track_categories', []);

    // Convert themes to indexed array for numbering
    $tracks = [];
    $index = 1;
    foreach ($themes as $key => $theme) {
        $tracks[] = array_merge($theme, ['key' => $key, 'number' => $index++]);
    }

    // Convert track categories to indexed array for Alpine.js
    $trackCategories = [];
    foreach ($trackCategoriesConfig as $key => $value) {
        $trackCategories[] = [$key, $value];
    }
@endphp

@once
    <script>
        function conferenceTracks() {
            return {
                activeTab: 'all',
                activeTheme: 'climate_action',
                tracks: {{ Illuminate\Support\Js::from($tracks) }},
                categories: {{ Illuminate\Support\Js::from($trackCategories) }},

                // Theme mapping: which themes belong to which main category
                themeGroups: {
                    climate_action: ['climate_resilience_business', 'green_finance', 'sustainable_tourism_hospitality', 'climate_governance_cooperation'],
                    innovation: ['digital_technologies_environment', 'decarbonising_industrial_supply', 'sustainable_architecture', 'youth_innovation_climate'],
                    society_collaboration: ['traditional_knowledge_systems', 'climate_impacts_heritage', 'ecological_art_literature']
                },

                get filteredTracks() {
                    if (this.activeTab === 'all') return this.tracks;
                    return this.tracks.filter(t => t.category === this.activeTab);
                },

                // Get tracks for selected theme
                get themedTracks() {
                    const themeKeys = this.themeGroups[this.activeTheme] || [];
                    return this.tracks.filter(t => themeKeys.includes(t.key));
                }
            };
        }
    </script>
@endonce

<section id="themes" class="pt-24 pb-16 bg-gray-50">

    {{-- Section Header --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-12">
        <div class="text-center">
            <h2 class="text-3xl md:text-4xl font-display font-bold text-gray-900 mb-4">Conference Tracks</h2>
            <p class="text-gray-600 max-w-3xl mx-auto text-lg">
                Explore multidisciplinary research themes addressing climate resilience, sustainable innovation, and global environmental transition.
            </p>
        </div>
    </div>

    {{-- Conference Tracks with Alpine.js --}}
    <div x-data="conferenceTracks()" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Category Tabs --}}
        <div class="flex flex-wrap justify-center gap-2 mb-12" role="tablist">
            <template x-for="category in categories" :key="category[0]">
                <button
                    @click="activeTab = category[0]"
                    :class="activeTab === category[0]
                        ? 'bg-green-700 text-white shadow-lg'
                        : 'bg-white text-gray-600 border border-gray-200 hover:bg-green-50 hover:border-green-300'"
                    class="inline-flex items-center gap-2 px-5 py-2.5 text-sm font-medium rounded-full transition-all duration-200"
                    :aria-selected="activeTab === category[0]"
                    role="tab"
                    x-text="category[1].name">
                </button>
            </template>
        </div>

        {{-- Theme-Based Interactive Navigation --}}
        <div class="mb-12">
            {{-- Theme Tabs --}}
            <div class="flex flex-wrap justify-center gap-3 mb-8" role="tablist">
                <button
                    @click="activeTheme = 'climate_action'"
                    :class="activeTheme === 'climate_action'
                        ? 'bg-green-700 text-white shadow-lg'
                        : 'bg-white text-gray-600 border border-gray-200 hover:bg-green-50'"
                    class="inline-flex items-center gap-2 px-6 py-3 text-sm font-medium rounded-full transition-all duration-200"
                    :aria-selected="activeTheme === 'climate_action'"
                    role="tab">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    Climate Action & Sustainability
                </button>

                <button
                    @click="activeTheme = 'innovation'"
                    :class="activeTheme === 'innovation'
                        ? 'bg-green-700 text-white shadow-lg'
                        : 'bg-white text-gray-600 border border-gray-200 hover:bg-green-50'"
                    class="inline-flex items-center gap-2 px-6 py-3 text-sm font-medium rounded-full transition-all duration-200"
                    :aria-selected="activeTheme === 'innovation'"
                    role="tab">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 3H5a2 2 0 00-2 2v4a2 2 0 002 2h4a2 2 0 002-2V5a2 2 0 00-2-2zM9 15H5a2 2 0 00-2 2v4a2 2 0 002 2h4a2 2 0 002-2v-4a2 2 0 00-2-2zM19 3h-4a2 2 0 00-2 2v4a2 2 0 002 2h4a2 2 0 002-2V5a2 2 0 00-2-2zM19 15h-4a2 2 0 00-2 2v4a2 2 0 002 2h4a2 2 0 002-2v-4a2 2 0 00-2-2z"/>
                    </svg>
                    Innovation & Technology
                </button>

                <button
                    @click="activeTheme = 'society_collaboration'"
                    :class="activeTheme === 'society_collaboration'
                        ? 'bg-green-700 text-white shadow-lg'
                        : 'bg-white text-gray-600 border border-gray-200 hover:bg-green-50'"
                    class="inline-flex items-center gap-2 px-6 py-3 text-sm font-medium rounded-full transition-all duration-200"
                    :aria-selected="activeTheme === 'society_collaboration'"
                    role="tab">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    Society & Collaboration
                </button>
            </div>

            {{-- Theme Content Card --}}
            <div class="bg-gradient-to-br from-green-50 to-ivory rounded-3xl p-8 border border-green-100">
                <div class="max-w-4xl mx-auto">
                    <h4 class="text-lg font-display font-bold text-gray-900 mb-4"
                        x-show="activeTheme === 'climate_action'"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100">Climate Action & Sustainability</h4>
                    <h4 class="text-lg font-display font-bold text-gray-900 mb-4"
                        x-show="activeTheme === 'innovation'"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100">Innovation & Technology</h4>
                    <h4 class="text-lg font-display font-bold text-gray-900 mb-4"
                        x-show="activeTheme === 'society_collaboration'"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100">Society & Collaboration</h4>

                    <p class="text-gray-600 mb-4"
                       x-show="activeTheme === 'climate_action'"
                       x-transition:enter="transition ease-out duration-200"
                       x-transition:enter-start="opacity-0"
                       x-transition:enter-end="opacity-100">Explore research on climate resilience, sustainable environments, and governance frameworks.</p>
                    <p class="text-gray-600 mb-4"
                       x-show="activeTheme === 'innovation'"
                       x-transition:enter="transition ease-out duration-200"
                       x-transition:enter-start="opacity-0"
                       x-transition:enter-end="opacity-100">Discover innovations in green technology, digital transformation, and future solutions.</p>
                    <p class="text-gray-600 mb-4"
                       x-show="activeTheme === 'society_collaboration'"
                       x-transition:enter="transition ease-out duration-200"
                       x-transition:enter-start="opacity-0"
                       x-transition:enter-end="opacity-100">Learn about cultural heritage, traditional knowledge systems, and community engagement.</p>

                    <div class="flex flex-wrap gap-2">
                        <template x-for="track in themedTracks" :key="track.key">
                            <span class="inline-block px-4 py-2 bg-white rounded-full text-sm font-medium text-green-800 border border-green-200" x-text="track.title"></span>
                        </template>
                    </div>
                </div>
            </div>
        </div>

        {{-- Track Cards Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">

            <template x-for="(track, index) in filteredTracks" :key="track.key">
                <div class="group bg-white rounded-3xl border border-gray-200 p-8 relative overflow-hidden
                            transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:border-green-300">

                    {{-- Track Number Background --}}
                    <span class="absolute top-4 right-4 text-7xl font-bold text-green-50" x-text="String(track.number).padStart(2, '0')"></span>

                    {{-- Icon --}}
                    <div class="w-14 h-14 rounded-2xl bg-green-50 flex items-center justify-center mb-6 relative z-10">
                        <svg class="w-7 h-7 text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <template x-if="track.icon === 'leaf'">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 2C7.5 2 4 6.5 4 12c0 4.5 3.5 8 8 8s8-3.5 8-8c0-5.5-3.5-10-8-10z M12 22c-3.5 0-6-2.5-6-6s2.5-6 6-6 6 2.5 6 6-2.5 6-6 6z"/>
                            </template>
                            <template x-if="track.icon === 'chart'">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3v18h18 M18 17V9M13 17V5M8 17v-3"/>
                            </template>
                            <template x-if="track.icon === 'map'">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 20l3-6-3-6 4-2 3 6-3 6-4 2zM21 12l-3-6-3 6 3 6 3-6z"/>
                            </template>
                            <template x-if="track.icon === 'chip'">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 3H5a2 2 0 00-2 2v4a2 2 0 002 2h4a2 2 0 002-2V5a2 2 0 00-2-2zM9 15H5a2 2 0 00-2 2v4a2 2 0 002 2h4a2 2 0 002-2v-4a2 2 0 00-2-2zM19 3h-4a2 2 0 00-2 2v4a2 2 0 002 2h4a2 2 0 002-2V5a2 2 0 00-2-2zM19 15h-4a2 2 0 00-2 2v4a2 2 0 002 2h4a2 2 0 002-2v-4a2 2 0 00-2-2zM12 8h-2v4h2M12 16h-2v4h2"/>
                            </template>
                            <template x-if="track.icon === 'factory'">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </template>
                            <template x-if="track.icon === 'city'">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m8 0h2M9 9h1m-1 4h1m4-4h1m-1 4h1"/>
                            </template>
                            <template x-if="track.icon === 'building'">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 21h18M5 21V7l8-4 8 4v14M8 21v-4a2 2 0 012-2h4a2 2 0 012 2v4"/>
                            </template>
                            <template x-if="track.icon === 'globe'">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </template>
                            <template x-if="track.icon === 'rocket'">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z M13 10v7 M9 6l3 3 M9 14l3 3"/>
                            </template>
                            <template x-if="track.icon === 'museum'">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m8-2v-4a2 2 0 00-2-2H8a2 2 0 00-2 2v4m12 0h-4m-4 0h-4"/>
                            </template>
                            <template x-if="track.icon === 'palette'">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                            </template>
                        </svg>
                    </div>

                    {{-- Content --}}
                    <div class="relative z-10">
                        <h3 class="text-xl font-display font-bold text-gray-900 mb-3 leading-tight" x-text="track.title"></h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6 line-clamp-3" x-text="track.description"></p>

                        {{-- Category Badge & Explore --}}
                        <div class="flex items-center justify-between">
                            <span class="inline-block px-3 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">
                                <template x-if="track.category === 'climate_business'">Climate & Business</template>
                                <template x-if="track.category === 'tech_science'">Technology & Science</template>
                                <template x-if="track.category === 'governance_society'">Governance & Society</template>
                                <template x-if="track.category === 'culture_heritage'">Culture & Heritage</template>
                            </span>
                            <span class="flex items-center gap-1 text-green-700 text-sm font-medium group-hover:gap-2 transition-all">
                                Explore
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </span>
                        </div>
                    </div>

                </div>
            </template>

        </div>

        {{-- Empty State --}}
        <div x-show="filteredTracks.length === 0" x-cloak class="text-center py-12" style="display: none;">
            <p class="text-gray-500">No tracks found in this category.</p>
        </div>

    </div>

</section>
