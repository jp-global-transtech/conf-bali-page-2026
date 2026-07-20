<section id="registration-fees" class="py-16 md:py-20 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Registration Fees</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                All participants must complete registration to secure their slot.
            </p>
        </div>

        <div x-data="{ activeTab: 'indonesia' }">
            {{-- Tab Buttons --}}
            <div class="flex flex-wrap justify-center gap-2 mb-10" role="tablist">
                <button @click="activeTab = 'indonesia'"
                        :class="activeTab === 'indonesia' ? 'bg-forest text-white shadow-md' : 'bg-white text-gray-600 border border-gray-200 hover:border-forest/30'"
                        class="px-5 py-2.5 rounded-full text-sm font-semibold transition-all duration-200"
                        role="tab" :aria-selected="activeTab === 'indonesia'">
                    Indonesia Participants
                </button>
                <button @click="activeTab = 'international'"
                        :class="activeTab === 'international' ? 'bg-forest text-white shadow-md' : 'bg-white text-gray-600 border border-gray-200 hover:border-forest/30'"
                        class="px-5 py-2.5 rounded-full text-sm font-semibold transition-all duration-200"
                        role="tab" :aria-selected="activeTab === 'international'">
                    International Participants
                </button>
                <button @click="activeTab = 'indian'"
                        :class="activeTab === 'indian' ? 'bg-forest text-white shadow-md' : 'bg-white text-gray-600 border border-gray-200 hover:border-forest/30'"
                        class="px-5 py-2.5 rounded-full text-sm font-semibold transition-all duration-200"
                        role="tab" :aria-selected="activeTab === 'indian'">
                    Indian Partners
                </button>
            </div>

            {{-- Tab Panel: Indonesia Participants --}}
            <div x-show="activeTab === 'indonesia'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0">
                <div class="max-w-sm mx-auto">
                    <div class="bg-white rounded-2xl shadow-md border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow">
                        <div class="bg-gradient-to-r from-teal-600 to-emerald-600 px-5 py-3 text-center">
                            <p class="text-white/70 text-xs font-medium uppercase tracking-wider">Indonesia</p>
                            <h3 class="text-white font-bold text-lg">Online Only</h3>
                        </div>
                        <div class="p-6 text-center">
                            <p class="text-3xl font-bold text-gray-900">IDR 500,000</p>
                            <p class="text-sm text-gray-500 mt-1">Virtual access via Zoom</p>
                            <a href="{{ route('conference.register') }}" class="mt-5 inline-block w-full px-4 py-3 bg-forest text-white font-semibold rounded-lg hover:bg-sage transition-colors text-sm">
                                Register Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Tab Panel: International Participants --}}
            <div x-show="activeTab === 'international'" x-cloak x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 max-w-3xl mx-auto">
                    <div class="bg-white rounded-2xl shadow-md border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow">
                        <div class="bg-gradient-to-r from-forest to-sage px-5 py-3 text-center">
                            <p class="text-white/70 text-xs font-medium uppercase tracking-wider">International</p>
                            <h3 class="text-white font-bold text-lg">On-site</h3>
                        </div>
                        <div class="p-6 text-center">
                            <p class="text-3xl font-bold text-gray-900">USD 110</p>
                            <p class="text-sm text-gray-500 mt-1">Full access, lunch &amp; coffee break</p>
                            <a href="{{ route('conference.register') }}" class="mt-5 inline-block w-full px-4 py-3 bg-forest text-white font-semibold rounded-lg hover:bg-sage transition-colors text-sm">
                                Register Now
                            </a>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl shadow-md border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow">
                        <div class="bg-gradient-to-r from-forest to-sage px-5 py-3 text-center">
                            <p class="text-white/70 text-xs font-medium uppercase tracking-wider">International</p>
                            <h3 class="text-white font-bold text-lg">Online</h3>
                        </div>
                        <div class="p-6 text-center">
                            <p class="text-3xl font-bold text-gray-900">USD 50</p>
                            <p class="text-sm text-gray-500 mt-1">Virtual access via Zoom</p>
                            <a href="{{ route('conference.register') }}" class="mt-5 inline-block w-full px-4 py-3 bg-forest text-white font-semibold rounded-lg hover:bg-sage transition-colors text-sm">
                                Register Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Tab Panel: Indian Partners --}}
            <div x-show="activeTab === 'indian'" x-cloak x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 max-w-3xl mx-auto">
                    <div class="bg-white rounded-2xl shadow-md border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow">
                        <div class="bg-gradient-to-r from-amber-600 to-orange-600 px-5 py-3 text-center">
                            <p class="text-white/70 text-xs font-medium uppercase tracking-wider">Indian Partner</p>
                            <h3 class="text-white font-bold text-lg">Presenter</h3>
                        </div>
                        <div class="p-6 text-center">
                            <p class="text-3xl font-bold text-gray-900">INR 10,000/-</p>
                            <p class="text-sm text-gray-500 mt-1">Coordinated by NEMA India</p>
                            <a href="{{ route('conference.register') }}" class="mt-5 inline-block w-full px-4 py-3 bg-forest text-white font-semibold rounded-lg hover:bg-sage transition-colors text-sm">
                                Register Now
                            </a>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl shadow-md border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow">
                        <div class="bg-gradient-to-r from-amber-600 to-orange-600 px-5 py-3 text-center">
                            <p class="text-white/70 text-xs font-medium uppercase tracking-wider">Indian Partner</p>
                            <h3 class="text-white font-bold text-lg">Participant</h3>
                        </div>
                        <div class="p-6 text-center">
                            <p class="text-3xl font-bold text-gray-900">INR 5,000/-</p>
                            <p class="text-sm text-gray-500 mt-1">Coordinated by NEMA India</p>
                            <a href="{{ route('conference.register') }}" class="mt-5 inline-block w-full px-4 py-3 bg-forest text-white font-semibold rounded-lg hover:bg-sage transition-colors text-sm">
                                Register Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <p class="text-center text-sm text-gray-500 mt-8">
            Fees are non-refundable. Contact
            <a href="mailto:{{ config('conference.support_email') }}" class="text-forest font-medium underline underline-offset-2">{{ config('conference.support_email') }}</a>
            for inquiries.
        </p>
    </div>
</section>
