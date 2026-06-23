<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- Favicon --}}
        <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
        <link rel="apple-touch-icon" href="{{ asset('favicon.png') }}">

        <title>{{ config('app.name', 'Bali 2026 Conference') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-br from-forest/5 via-sage/5 to-atmosphere/5">
            {{-- Conference Logo --}}
            <div class="flex items-center justify-center mb-6">
                <a href="{{ route('conference.landing') }}" class="flex items-center">
                    <img src="{{ asset('logo-gets-2026.png') }}" alt="Conference Logo" class="h-16 w-auto object-contain">
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-4 px-6 py-8 bg-white shadow-lg border border-forest/10 rounded-2xl">
                {{ $slot }}
            </div>

            {{-- Back to Home Link --}}
            <div class="mt-6">
                <a href="{{ route('conference.landing') }}" class="flex items-center gap-2 text-sm text-gray-600 hover:text-forest transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    <span>{{ __('Back to Home') }}</span>
                </a>
            </div>
        </div>
    </body>
</html>
