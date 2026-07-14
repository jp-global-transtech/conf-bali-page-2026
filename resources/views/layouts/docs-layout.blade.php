<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $seo_description ?? 'GETS 2026 - Global Environment & Transition Summit 2026 - Documentation' }}">
    <meta name="keywords" content="{{ $seo_keywords ?? 'GETS 2026, Conference, Documentation, Guidelines, Abstract, Templates' }}">

    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $seo_title ?? 'Documentation - GETS 2026' }}">
    <meta property="og:description" content="{{ $seo_description ?? 'GETS 2026 Documentation' }}">
    <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">

    {{-- Twitter --}}
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="{{ $seo_title ?? 'Documentation - GETS 2026' }}">
    <meta property="twitter:description" content="{{ $seo_description ?? 'GETS 2026 Documentation' }}">

    <title>{{ $seo_title ?? 'Documentation' }} - Bali 2026 Conference</title>

    {{-- Favicon --}}
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('favicon.png') }}">

    {{-- Fonts: Instrument Sans via Bunny.net --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="dns-prefetch" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet" />

    {{-- Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 font-sans antialiased">
    {{-- Loading Screen --}}
    @include('components.loading-screen')

    {{-- Docs Header --}}
    <header class="fixed top-0 left-0 right-0 z-50 bg-white border-b border-gray-200">
        <div class="flex items-center justify-between px-4 sm:px-6 lg:px-8 h-16">
            {{-- Logo & Title --}}
            <div class="flex items-center gap-4">
                <a href="{{ route('conference.landing') }}" class="flex items-center">
                    <img src="{{ asset('logo-gets-2026.png') }}" alt="Conference Logo" class="h-10 w-auto object-contain">
                </a>
                <div class="h-6 w-px bg-gray-200"></div>
                <span class="text-sm font-medium text-gray-600">{{ $page_title ?? 'Documentation' }}</span>
            </div>

            {{-- Right Actions --}}
            <div class="flex items-center gap-4">
                <a href="{{ route('conference.landing') }}#register" class="hidden sm:inline-flex items-center gap-2 px-4 py-2 bg-forest text-white text-sm font-display font-semibold rounded-full hover:bg-sage transition-colors">
                    <span>Register</span>
                </a>
                {{-- Language Switcher (Temporarily Removed) --}}
                {{-- <x-language-switcher /> --}}
            </div>
        </div>
    </header>

    {{-- Docs Layout --}}
    <div class="pt-16">
        {{-- Sidebar Navigation --}}
        <aside class="fixed left-0 top-16 bottom-0 w-64 bg-white border-r border-gray-200 overflow-y-auto hidden lg:block z-40">
            <nav class="p-4 space-y-6">
                {{-- Guidelines Section --}}
                <div>
                    <h3 class="px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Documentation</h3>
                    <ul class="space-y-1">
                        <li>
                            <a href="{{ route('docs.guidelines') }}" class="flex items-center gap-2 px-3 py-2 text-sm rounded-lg {{ request()->routeIs('docs.guidelines') ? 'bg-forest/10 text-forest font-medium' : 'text-gray-600 hover:bg-gray-100' }}">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                <span>Conference Guidelines</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('docs.registration') }}" class="flex items-center gap-2 px-3 py-2 text-sm rounded-lg {{ request()->routeIs('docs.registration') ? 'bg-forest/10 text-forest font-medium' : 'text-gray-600 hover:bg-gray-100' }}">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                <span>Registration Guide</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('docs.abstract') }}" class="flex items-center gap-2 px-3 py-2 text-sm rounded-lg {{ request()->routeIs('docs.abstract') ? 'bg-forest/10 text-forest font-medium' : 'text-gray-600 hover:bg-gray-100' }}">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                <span>Abstract Submission</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('docs.templates') }}" class="flex items-center gap-2 px-3 py-2 text-sm rounded-lg {{ request()->routeIs('docs.templates') ? 'bg-forest/10 text-forest font-medium' : 'text-gray-600 hover:bg-gray-100' }}">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                </svg>
                                <span>Presentation Templates</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('docs.payment') }}" class="flex items-center gap-2 px-3 py-2 text-sm rounded-lg {{ request()->routeIs('docs.payment') ? 'bg-forest/10 text-forest font-medium' : 'text-gray-600 hover:bg-gray-100' }}">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                </svg>
                                <span>Payment Information</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('docs.faq') }}" class="flex items-center gap-2 px-3 py-2 text-sm rounded-lg {{ request()->routeIs('docs.faq') ? 'bg-forest/10 text-forest font-medium' : 'text-gray-600 hover:bg-gray-100' }}">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>FAQ</span>
                            </a>
                        </li>
                    </ul>
                </div>

                {{-- Quick Links --}}
                <div>
                    <h3 class="px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Quick Links</h3>
                    <ul class="space-y-1">
                        <li>
                            <a href="{{ route('conference.landing') }}" class="flex items-center gap-2 px-3 py-2 text-sm text-gray-600 hover:bg-gray-100 rounded-lg">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                <span>Back to Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('conference.contact') }}" class="flex items-center gap-2 px-3 py-2 text-sm text-gray-600 hover:bg-gray-100 rounded-lg">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span>Contact Support</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </aside>

        {{-- Main Content --}}
        <main class="lg:ml-64 min-h-screen">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                {{-- Mobile Back Button --}}
                <div class="lg:hidden mb-6">
                    <a href="{{ route('conference.landing') }}" class="inline-flex items-center gap-2 text-sm text-gray-600 hover:text-forest">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                        <span>Back to Home</span>
                    </a>
                </div>

                {{-- Page Content --}}
                @yield('content')

                {{-- Page Navigation (Bottom) --}}
                @if(isset($nav_prev) || isset($nav_next))
                <div class="mt-16 pt-8 border-t border-gray-200">
                    <div class="flex justify-between">
                        @if(isset($nav_prev))
                        <a href="{{ $nav_prev['url'] }}" class="flex items-center gap-2 text-gray-600 hover:text-forest">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                            </svg>
                            <div>
                                <p class="text-xs text-gray-400">Previous</p>
                                <p class="font-medium">{{ $nav_prev['title'] }}</p>
                            </div>
                        </a>
                        @endif
                        @if(isset($nav_next))
                        <a href="{{ $nav_next['url'] }}" class="flex items-center gap-2 text-gray-600 hover:text-forest ml-auto text-right">
                            <div>
                                <p class="text-xs text-gray-400">Next</p>
                                <p class="font-medium">{{ $nav_next['title'] }}</p>
                            </div>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                        @endif
                    </div>
                </div>
                @endif
            </div>
        </main>
    </div>

    {{-- Footer for Docs --}}
    <footer class="lg:ml-64 bg-white border-t border-gray-200">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
                <p class="text-sm text-gray-500">© 2026 Global Environment & Transitions Summit (GETS) 2026. All rights reserved.</p>
                <div class="flex items-center gap-6">
                    <a href="{{ route('conference.landing') }}" class="text-sm text-gray-500 hover:text-forest">Home</a>
                    <a href="{{ route('conference.contact') }}" class="text-sm text-gray-500 hover:text-forest">Contact</a>
                </div>
            </div>
        </div>
    </footer>

    {{-- WhatsApp Widget --}}
    <x-whatsapp-widget />
</body>
</html>
