@extends('layouts.conference')

@section('title', 'Participant Guide | GETS 2026 Conference')

@section('content')
{{-- Page Header --}}
<div class="relative overflow-hidden bg-gradient-to-br from-forest via-sage to-forest/90 pt-20">
    <div class="absolute inset-0 opacity-20" style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.4\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>

    <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-20">
        <div class="text-center">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 bg-white/20 backdrop-blur-sm rounded-full text-white/90 text-sm font-medium mb-4">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                </svg>
                Participant Guide
            </span>
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-4">
                Your Experience at GETS 2026
            </h1>
            <p class="text-lg text-white/90 max-w-2xl mx-auto leading-relaxed">
                Everything you need to know about the venue, transportation, visa, accommodations, and Bali essentials for a memorable conference experience.
            </p>
        </div>
    </div>
</div>

{{-- Venue Guide --}}
@include('sections.experience.venue-guide', ['venue' => config('conference.venue', [])])

{{-- Transportation --}}
@include('sections.experience.transportation')

{{-- Visa Information --}}
@include('sections.experience.visa-information')

{{-- Accommodations --}}
@include('sections.experience.accommodations')

{{-- Bali Essentials --}}
@include('sections.experience.bali-essentials')

 {{-- CTA --}}
@include('sections.registration-cta')
@endsection
