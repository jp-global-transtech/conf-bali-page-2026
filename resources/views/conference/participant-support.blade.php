@extends('layouts.conference')

@section('title', 'Participant Support | Bali 2026 Conference')

@section('content')
{{-- Hero Section for Participant Support --}}
<section class="section-cinematic atmosphere-gradient relative">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center py-20">
        <span class="inline-block px-4 py-1.5 bg-white/10 text-ivory-200 font-medium text-sm rounded-full mb-6 font-sans">Before You Travel</span>

        <h1 class="text-cinematic text-4xl sm:text-5xl lg:text-6xl text-white mb-8 leading-tight">
            International Participant Support
        </h1>

        <p class="font-sans text-xl text-ivory-200 max-w-2xl mx-auto editorial-relaxed leading-relaxed">
            Everything you need to prepare for your journey to Bali and ensure a smooth conference experience
        </p>
    </div>
</section>

{{-- Quick Links - Registration & Contact --}}
<section class="bg-white py-8 border-b border-forest/10">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid sm:grid-cols-2 gap-4">
            <a href="{{ route('conference.landing') }}#register" class="flex items-center gap-4 p-4 bg-gradient-to-br from-forest/5 to-sage/5 rounded-xl border border-forest/10 hover:border-forest/30 hover:shadow-md transition-all">
                <div class="w-12 h-12 bg-forest/10 rounded-xl flex items-center justify-center flex-shrink-0">
                    <svg class="w-6 h-6 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <div>
                    <h3 class="font-display font-semibold text-forest">Register Now</h3>
                    <p class="text-sm text-earth/70">Secure your spot at the conference</p>
                </div>
            </a>
            <a href="{{ route('conference.contact') }}" class="flex items-center gap-4 p-4 bg-gradient-to-br from-atmosphere/5 to-sage/5 rounded-xl border border-atmosphere/10 hover:border-atmosphere/30 hover:shadow-md transition-all">
                <div class="w-12 h-12 bg-atmosphere/10 rounded-xl flex items-center justify-center flex-shrink-0">
                    <svg class="w-6 h-6 text-atmosphere" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <div>
                    <h3 class="font-display font-semibold text-atmosphere">Contact Us</h3>
                    <p class="text-sm text-earth/70">Get help with your questions</p>
                </div>
            </a>
        </div>
    </div>
</section>

{{-- Visa Information --}}
@include('sections.support.visa-information')

{{-- Airport & Arrival Guide --}}
@include('sections.support.airport-guide')

{{-- Invitation Letter --}}
@include('sections.support.invitation-letter')

{{-- Pre-Departure Checklist --}}
@include('sections.support.checklist')

 {{-- CTA --}}
@include('sections.registration-cta')
@endsection
