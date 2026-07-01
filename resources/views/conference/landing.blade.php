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
    <div class="@sm:py-20 py-12">@include('sections.logo-cloud')</div>

    {{-- Why This Conference Matters --}}
    <div class="@sm:py-20 py-12 bg-white">@include('sections.conference-philosophy')</div>

    {{-- Distinguished Speakers --}}
    <div class="@sm:py-20 py-12">@include('sections.speaker-experience')</div>

    {{-- Who Should Attend --}}
    <div class="@sm:py-20 py-12 bg-white">@include('sections.who-should-attend')</div>

    {{-- Conference Updates --}}
    <div class="@sm:py-20 py-12">@include('sections.conference-updates', ['importantDates' => $importantDates])</div>

    {{-- Explore Links --}}
    <div class="@sm:py-20 py-12 bg-gradient-to-br from-white via-[#F8FBF9] to-[#F5F9F6]">@include('sections.explore-links')</div>

    {{-- Global Platform for Collaborative Impact --}}
    {{-- @include('sections.climate-humanity') --}}

    {{-- Connecting India and Indonesia --}}
    <div class="@sm:py-20 py-12 bg-white">@include('sections.global-collaboration')</div>

    {{-- Call for Abstract --}}
    <div class="@sm:py-20 py-12">@include('sections.call-for-papers-landing')</div>

    {{-- Conference Schedule --}}
    <div class="@sm:py-20 py-12 bg-white">@include('sections.schedule-preview')</div>

    {{-- Registration Form --}}
    <div class="py-0">@include('sections.registration-cta')</div>
</div>

@endsection
