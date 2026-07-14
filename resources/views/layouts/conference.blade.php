<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- Favicon --}}
        <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
        <link rel="apple-touch-icon" href="{{ asset('favicon.png') }}">

        <title>{{ isset($title) ? $title . ' - ' : '' }}{{ config('app.name', 'GETS 2026') }}</title>

        {{-- SEO Meta Tags --}}
        @php
            $seoTitle = trim($__env->yieldContent('title'));
            if ($seoTitle) {
                SEO::setTitle($seoTitle);
            }
            SEO::opengraph()->addImage(asset('logo-gets-2026.png'));
            SEO::jsonLd()->setImage(asset('logo-gets-2026.png'));
        @endphp
        {!! SEO::generate() !!}

        {{-- Fonts --}}
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet" />

        {{-- Scripts & Styles --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        {{-- Navigation --}}
        <x-navigation />

        {{-- Main Content --}}
        <main class="relative">
            @yield('content')
        </main>

        {{-- Footer --}}
        {{-- Pages can override this section to control footer visibility --}}
        @hasSection('footer')
            @yield('footer')
        @else
            <x-footer />
        @endif

        {{-- Scripts --}}
        @stack('scripts')

        {{-- WhatsApp Widget --}}
        <x-whatsapp-widget />
    </body>
</html>
