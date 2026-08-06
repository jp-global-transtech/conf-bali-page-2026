{{--
    SECTION: REGISTRATION CTA
    Professional Conference Style
--}}
<section id="register" class="py-20 bg-gradient-to-br from-forest to-sage">

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        {{-- Icon --}}
        <div class="inline-flex items-center justify-center w-16 h-16 bg-white/20 rounded-2xl mb-6">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
        </div>

        {{-- Section Header --}}
        <h2 class="text-3xl md:text-4xl font-display font-bold text-white mb-4">
            Register for GETS 2026
        </h2>
        <p class="text-xl text-white/90 max-w-2xl mx-auto mb-8">
            Join global scholars, policymakers, and innovators at the Global Environment & Transition Summit 2026 in Bali.
        </p>

        {{-- Registration Options --}}
        <div class="grid md:grid-cols-2 gap-4 max-w-2xl mx-auto mb-8">
            {{-- Indonesia & International --}}
            <a href="{{ route('conference.register') }}" class="bg-white rounded-xl p-6 hover:shadow-xl transition-all group">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-10 h-10 bg-forest/10 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900">Indonesia & International</h3>
                </div>
                <p class="text-sm text-gray-600 mb-3">Register through our official portal</p>
                <span class="inline-flex items-center gap-1 text-forest font-medium text-sm group-hover:gap-2 transition-all">
                    Register Now
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </span>
            </a>

            {{-- Indian Delegates --}}
            <div class="bg-white/5 backdrop-blur rounded-xl p-6 border border-white/20">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9" />
                        </svg>
                    </div>
                    <h3 class="font-semibold text-white">Indian Delegates</h3>
                </div>
                <p class="text-sm text-white/80 mb-3">Registration Closed · Coordinated by NEMA</p>
                <span class="inline-flex items-center gap-1 text-white/50 font-medium text-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                    </svg>
                    Registration has closed
                </span>
            </div>
        </div>

        {{-- Additional Info --}}
        <p class="text-white/70 text-sm">
            Questions? Contact us at <a href="mailto:{{ config('conference.support_email') }}" class="text-white hover:underline">{{ config('conference.support_email') }}</a>
        </p>
    </div>

</section>
