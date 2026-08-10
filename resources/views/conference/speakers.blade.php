@extends('layouts.conference')

@section('title', 'Speakers | GETS 2026')

@section('content')
@php
    $allSpeakers = collect(include resource_path('data/speakers.php'))->values();
@endphp

<div class="min-h-screen bg-white pt-20">

    {{-- Hero Header --}}
    <div class="relative overflow-hidden py-16 md:py-24">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-br from-white via-[#F8FBF9] to-[#F5F9F6]"></div>
            <div class="absolute inset-0 opacity-[0.015]" style="background-image: radial-gradient(circle at 1px 1px, #166534 1px, transparent 0); background-size: 60px 60px;"></div>
            <div class="absolute top-[-5%] right-[-5%] w-[500px] h-[500px] bg-emerald-500/5 rounded-full blur-3xl"></div>
            <div class="absolute bottom-[-5%] left-[-5%] w-[400px] h-[400px] bg-teal-500/3 rounded-full blur-3xl"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                    Speakers
                </h1>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Distinguished experts and thought leaders from Indonesia, India, and around the world sharing insights on climate resilience, sustainability, and environmental transition.
                </p>
            </div>
        </div>
    </div>

    {{-- All Speakers List --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 mt-8">
        <div class="space-y-8">
            @foreach ($allSpeakers as $speaker)
                <div class="bg-white border border-gray-200 rounded-2xl p-6 hover:shadow-lg transition-all relative flex flex-col sm:flex-row gap-6 sm:gap-8
                    {{ !$speaker['confirmed'] ? 'opacity-75 grayscale' : '' }}">
                    {{-- Status Badge --}}
                    @if(!empty($speaker['confirming']))
                        {{-- In confirmation --}}
                        <div class="absolute top-3 right-3 z-20">
                            <span class="inline-flex items-center gap-1 px-2 py-1 bg-sky-50 text-sky-700 border border-sky-200 text-xs font-medium rounded-full">
                                <span class="w-2 h-2 bg-sky-400 rounded-full animate-pulse"></span>
                                In Confirmation
                            </span>
                        </div>
                    @elseif(!$speaker['confirmed'])
                        {{-- Unconfirmed speaker - show Invitation in Progress --}}
                        <div class="absolute top-3 right-3 z-20">
                            <span class="inline-flex items-center gap-1 px-2 py-1 bg-amber-50 text-amber-700 border border-amber-200 text-xs font-medium rounded-full">
                                <span class="w-2 h-2 bg-amber-400 rounded-full"></span>
                                Invitation in Progress
                            </span>
                        </div>
                    @elseif(!$speaker['photo'] || !file_exists(public_path($speaker['photo'])))
                        {{-- Confirmed but no photo - show To Be Announced --}}
                        <div class="absolute top-3 right-3">
                            <span class="inline-flex items-center gap-1 px-2 py-1 bg-amber-100 text-amber-700 text-xs font-semibold rounded-full">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                                </svg>
                                To Be Announced
                            </span>
                        </div>
                    @endif

                    {{-- Speaker Photo (left) --}}
                    <div class="shrink-0 w-full sm:w-64 lg:w-72 aspect-[4/3] rounded-xl @if($speaker['confirmed'] && $speaker['photo'] && file_exists(public_path($speaker['photo']))) bg-gradient-to-br from-green-50 to-green-100 @else bg-gradient-to-br from-amber-50 to-amber-100 @endif flex items-center justify-center overflow-hidden">
                        @if ($speaker['confirmed'] && $speaker['photo'] && file_exists(public_path($speaker['photo'])))
                            <img src="{{ asset($speaker['photo']) }}" alt="{{ $speaker['name'] }}" class="w-full h-full object-contain">
                        @else
                            <span class="text-3xl font-bold @if($speaker['confirmed'] && $speaker['photo'] && file_exists(public_path($speaker['photo']))) text-green-600 @else text-amber-600 @endif">{{ $speaker['initials'] }}</span>
                        @endif
                    </div>

                    {{-- Speaker Details (right) --}}
                    <div class="flex-1 min-w-0">
                        {{-- Name & Country --}}
                        <div class="flex flex-wrap items-center gap-2 mb-2">
                            <h4 class="text-xl font-semibold text-gray-900">{{ $speaker['name'] }}</h4>
                            @if(isset($speaker['country']) && $speaker['country'])
                                <span class="inline-flex items-center px-2.5 py-0.5 bg-gray-100 text-gray-600 text-xs font-medium rounded-full">{{ $speaker['country'] }}</span>
                            @endif
                        </div>

                        {{-- Title --}}
                        @if(isset($speaker['title']) && $speaker['title'])
                            <p class="text-gray-600 text-sm mb-1">{{ $speaker['title'] }}</p>
                        @endif

                        {{-- Department (if exists) --}}
                        @if(isset($speaker['department']) && $speaker['department'])
                            <p class="text-gray-500 text-xs mb-2">{{ $speaker['department'] }}</p>
                        @endif

                        {{-- Affiliation --}}
                        @if(isset($speaker['institution']) && $speaker['institution'])
                            <p class="text-gray-700 text-sm font-medium mb-3">{{ $speaker['institution'] }}</p>
                        @endif

                        {{-- Topic --}}
                        @if(isset($speaker['topic']) && $speaker['topic'])
                            <div class="mb-3">
                                <p class="text-xs font-semibold uppercase tracking-wider text-gray-400 mb-1">Topic</p>
                                <p class="text-gray-600 text-sm leading-relaxed">{{ $speaker['topic'] }}</p>
                            </div>
                        @endif

                        {{-- Bio --}}
                        @if(!empty($speaker['bio']))
                            <div class="border-t border-gray-100 pt-3">
                                <p class="text-xs font-semibold uppercase tracking-wider text-gray-400 mb-1">About</p>
                                <p class="text-gray-600 text-sm leading-relaxed">{{ $speaker['bio'] }}</p>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- Info Section --}}
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center py-12 border-t border-gray-200">
        <h4 class="text-lg font-semibold text-gray-900 mb-3">Stay Updated</h4>
        <p class="text-gray-600 leading-relaxed">
            For the latest updates on speakers and session schedules, check this page regularly.
        </p>
    </div>

</div>
@endsection
