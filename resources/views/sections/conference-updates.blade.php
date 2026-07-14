<section id="updates" class="py-16 bg-white">

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Important Dates</h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                Key dates you shouldn't miss for GETS 2026.
            </p>
        </div>

        <div class="max-w-5xl mx-auto space-y-10">

            {{-- ═══════════════════════════════════════════════════════════════
                 CARD BLOCK 1: Indian Delegates (Coordinated by NEMA)
                 ═══════════════════════════════════════════════════════════════ --}}
            <div
                x-data="{ urgent: true }"
                class="relative bg-gradient-to-br from-orange-50 to-amber-50 rounded-2xl p-6 md:p-8 border border-orange-200/60"
            >
                {{-- Due Tomorrow Badge (blinking) --}}
                <div class="absolute -top-3 right-4 md:right-6 z-10">
                    <span
                        x-show="urgent"
                        x-transition.opacity.duration.300ms
                        class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-red-500 text-white text-xs font-bold rounded-full shadow-lg"
                    >
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-white opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-white"></span>
                        </span>
                        Due Tomorrow
                    </span>
                </div>

                {{-- Header --}}
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 bg-orange-500 rounded-lg flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900">Indian Delegates</h3>
                        <p class="text-sm text-gray-600">Coordinated by NEMA</p>
                    </div>
                </div>

                {{-- Inner Cards Grid --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    {{-- Abstract Submission --}}
                    <div class="bg-white rounded-xl p-5 border border-orange-200 shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex items-center gap-2 mb-3">
                            <svg class="w-5 h-5 text-orange-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="text-sm font-semibold text-gray-900">Abstract Submission</span>
                        </div>
                        <p class="text-2xl md:text-3xl font-bold text-orange-600">15 July 2026</p>
                        <p class="text-xs text-gray-500 mt-1">For Presenters / Authors</p>
                    </div>

                    {{-- Registration Deadline --}}
                    <div class="bg-white rounded-xl p-5 border border-orange-200 shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex items-center gap-2 mb-3">
                            <svg class="w-5 h-5 text-orange-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                            <span class="text-sm font-semibold text-gray-900">Registration Deadline</span>
                        </div>
                        <p class="text-2xl md:text-3xl font-bold text-orange-600">25 July 2026</p>
                        <p class="text-xs text-gray-500 mt-1">For All Delegates</p>
                    </div>
                </div>

                {{-- Footer --}}
                <p class="text-sm text-gray-600 mt-4">
                    For detailed guidelines, download the
                    <a href="/docs/GETS_2026_Indian_Guidelines.pdf" target="_blank" class="text-orange-600 hover:text-orange-700 font-medium underline underline-offset-2">Indian Guidelines PDF</a>
                    or email
                    <a href="mailto:secretarynema2016@gmail.com" class="text-orange-600 hover:text-orange-700 font-medium underline underline-offset-2">secretarynema2016@gmail.com</a>
                </p>
            </div>

            {{-- ═══════════════════════════════════════════════════════════════
                 CARD BLOCK 2: Indonesia & General International Participants
                 ═══════════════════════════════════════════════════════════════ --}}
            <div class="bg-gradient-to-br from-emerald-50 to-teal-50 rounded-2xl p-6 md:p-8 border border-emerald-200/60">
                {{-- Header --}}
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 bg-teal-600 rounded-lg flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900">Indonesia &amp; General International Participants</h3>
                        <p class="text-sm text-gray-600">Direct Registration</p>
                    </div>
                </div>

                {{-- Inner Cards Grid --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    {{-- Abstract Submission --}}
                    <div class="bg-white rounded-xl p-5 border border-emerald-200 shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex items-center gap-2 mb-3">
                            <svg class="w-5 h-5 text-teal-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="text-sm font-semibold text-gray-900">Abstract Submission</span>
                        </div>
                        <p class="text-2xl md:text-3xl font-bold text-teal-700">10 August 2026</p>
                        <p class="text-xs text-gray-500 mt-1">For Presenters / Authors</p>
                    </div>

                    {{-- Registration Deadline --}}
                    <div class="bg-white rounded-xl p-5 border border-emerald-200 shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex items-center gap-2 mb-3">
                            <svg class="w-5 h-5 text-teal-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                            <span class="text-sm font-semibold text-gray-900">Registration Deadline</span>
                        </div>
                        <p class="text-2xl md:text-3xl font-bold text-teal-700">23 August 2026</p>
                        <p class="text-xs text-gray-500 mt-1">For All Participants</p>
                    </div>
                </div>

                {{-- Footer --}}
                <p class="text-sm text-gray-600 mt-4">
                    For submissions, please upload directly through the
                    <a href="{{ config('conference.conf_ms_web_url') }}" target="_blank" class="text-teal-600 hover:text-teal-700 font-medium underline underline-offset-2">registration portal</a>
                    or email your abstract to
                    <a href="mailto:info@jptranstech.org" class="text-teal-600 hover:text-teal-700 font-medium underline underline-offset-2">info@jptranstech.org</a>
                </p>
            </div>

            {{-- ═══════════════════════════════════════════════════════════════
                 CARD BLOCK 3: Summit & Event Days (Bali, Hybrid)
                 ═══════════════════════════════════════════════════════════════ --}}
            <div class="bg-gradient-to-br from-slate-50 to-gray-100 rounded-2xl p-6 md:p-8 border border-slate-200/60">
                {{-- Header --}}
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 bg-slate-600 rounded-lg flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900">Summit &amp; Event Days</h3>
                        <p class="text-sm text-gray-600">Lecture Building, Universitas Udayana,Bali, Indonesia - Hybrid Conference</p>
                    </div>
                </div>

                {{-- Inner Cards Grid --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    {{-- Conference Day --}}
                    <div class="bg-white rounded-xl p-5 border border-slate-200 shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex items-center gap-2 mb-3">
                            <svg class="w-5 h-5 text-slate-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="text-sm font-semibold text-gray-900">Conference Day</span>
                        </div>
                        <p class="text-2xl md:text-3xl font-bold text-slate-800">24 August 2026</p>
                        <p class="text-xs text-gray-500 mt-1">Plenary &amp; Parallel Sessions (09:00 – 17:20 WITA)</p>
                    </div>

                    {{-- Special Program --}}
                    <div class="bg-white rounded-xl p-5 border border-slate-200 shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex items-center gap-2 mb-3">
                            <svg class="w-5 h-5 text-slate-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-sm font-semibold text-gray-900">Special Program</span>
                        </div>
                        <p class="text-2xl md:text-3xl font-bold text-slate-800">25 August 2026</p>
                        <p class="text-xs text-gray-500 mt-1">Learning Visit to su-re.co <span class="font-medium text-amber-600">(Strictly Limited to 50 Seats)</span></p>
                    </div>
                </div>

                {{-- Footer --}}
                <p class="text-sm text-gray-600 mt-4">
                    <span class="font-medium text-slate-700">Important Notice:</span> Technical presentation slides and digital poster files must be submitted via email before <span class="font-semibold text-slate-800">3 August 2026</span>.
                </p>
            </div>

        </div>
    </div>

</section>
