@extends('layouts.conference')

{{-- SEO Meta Tags --}}
@section('title', 'Global Environment & Transition Summit 2026 (GETS 2026)')

@section('content')
@php
    $importantDates = config('conference-milestones.importantDates', []);
@endphp

{{-- Hero Section --}}
@include('sections.hero-immersive')

<div class="space-y-0">
    {{-- Logo Cloud Section --}}
    <div>@include('sections.logo-cloud')</div>

    {{-- Why This Conference Matters --}}
    <div>@include('sections.conference-philosophy')</div>

    {{-- Distinguished Speakers --}}
    <div class="bg-gray-50 py-16">@include('sections.speaker-experience')</div>

    {{-- Who Should Attend --}}
    <div>@include('sections.who-should-attend')</div>

    {{-- Conference Benefits --}}
    <div>@include('sections.conference-benefits')</div>

    {{-- Conference Updates --}}
    <div>@include('sections.conference-updates', ['importantDates' => $importantDates])</div>

    {{-- Venue & Location --}}
    <div class="bg-gray-50 py-16">
        <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Venue &amp; Location</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Lecture Building, Universitas Udayana — Bali, Indonesia
                </p>
            </div>

            {{-- Venue Images + Google Maps Grid --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 max-w-5xl mx-auto">
                {{-- Venue Images Carousel --}}
                <div class="rounded-2xl overflow-hidden shadow-lg border border-gray-200">
                    <x-image-carousel
                        :images="[
                            'images/venue/lecture-building-2.jpg',
                            'images/venue/lecture-building-aerial.jpg',
                            'images/venue/theater-rear.jpg',
                            'images/venue/theater-front.jpg'
                        ]"
                        :alts="[
                            'Lecture Building Universitas Udayana - Front View',
                            'Lecture Building Universitas Udayana - Aerial View',
                            'Theater Room - Rear View',
                            'Theater Room - Front View'
                        ]"
                    />
                </div>

                {{-- Google Maps --}}
                <div class="rounded-2xl overflow-hidden shadow-lg border border-gray-200 h-full min-h-[250px] lg:min-h-[300px]">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.867366789986!2d115.1645!3d-8.7902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2408a9b6c4f17%3A0x6c5e6e4e4e4e4e4e!2sLecture%20Building%2C%20Universitas%20Udayana%2C%20Jimbaran!5e0!3m2!1sid!2sid!4v1715980000000!5m2!1sid!2sid"
                        width="100%"
                        height="100%"
                        style="border: 0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        class="w-full h-full min-h-[250px] lg:min-h-[300px]">
                    </iframe>
                </div>
            </div>
            <div class="text-center mt-4">
                <p class="text-sm text-gray-500 mb-2">654C+PJW, Jl. Prabu Udayana, Jimbaran, Kec. Kuta Sel., Kabupaten Badung, Bali 80361</p>
                <a href="https://www.google.com/maps/search/?api=1&query=Universitas+Udayana+Lecture+Building+Jimbaran"
                   target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-2 px-6 py-3 bg-forest text-white font-semibold rounded-lg hover:bg-sage transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span>Open in Google Maps</span>
                </a>
            </div>
        </section>
    </div>

    {{-- Registration Fees --}}
    <div>@include('sections.registration-fees')</div>

    {{-- Explore Links --}}
    <div>@include('sections.explore-links')</div>

    {{-- Global Platform for Collaborative Impact --}}
    {{-- @include('sections.climate-humanity') --}}

    {{-- Call for Abstract --}}
    <div class="py-0">@include('sections.call-for-papers-landing')</div>

    {{-- Conference Schedule --}}
    <div>@include('sections.schedule-preview')</div>

    {{-- Registration Form --}}
    <div class="py-0">@include('sections.registration-cta')</div>
</div>

@endsection
