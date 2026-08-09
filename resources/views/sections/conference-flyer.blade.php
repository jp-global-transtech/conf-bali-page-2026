{{--
    SECTION: OFFICIAL FLYER
    GETS 2026 Official Flyer showcase with download button
--}}
@php
    $flyerFile = 'images/GETS_Official_Flyer_v.2.0_New.png';
@endphp

<section id="flyer" class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-10 lg:gap-14 items-center">

            {{-- Flyer Preview --}}
            <div class="flex justify-center lg:justify-end">
                <div class="relative w-full max-w-sm lg:max-w-md">
                    <div class="absolute -inset-2 bg-gradient-to-br from-forest/10 to-sage/10 rounded-3xl blur-lg"></div>
                    <div class="relative rounded-2xl overflow-hidden shadow-lg border border-gray-200 bg-white">
                        <img
                            src="{{ asset($flyerFile) }}"
                            alt="GETS 2026 Official Flyer"
                            class="w-full h-auto object-contain"
                            loading="lazy"
                        >
                    </div>
                </div>
            </div>

            {{-- Flyer Info --}}
            <div class="text-center lg:text-left">
                <p class="inline-flex items-center gap-2 text-sm font-semibold text-forest uppercase tracking-wider mb-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    Official Flyer
                </p>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    GETS 2026 Official Flyer
                </h2>
                <p class="text-gray-600 leading-relaxed mb-8">
                    Get the official flyer for the Global Environment &amp; Transition Summit 2026.
                    Download and share it to help spread the word about the conference.
                </p>

                <div class="flex flex-col sm:flex-row gap-3 justify-center lg:justify-start">
                    <a
                        href="{{ asset($flyerFile) }}"
                        download="GETS_Official_Flyer_v.2.0_New.png"
                        class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-forest text-white font-semibold rounded-lg hover:bg-forest-700 transition-colors shadow-md hover:shadow-lg"
                    >
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                        </svg>
                        <span>Download Flyer</span>
                    </a>
                    <a
                        href="{{ route('conference.register') }}"
                        class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-white text-forest font-semibold rounded-lg border-2 border-forest hover:bg-forest-50 transition-colors"
                    >
                        <span>Register for GETS 2026</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
