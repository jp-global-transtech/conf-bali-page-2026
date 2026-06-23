{{--
    SECTION: IMPORTANT DATES
--}}
<section id="updates" class="py-16 bg-white">

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Important Dates</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Key dates you shouldn't miss for GETS 2026.
            </p>
        </div>

        {{-- Important Dates by Participant Type --}}
        <div class="max-w-4xl mx-auto space-y-8">

            {{-- Indian Delegates Section --}}
            <div class="bg-gradient-to-br from-orange-50 to-amber-50 rounded-2xl p-6 md:p-8 border border-orange-100">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 bg-orange-500 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900">Indian Delegates</h3>
                        <p class="text-sm text-gray-600">Coordinated by NEMA</p>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-4">
                    {{-- Abstract Submission --}}
                    <div class="bg-white rounded-xl p-4 border border-orange-200">
                        <div class="flex items-center gap-2 mb-2">
                            <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="text-sm font-semibold text-gray-900">Abstract Submission</span>
                        </div>
                        <p class="text-lg font-bold text-orange-600">15 July 2026</p>
                        <p class="text-xs text-gray-600 mt-1">For Presenters / Authors</p>
                    </div>

                    {{-- Registration Deadline --}}
                    <div class="bg-white rounded-xl p-4 border border-orange-200">
                        <div class="flex items-center gap-2 mb-2">
                            <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                            <span class="text-sm font-semibold text-gray-900">Registration Deadline</span>
                        </div>
                        <p class="text-lg font-bold text-orange-600">25 July 2026</p>
                        <p class="text-xs text-gray-600 mt-1">For All Delegates</p>
                    </div>
                </div>

                <p class="text-sm text-gray-600 mt-4">
                    For detailed guidelines, download the <a href="/docs/GETS_2026_Indian_Guidelines.pdf" target="_blank" class="text-orange-600 hover:text-orange-700 font-medium">Indian Guidelines PDF</a> or email <a href="mailto:secretarynema2016@gmail.com" class="text-orange-600 hover:text-orange-700">secretarynema2016@gmail.com</a>
                </p>
            </div>

            {{-- Indonesia & International Participants Section --}}
            <div class="bg-gradient-to-br from-forest/5 to-sage/5 rounded-2xl p-6 md:p-8 border border-forest/20">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 bg-forest rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900">Indonesia & International Participants</h3>
                        <p class="text-sm text-gray-600">Direct Registration</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-5 border border-forest/10">
                    <h4 class="font-semibold text-gray-900 mb-2">Submission & Registration Information</h4>
                    <p class="text-gray-600 text-sm mb-4">
                        Submission guidelines, registration details, and important updates are available through the official GETS 2026 website.
                    </p>
                    <a href="{{ route('conference.important-dates') }}" class="inline-flex items-center gap-2 px-5 py-2.5 bg-forest text-white font-semibold rounded-lg hover:bg-forest-700 transition-colors">
                        <span>View Registration Information</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Conference Day Section --}}
            <div class="bg-gradient-to-br from-forest to-sage rounded-2xl p-6 md:p-8 text-white">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold">Conference Day</h3>
                        <p class="text-sm text-white/80">24 August 2026</p>
                    </div>
                </div>

                <div class="grid md:grid-cols-3 gap-4">
                    <div class="bg-white/10 rounded-lg p-4">
                        <p class="text-xs text-white/70 mb-1">Format</p>
                        <p class="font-semibold">Hybrid Conference</p>
                        <p class="text-xs text-white/70 mt-1">On-site & Online</p>
                    </div>
                    <div class="bg-white/10 rounded-lg p-4">
                        <p class="text-xs text-white/70 mb-1">Venue</p>
                        <p class="font-semibold">Lecture Building</p>
                        <p class="text-xs text-white/70 mt-1">Universitas Udayana</p>
                    </div>
                    <div class="bg-white/10 rounded-lg p-4">
                        <p class="text-xs text-white/70 mb-1">Location</p>
                        <p class="font-semibold">Bali</p>
                        <p class="text-xs text-white/70 mt-1">Indonesia</p>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>
