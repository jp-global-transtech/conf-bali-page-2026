@extends('layouts.conference')

@section('title', 'Important Dates | GETS 2026')

@section('content')
<div class="min-h-screen bg-white pt-20">

    {{-- Hero Section --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16">
        <div class="text-center">
            <span class="inline-block text-sm font-medium text-earth mb-4">
                Key Dates
            </span>
            <h1 class="text-2xl md:text-3xl lg:text-4xl font-display font-bold text-forest mb-4">
                Important Dates
            </h1>
            <p class="text-lg text-earth max-w-3xl mx-auto leading-relaxed">
                Key dates you shouldn't miss for GETS 2026.
            </p>
        </div>
    </div>

    {{-- Timeline --}}
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
        <div class="relative">
            {{-- Timeline Line --}}
            <div class="absolute left-8 top-0 bottom-0 w-0.5 bg-gray-200"></div>

            @foreach($importantDates ?? [] as $index => $dateItem)
                <div class="relative flex items-start gap-6 mb-12 last:mb-0">

                    {{-- Icon Marker --}}
                    <div class="relative z-10 flex-shrink-0">
                        <div class="w-12 h-12 rounded-full bg-forest text-white flex items-center justify-center">
                            @if($dateItem['icon'] === 'calendar')
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            @elseif($dateItem['icon'] === 'bell')
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                </svg>
                            @endif
                        </div>
                    </div>

                    {{-- Content --}}
                    <div class="flex-1 pt-2 pb-8">
                        <span class="inline-block px-3 py-1 text-xs font-semibold rounded-full mb-2 bg-forest/10 text-forest">
                            {{ $dateItem['date'] }}
                        </span>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">
                            {{ $dateItem['title'] }}
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            {{ $dateItem['description'] }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- Info Section --}}
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center py-12 border-t border-earth/10">
        <h4 class="text-lg font-display font-bold text-forest mb-3">Stay Updated</h4>
        <p class="text-earth leading-relaxed">
            For the latest updates on conference milestones and important dates, check this page regularly or contact us at {{ config('conference.support_email') }}
        </p>
    </div>

</div>
@endsection
