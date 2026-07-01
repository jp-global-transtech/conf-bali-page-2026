{{--
    SECTION: EXPLORE LINKS
    Quick access to important conference pages
--}}
<section class="py-12 bg-gradient-to-br from-white via-[#F8FBF9] to-[#F5F9F6]">

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center mb-10">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-3">Explore GETS 2026</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Everything you need to know about the conference experience
            </p>
        </div>

        {{-- Links Grid --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-5">

            {{-- Participant Guide --}}
            <a href="{{ route('conference.experience') }}" class="group bg-white rounded-xl p-5 border border-gray-200 hover:border-forest hover:shadow-lg transition-all">
                <div class="w-12 h-12 bg-forest/10 rounded-lg flex items-center justify-center mb-4 group-hover:bg-forest/20 transition-colors">
                    <svg class="w-6 h-6 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-900 mb-1 group-hover:text-forest transition-colors">Participant Guide</h3>
                <p class="text-sm text-gray-600">Travel, visa, accommodation & venue information</p>
                <span class="inline-flex items-center gap-1 mt-3 text-forest text-sm font-medium opacity-0 group-hover:opacity-100 transition-opacity">
                    Explore
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </span>
            </a>

            {{-- Schedule --}}
            <a href="{{ route('conference.schedule') }}" class="group bg-white rounded-xl p-5 border border-gray-200 hover:border-forest hover:shadow-lg transition-all">
                <div class="w-12 h-12 bg-forest/10 rounded-lg flex items-center justify-center mb-4 group-hover:bg-forest/20 transition-colors">
                    <svg class="w-6 h-6 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-900 mb-1 group-hover:text-forest transition-colors">Schedule</h3>
                <p class="text-sm text-gray-600">Conference program & session timings</p>
                <span class="inline-flex items-center gap-1 mt-3 text-forest text-sm font-medium opacity-0 group-hover:opacity-100 transition-opacity">
                    View Schedule
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </span>
            </a>

            {{-- Venue --}}
            <a href="{{ route('conference.venue') }}" class="group bg-white rounded-xl p-5 border border-gray-200 hover:border-forest hover:shadow-lg transition-all">
                <div class="w-12 h-12 bg-forest/10 rounded-lg flex items-center justify-center mb-4 group-hover:bg-forest/20 transition-colors">
                    <svg class="w-6 h-6 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-900 mb-1 group-hover:text-forest transition-colors">Venue</h3>
                <p class="text-sm text-gray-600">Location details & facilities</p>
                <span class="inline-flex items-center gap-1 mt-3 text-forest text-sm font-medium opacity-0 group-hover:opacity-100 transition-opacity">
                    Get Directions
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </span>
            </a>

            {{-- Contact --}}
            <a href="{{ route('conference.contact') }}" class="group bg-white rounded-xl p-5 border border-gray-200 hover:border-forest hover:shadow-lg transition-all">
                <div class="w-12 h-12 bg-forest/10 rounded-lg flex items-center justify-center mb-4 group-hover:bg-forest/20 transition-colors">
                    <svg class="w-6 h-6 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-900 mb-1 group-hover:text-forest transition-colors">Contact</h3>
                <p class="text-sm text-gray-600">Get in touch with the organizing committee</p>
                <span class="inline-flex items-center gap-1 mt-3 text-forest text-sm font-medium opacity-0 group-hover:opacity-100 transition-opacity">
                    Contact Us
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </span>
            </a>

        </div>
    </div>

</section>
