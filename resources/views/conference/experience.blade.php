@extends('layouts.conference')

@section('title', 'Participant Guide | GETS 2026 Conference')

@section('content')
{{-- Hero Teaser for Experience --}}
@include('sections.hero-immersive')

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
