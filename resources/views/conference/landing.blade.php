@extends('layouts.conference')

{{-- SEO Meta Tags --}}
@section('title', 'Global Environment & Transition Summit 2026 (GETS 2026)')

@section('content')
@php
    $importantDates = config('conference-milestones.importantDates', []);
@endphp

{{-- Hero Section --}}
@include('sections.hero-immersive')

{{-- Logo Cloud Section --}}
@include('sections.logo-cloud')

{{-- Why This Conference Matters --}}
@include('sections.conference-philosophy')

{{-- Distinguished Speakers --}}
@include('sections.speaker-experience')

{{-- Who Should Attend --}}
@include('sections.who-should-attend')

{{-- Conference Updates --}}
@include('sections.conference-updates', ['importantDates' => $importantDates])

{{-- Global Platform for Collaborative Impact --}}
{{-- @include('sections.climate-humanity') --}}

{{-- Connecting India and Indonesia --}}
@include('sections.global-collaboration')

{{-- Call for Abstract --}}
@include('sections.call-for-papers-landing')

{{-- Conference Schedule --}}
@include('sections.schedule-preview')

{{-- Registration Form --}}
@include('sections.registration-cta')

@endsection
