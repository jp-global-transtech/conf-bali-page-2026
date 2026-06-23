{{--
    SECTION: CONFERENCE SCHEDULE PREVIEW
    Professional Conference Style
--}}
<section id="schedule" class="py-16 bg-gray-50">

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Conference Schedule</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Join us for an enriching conference experience in Bali
            </p>
        </div>

        {{-- Coming Soon Notice --}}
        <div class="bg-white rounded-xl shadow-sm p-8 md:p-12 text-center">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-forest/10 rounded-full mb-6">
                <svg class="w-10 h-10 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
            </div>

            <h3 class="text-2xl font-display font-bold text-gray-900 mb-4">
                Schedule Coming Soon
            </h3>

            <p class="text-gray-600 max-w-lg mx-auto mb-6">
                The detailed conference schedule will be announced closer to the event date. Stay updated with keynote speakers, session topics, and networking opportunities.
            </p>

            {{-- Conference Date Preview --}}
            <div class="bg-gradient-to-br from-forest/5 to-sage/5 rounded-xl p-6 max-w-md mx-auto mb-8">
                <div class="flex items-center justify-center gap-4 mb-4">
                    <svg class="w-8 h-8 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <div class="text-left">
                        <p class="text-sm text-gray-600">Conference Day</p>
                        <p class="text-xl font-bold text-forest">24 August 2026</p>
                    </div>
                </div>
                <div class="pt-4 border-t border-forest/10">
                    <div class="flex items-center justify-center gap-2 text-sm text-gray-600">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span>Lecture Building, Universitas Udayana, Bali, Indonesia</span>
                    </div>
                </div>
            </div>

            {{-- CTA Buttons --}}
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('conference.important-dates') }}" class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-forest text-white font-semibold rounded-lg hover:bg-forest-700 transition-colors">
                    <span>View Important Dates</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
                <a href="mailto:{{ config('conference.support_email') }}" class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-white text-forest font-semibold rounded-lg border-2 border-forest hover:bg-forest/5 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <span>Contact Us</span>
                </a>
            </div>
        </div>

        {{-- What to Expect Preview --}}
        <div class="mt-12 grid md:grid-cols-3 gap-6">
            <div class="bg-white rounded-lg p-6 text-center">
                <div class="w-12 h-12 bg-forest/10 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                    </svg>
                </div>
                <h4 class="font-semibold text-gray-900 mb-2">Keynote Sessions</h4>
                <p class="text-sm text-gray-600">Insights from leading experts in sustainability and environmental management</p>
            </div>
            <div class="bg-white rounded-lg p-6 text-center">
                <div class="w-12 h-12 bg-sage/10 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <h4 class="font-semibold text-gray-900 mb-2">Research Presentations</h4>
                <p class="text-sm text-gray-600">Share your research and get feedback from academic peers</p>
            </div>
            <div class="bg-white rounded-lg p-6 text-center">
                <div class="w-12 h-12 bg-atmosphere/10 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-atmosphere" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                    </svg>
                </div>
                <h4 class="font-semibold text-gray-900 mb-2">Networking</h4>
                <p class="text-sm text-gray-600">Connect with researchers and practitioners from around the world</p>
            </div>
        </div>
    </div>

</section>
