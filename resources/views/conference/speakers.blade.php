@extends('layouts.conference')

@section('title', 'Speakers | GETS 2026')

@section('content')
@php
    $allSpeakers = collect(include resource_path('data/speakers.php'))->where('confirmed', true);
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
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Global experts and thought leaders sharing insights on climate resilience, sustainability, and environmental transition.
                </p>
            </div>
        </div>
    </div>

    {{-- All Speakers Grid --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            @foreach ($allSpeakers as $speaker)
                <div class="bg-white border border-gray-200 rounded-2xl p-6 text-center hover:shadow-lg transition-all">
                    {{-- Speaker Photo --}}
                    <div class="mx-auto w-32 h-32 rounded-full bg-gradient-to-br from-green-50 to-green-100 flex items-center justify-center overflow-hidden mb-4">
                        @if ($speaker['photo'] && file_exists(public_path($speaker['photo'])))
                            <img src="{{ asset($speaker['photo']) }}" alt="{{ $speaker['name'] }}" class="w-full h-full object-cover">
                        @else
                            <span class="text-3xl font-bold text-green-600">{{ $speaker['initials'] }}</span>
                        @endif
                    </div>

                    {{-- Name --}}
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ $speaker['name'] }}</h3>

                    {{-- Title --}}
                    <p class="text-gray-600 text-sm mb-1">{{ $speaker['title'] }}</p>

                    {{-- Department (if exists) --}}
                    @if(isset($speaker['department']) && $speaker['department'])
                        <p class="text-gray-500 text-xs mb-2">{{ $speaker['department'] }}</p>
                    @endif

                    {{-- Institution --}}
                    <p class="text-gray-700 text-sm font-medium mb-3">{{ $speaker['institution'] }}</p>

                    {{-- Country --}}
                    <p class="text-gray-400 text-sm mb-4">{{ $speaker['flag'] }} {{ $speaker['country'] }}</p>

                    {{-- Topic --}}
                    <div class="border-t border-gray-100 pt-4">
                        <h4 class="text-xs font-semibold text-gray-700 mb-2">Topic</h4>
                        <p class="text-gray-600 text-xs leading-relaxed">{{ $speaker['topic'] }}</p>
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
