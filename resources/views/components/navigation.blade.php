{{-- Conference Navigation - Professional Style --}}
<nav x-data="{ mobileOpen: false, aboutOpen: false }" class="fixed top-0 left-0 right-0 z-50 bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">

            {{-- Logo --}}
            <a href="{{ route('conference.landing') }}" class="flex items-center group">
    <img src="{{ asset('logo-gets-2026.png') }}" alt="Conference Logo" class="h-20 w-auto object-contain">
</a>

            {{-- Desktop Navigation --}}
            <div class="hidden lg:flex items-center gap-8">

                {{-- Home --}}
                <a href="{{ route('conference.landing') }}" class="text-sm font-medium {{ request()->routeIs('conference.landing') ? 'text-forest font-semibold' : 'text-gray-600 hover:text-forest' }} transition-colors">{{ __('navigation.home') }}</a>

                {{-- About Conference Dropdown --}}
                <div class="relative" x-data="{ aboutOpen: false }">
                    <button
                        @click="aboutOpen = !aboutOpen"
                        @click.away="aboutOpen = false"
                        class="flex items-center gap-1 text-sm font-medium {{ request()->routeIs('conference.overview', 'conference.committee', 'conference.important-dates', 'conference.schedule') ? 'text-forest font-semibold' : 'text-gray-600 hover:text-forest' }} transition-colors"
                    >
                        {{ __('navigation.about') }}
                        <svg class="w-4 h-4 transition-transform" :class="{ 'rotate-180': aboutOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    {{-- Dropdown Menu --}}
                    <div
                        x-show="aboutOpen"
                        x-cloak
                        x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="absolute left-0 mt-2 w-48 bg-white rounded-lg shadow-md border border-gray-200 py-1 z-[60]"
                    >
                        <a href="{{ route('conference.overview') }}" class="block px-4 py-2 text-sm {{ request()->routeIs('conference.overview') ? 'text-forest bg-gray-50 font-semibold' : 'text-gray-600 hover:bg-gray-50 hover:text-forest' }} transition-colors">{{ __('navigation.overview') ?? __('navigation.about') }}</a>
                        <a href="{{ route('conference.committee') }}" class="block px-4 py-2 text-sm {{ request()->routeIs('conference.committee') ? 'text-forest bg-gray-50 font-semibold' : 'text-gray-600 hover:bg-gray-50 hover:text-forest' }} transition-colors">{{ __('navigation.committee') }}</a>
                        <a href="{{ route('conference.important-dates') }}" class="block px-4 py-2 text-sm {{ request()->routeIs('conference.important-dates') ? 'text-forest bg-gray-50 font-semibold' : 'text-gray-600 hover:bg-gray-50 hover:text-forest' }} transition-colors">Important Dates</a>
                        <a href="{{ route('conference.schedule') }}" class="block px-4 py-2 text-sm {{ request()->routeIs('conference.schedule') ? 'text-forest bg-gray-50 font-semibold' : 'text-gray-600 hover:bg-gray-50 hover:text-forest' }} transition-colors">{{ __('navigation.schedule') }}</a>
                    </div>
                </div>

                {{-- Speakers --}}
                <a href="{{ route('conference.speakers') }}" class="text-sm font-medium {{ request()->routeIs('conference.speakers', 'conference.invited-speakers') ? 'text-forest font-semibold' : 'text-gray-600 hover:text-forest' }} transition-colors">{{ __('navigation.speakers') }}</a>

                {{-- Experience --}}
                <a href="{{ route('conference.experience') }}" class="text-sm font-medium {{ request()->routeIs('conference.experience') ? 'text-forest font-semibold' : 'text-gray-600 hover:text-forest' }} transition-colors">Participant Guide</a>

                {{-- Call for Abstract --}}
                <a href="{{ route('conference.call-for-abstract') }}" class="text-sm font-medium {{ request()->routeIs('conference.call-for-abstract') ? 'text-forest font-semibold' : 'text-gray-600 hover:text-forest' }} transition-colors">Call for Abstract</a>

                {{-- Registration --}}
                <a href="{{ route('conference.register') }}" class="text-sm font-medium {{ request()->routeIs('conference.register') ? 'text-forest font-semibold' : 'text-gray-600 hover:text-forest' }} transition-colors">{{ __('navigation.registration') }}</a>

                {{-- Contact --}}
                <a href="{{ route('conference.contact') }}" class="text-sm font-medium {{ request()->routeIs('conference.contact') ? 'text-forest font-semibold' : 'text-gray-600 hover:text-forest' }} transition-colors">{{ __('navigation.contact') }}</a>

                {{-- Documentation Dropdown --}}
                <div class="relative" x-data="{ docsOpen: false }">
                    <button
                        @click="docsOpen = !docsOpen"
                        @click.away="docsOpen = false"
                        class="flex items-center gap-1 text-sm font-medium {{ request()->routeIs('docs.*') ? 'text-forest font-semibold' : 'text-gray-600 hover:text-forest' }} transition-colors"
                    >
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                        <svg class="w-4 h-4 transition-transform" :class="{ 'rotate-180': docsOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    {{-- Dropdown Menu --}}
                    <div
                        x-show="docsOpen"
                        x-cloak
                        x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="absolute right-0 mt-2 w-56 bg-white rounded-lg shadow-lg border border-gray-200 py-2 z-[60]"
                    >
                        <div class="px-4 py-2 border-b border-gray-100">
                            <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Documentation</p>
                        </div>
                        <a href="{{ route('docs.guidelines') }}" class="flex items-center gap-3 px-4 py-2 text-sm {{ request()->routeIs('docs.guidelines') ? 'text-forest bg-gray-50 font-semibold' : 'text-gray-600 hover:bg-gray-50 hover:text-forest' }} transition-colors">
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            <span>Conference Guidelines</span>
                        </a>
                        <a href="{{ route('docs.registration') }}" class="flex items-center gap-3 px-4 py-2 text-sm {{ request()->routeIs('docs.registration') ? 'text-forest bg-gray-50 font-semibold' : 'text-gray-600 hover:bg-gray-50 hover:text-forest' }} transition-colors">
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            <span>Registration Guide</span>
                        </a>
                        <a href="{{ route('docs.abstract') }}" class="flex items-center gap-3 px-4 py-2 text-sm {{ request()->routeIs('docs.abstract') ? 'text-forest bg-gray-50 font-semibold' : 'text-gray-600 hover:bg-gray-50 hover:text-forest' }} transition-colors">
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            <span>Abstract Submission</span>
                        </a>
                        <a href="{{ route('docs.payment') }}" class="flex items-center gap-3 px-4 py-2 text-sm {{ request()->routeIs('docs.payment') ? 'text-forest bg-gray-50 font-semibold' : 'text-gray-600 hover:bg-gray-50 hover:text-forest' }} transition-colors">
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                            </svg>
                            <span>Payment Information</span>
                        </a>
                        <a href="{{ route('docs.faq') }}" class="flex items-center gap-3 px-4 py-2 text-sm {{ request()->routeIs('docs.faq') ? 'text-forest bg-gray-50 font-semibold' : 'text-gray-600 hover:bg-gray-50 hover:text-forest' }} transition-colors">
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>FAQ</span>
                        </a>
                    </div>
                </div>

            {{-- Language Switcher (Temporarily Removed) --}}
                {{-- <x-language-switcher /> --}}

            </div>

            {{-- Register CTA Button --}}
            <div class="hidden lg:flex items-center">
                <a href="{{ route('conference.register') }}" class="inline-flex items-center px-5 py-2.5 bg-forest text-white text-sm font-semibold rounded-lg hover:bg-forest-700 transition-colors">
                    <span>{{ __('conference.register_now') }}</span>
                </a>
            </div>

            {{-- Mobile menu button --}}
            <button @click="mobileOpen = !mobileOpen" class="lg:hidden p-2.5 rounded-lg hover:bg-gray-100 transition-colors">
                <svg x-show="!mobileOpen" class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg x-show="mobileOpen" x-cloak class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

        </div>
    </div>

    {{-- Mobile Menu --}}
    <div x-show="mobileOpen" x-cloak
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         class="lg:hidden bg-white border-t border-gray-200">
        <div class="px-4 py-4 space-y-1">

            {{-- Home --}}
            <a href="{{ route('conference.landing') }}" @click="mobileOpen = false" class="block px-4 py-2 {{ request()->routeIs('conference.landing') ? 'text-forest bg-gray-50 font-semibold' : 'text-gray-600' }} hover:bg-gray-50 rounded-lg">{{ __('navigation.home') }}</a>

            {{-- About Conference (Mobile) --}}
            <div x-data="{ aboutMobileOpen: false }">
                <button
                    @click="aboutMobileOpen = !aboutMobileOpen"
                    class="flex items-center justify-between w-full px-4 py-2 {{ request()->routeIs('conference.overview', 'conference.committee', 'conference.important-dates', 'conference.schedule') ? 'text-forest font-semibold' : 'text-gray-600' }} hover:bg-gray-50 rounded-lg"
                >
                    {{ __('navigation.about') }}
                    <svg class="w-4 h-4 transition-transform" :class="{ 'rotate-180': aboutMobileOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div x-show="aboutMobileOpen" x-collapse class="pl-4 space-y-1">
                    <a href="{{ route('conference.overview') }}" @click="mobileOpen = false" class="block px-4 py-2 text-sm {{ request()->routeIs('conference.overview') ? 'text-forest font-semibold' : 'text-gray-600' }} hover:bg-gray-50 rounded-lg">{{ __('navigation.overview') ?? __('navigation.about') }}</a>
                    <a href="{{ route('conference.committee') }}" @click="mobileOpen = false" class="block px-4 py-2 text-sm {{ request()->routeIs('conference.committee') ? 'text-forest font-semibold' : 'text-gray-600' }} hover:bg-gray-50 rounded-lg">{{ __('navigation.committee') }}</a>
                    <a href="{{ route('conference.important-dates') }}" @click="mobileOpen = false" class="block px-4 py-2 text-sm {{ request()->routeIs('conference.important-dates') ? 'text-forest font-semibold' : 'text-gray-600' }} hover:bg-gray-50 rounded-lg">Important Dates</a>
                    <a href="{{ route('conference.schedule') }}" @click="mobileOpen = false" class="block px-4 py-2 text-sm {{ request()->routeIs('conference.schedule') ? 'text-forest font-semibold' : 'text-gray-600' }} hover:bg-gray-50 rounded-lg">{{ __('navigation.schedule') }}</a>
                </div>
            </div>

            {{-- Speakers --}}
            <a href="{{ route('conference.speakers') }}" @click="mobileOpen = false" class="block px-4 py-2 {{ request()->routeIs('conference.speakers', 'conference.invited-speakers') ? 'text-forest bg-gray-50 font-semibold' : 'text-gray-600' }} hover:bg-gray-50 rounded-lg">{{ __('navigation.speakers') }}</a>

            {{-- Experience --}}
            <a href="{{ route('conference.experience') }}" @click="mobileOpen = false" class="block px-4 py-2 {{ request()->routeIs('conference.experience') ? 'text-forest bg-gray-50 font-semibold' : 'text-gray-600' }} hover:bg-gray-50 rounded-lg">Participant Guide</a>

            {{-- Call for Abstract --}}
            <a href="{{ route('conference.call-for-abstract') }}" @click="mobileOpen = false" class="block px-4 py-2 {{ request()->routeIs('conference.call-for-abstract') ? 'text-forest bg-gray-50 font-semibold' : 'text-gray-600' }} hover:bg-gray-50 rounded-lg">Call for Abstract</a>

            {{-- Registration --}}
            <a href="{{ route('conference.register') }}" @click="mobileOpen = false" class="block px-4 py-2 {{ request()->routeIs('conference.register') ? 'text-forest bg-gray-50 font-semibold' : 'text-gray-600' }} hover:bg-gray-50 rounded-lg">{{ __('navigation.registration') }}</a>

            {{-- Contact --}}
            <a href="{{ route('conference.contact') }}" @click="mobileOpen = false" class="block px-4 py-2 {{ request()->routeIs('conference.contact') ? 'text-forest bg-gray-50 font-semibold' : 'text-gray-600' }} hover:bg-gray-50 rounded-lg">{{ __('navigation.contact') }}</a>

            {{-- Documentation (Mobile) --}}
            <div x-data="{ docsMobileOpen: false }">
                <button
                    @click="docsMobileOpen = !docsMobileOpen"
                    class="flex items-center justify-between w-full px-4 py-2 {{ request()->routeIs('docs.*') ? 'text-forest font-semibold' : 'text-gray-600' }} hover:bg-gray-50 rounded-lg"
                >
                    <span class="flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                        Documentation
                    </span>
                    <svg class="w-4 h-4 transition-transform" :class="{ 'rotate-180': docsMobileOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div x-show="docsMobileOpen" x-collapse class="pl-4 space-y-1">
                    <a href="{{ route('docs.guidelines') }}" @click="mobileOpen = false" class="flex items-center gap-2 px-4 py-2 text-sm {{ request()->routeIs('docs.guidelines') ? 'text-forest font-semibold' : 'text-gray-600' }} hover:bg-gray-50 rounded-lg">
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        Conference Guidelines
                    </a>
                    <a href="{{ route('docs.registration') }}" @click="mobileOpen = false" class="flex items-center gap-2 px-4 py-2 text-sm {{ request()->routeIs('docs.registration') ? 'text-forest font-semibold' : 'text-gray-600' }} hover:bg-gray-50 rounded-lg">
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        Registration Guide
                    </a>
                    <a href="{{ route('docs.abstract') }}" @click="mobileOpen = false" class="flex items-center gap-2 px-4 py-2 text-sm {{ request()->routeIs('docs.abstract') ? 'text-forest font-semibold' : 'text-gray-600' }} hover:bg-gray-50 rounded-lg">
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        Abstract Submission
                    </a>
                    <a href="{{ route('docs.payment') }}" @click="mobileOpen = false" class="flex items-center gap-2 px-4 py-2 text-sm {{ request()->routeIs('docs.payment') ? 'text-forest font-semibold' : 'text-gray-600' }} hover:bg-gray-50 rounded-lg">
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                        </svg>
                        Payment Information
                    </a>
                    <a href="{{ route('docs.faq') }}" @click="mobileOpen = false" class="flex items-center gap-2 px-4 py-2 text-sm {{ request()->routeIs('docs.faq') ? 'text-forest font-semibold' : 'text-gray-600' }} hover:bg-gray-50 rounded-lg">
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        FAQ
                    </a>
                </div>
            </div>

            {{-- Language Switcher (Mobile - Temporarily Removed) --}}
            {{-- <div class="px-4 py-2">
                <x-language-switcher />
            </div> --}}

            {{-- Register CTA (Mobile) --}}
            <a href="{{ route('conference.register') }}" @click="mobileOpen = false" class="block w-full text-center mx-4 px-4 py-3 bg-forest text-white font-semibold rounded-lg">
                {{ __('conference.register_now') }}
            </a>

        </div>
    </div>
</nav>
