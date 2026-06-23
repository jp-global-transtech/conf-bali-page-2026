@extends('layouts.conference')

@section('title', 'Experience Bali | Bali 2026 Conference')

@section('content')
{{-- Hero Teaser for Experience --}}
@include('sections.hero-immersive')

 {{-- Venue Guide --}}
@include('sections.experience.venue-guide', ['venue' => config('conference.venue', [])])

{{-- Transportation --}}
@include('sections.experience.transportation')

{{-- Accommodations --}}
@include('sections.experience.accommodations')

{{-- Bali Essentials --}}
@include('sections.experience.bali-essentials')

 {{-- CTA --}}
@include('sections.registration-cta')
@endsection
