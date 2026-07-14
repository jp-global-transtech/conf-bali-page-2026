<section id="registration-fees" class="py-16 md:py-20 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Registration Fees</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                All co-authors and participants must complete registration to secure their slot.
            </p>
        </div>

        <div x-data="{ activeTab: 'presenter' }">
            {{-- Tab Buttons --}}
            <div class="flex flex-wrap justify-center gap-2 mb-10" role="tablist">
                <button @click="activeTab = 'presenter'"
                        :class="activeTab === 'presenter' ? 'bg-forest text-white shadow-md' : 'bg-white text-gray-600 border border-gray-200 hover:border-forest/30'"
                        class="px-5 py-2.5 rounded-full text-sm font-semibold transition-all duration-200"
                        role="tab" :aria-selected="activeTab === 'presenter'">
                    Presenter (With Paper)
                </button>
                <button @click="activeTab = 'participant'"
                        :class="activeTab === 'participant' ? 'bg-forest text-white shadow-md' : 'bg-white text-gray-600 border border-gray-200 hover:border-forest/30'"
                        class="px-5 py-2.5 rounded-full text-sm font-semibold transition-all duration-200"
                        role="tab" :aria-selected="activeTab === 'participant'">
                    Participant (Listener Only)
                </button>
                <button @click="activeTab = 'student'"
                        :class="activeTab === 'student' ? 'bg-forest text-white shadow-md' : 'bg-white text-gray-600 border border-gray-200 hover:border-forest/30'"
                        class="px-5 py-2.5 rounded-full text-sm font-semibold transition-all duration-200"
                        role="tab" :aria-selected="activeTab === 'student'">
                    Student &amp; Indian Partner
                </button>
            </div>

            {{-- Tab Panel: Presenter --}}
            <div x-show="activeTab === 'presenter'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
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

                    <div class="bg-white rounded-2xl shadow-md border border-gray-200 hover:shadow-lg transition-shadow relative">
                        <div class="absolute -top-2 right-4 z-10">
                            <span class="inline-flex items-center gap-1 px-3 py-1 bg-amber-500 text-white text-xs font-bold rounded-full shadow">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                                Limited Seat
                            </span>
                        </div>
                        <div class="bg-gradient-to-r from-teal-600 to-emerald-600 px-5 py-3 text-center">
                            <p class="text-white/70 text-xs font-medium uppercase tracking-wider">Indonesia</p>
                            <h3 class="text-white font-bold text-lg">On-site</h3>
                        </div>
                        <div class="p-6 text-center">
                            <p class="text-3xl font-bold text-gray-900">IDR 750,000</p>
                            <p class="text-sm text-gray-500 mt-1">Full access, lunch &amp; coffee break</p>
                            <a href="{{ route('conference.register') }}" class="mt-5 inline-block w-full px-4 py-3 bg-forest text-white font-semibold rounded-lg hover:bg-sage transition-colors text-sm">
                                Register Now
                            </a>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl shadow-md border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow">
                        <div class="bg-gradient-to-r from-teal-600 to-emerald-600 px-5 py-3 text-center">
                            <p class="text-white/70 text-xs font-medium uppercase tracking-wider">Indonesia</p>
                            <h3 class="text-white font-bold text-lg">Online</h3>
                        </div>
                        <div class="p-6 text-center">
                            <p class="text-3xl font-bold text-gray-900">IDR 250,000</p>
                            <p class="text-sm text-gray-500 mt-1">Virtual access via Zoom</p>
                            <a href="{{ route('conference.register') }}" class="mt-5 inline-block w-full px-4 py-3 bg-forest text-white font-semibold rounded-lg hover:bg-sage transition-colors text-sm">
                                Register Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Tab Panel: Participant --}}
            <div x-show="activeTab === 'participant'" x-cloak x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-4xl mx-auto">
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

                    <div class="bg-white rounded-2xl shadow-md border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow">
                        <div class="bg-gradient-to-r from-teal-600 to-emerald-600 px-5 py-3 text-center">
                            <p class="text-white/70 text-xs font-medium uppercase tracking-wider">Indonesia</p>
                            <h3 class="text-white font-bold text-lg">Online</h3>
                        </div>
                        <div class="p-6 text-center">
                            <p class="text-3xl font-bold text-gray-900">IDR 250,000</p>
                            <p class="text-sm text-gray-500 mt-1">Virtual access via Zoom</p>
                            <a href="{{ route('conference.register') }}" class="mt-5 inline-block w-full px-4 py-3 bg-forest text-white font-semibold rounded-lg hover:bg-sage transition-colors text-sm">
                                Register Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Tab Panel: Student & Indian Partner --}}
            <div x-show="activeTab === 'student'" x-cloak x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-4xl mx-auto">
                    <div class="bg-white rounded-2xl shadow-md border border-gray-200 hover:shadow-lg transition-shadow relative">
                        <div class="absolute -top-2 right-4 z-10">
                            <span class="inline-flex items-center gap-1 px-3 py-1 bg-red-500 text-white text-xs font-bold rounded-full shadow">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                                Valid Student ID Required
                            </span>
                        </div>
                        <div class="bg-gradient-to-r from-atmosphere to-teal-600 px-5 py-3 text-center">
                            <p class="text-white/70 text-xs font-medium uppercase tracking-wider">Student</p>
                            <h3 class="text-white font-bold text-lg">Online Only</h3>
                        </div>
                        <div class="p-6 text-center">
                            <p class="text-3xl font-bold text-gray-900">IDR 150,000</p>
                            <p class="text-sm text-gray-500 mt-1">Virtual access with valid student ID</p>
                            <a href="{{ route('conference.register') }}" class="mt-5 inline-block w-full px-4 py-3 bg-forest text-white font-semibold rounded-lg hover:bg-sage transition-colors text-sm">
                                Register Now
                            </a>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl shadow-md border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow">
                        <div class="bg-gradient-to-r from-amber-600 to-orange-600 px-5 py-3 text-center">
                            <p class="text-white/70 text-xs font-medium uppercase tracking-wider">Indian Partner</p>
                            <h3 class="text-white font-bold text-lg">Presenter On-site</h3>
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
                            <h3 class="text-white font-bold text-lg">Participant On-site</h3>
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
