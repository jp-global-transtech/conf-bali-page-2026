@extends('layouts.conference')

@section('title', 'Organizing Committee | GETS 2026')

@section('content')
<div class="min-h-screen bg-white pt-20">

    {{-- Hero Section --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16">
        <div class="text-center">
            <span class="inline-block text-sm font-medium text-earth mb-4">
                Bilateral Leadership
            </span>
            <h1 class="text-2xl md:text-3xl lg:text-4xl font-display font-bold text-forest mb-4">
                Organizing Committee
            </h1>
            <p class="text-lg text-earth max-w-3xl mx-auto leading-relaxed">
                A distinguished bilateral committee ensuring high-level strategic and academic standards across both nations
            </p>
        </div>
    </div>

    {{-- Committee Sections --}}
    @php
        $committee = config('conference.organizing_committee', []);
    @endphp

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

        {{-- Indonesia Committee --}}
        @if(isset($committee['indonesia']))
        <div class="mb-16">
            <h2 class="text-2xl md:text-3xl font-display font-bold text-forest mb-8">{{ $committee['indonesia']['label'] }}</h2>

            <div class="space-y-4">
                @foreach($committee['indonesia']['members'] as $member)
                <div class="border-l-4 border-forest pl-6 py-4 @if($member['role'] === 'Chief Patron') bg-forest/5 @endif">
                    <span class="inline-block text-xs font-semibold text-forest uppercase tracking-wide mb-2">
                        {{ $member['role'] }}
                    </span>
                    <h3 class="text-lg font-display font-semibold text-forest mb-1">{{ $member['name'] }}</h3>
                    <p class="text-sm text-atmosphere font-medium">{{ $member['position'] }}</p>
                    <p class="text-sm text-earth">{{ $member['institution'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
        @endif

        {{-- India Committee --}}
        @if(isset($committee['india']))
        <div class="mb-16">
            <h2 class="text-2xl md:text-3xl font-display font-bold text-forest mb-8">{{ $committee['india']['label'] }}</h2>

            <div class="space-y-4">
                @foreach($committee['india']['members'] as $member)
                <div class="border-l-4 border-atmosphere pl-6 py-4 @if($member['role'] === 'Chief Patron') bg-atmosphere/5 @endif">
                    <span class="inline-block text-xs font-semibold text-atmosphere uppercase tracking-wide mb-2">
                        {{ $member['role'] }}
                    </span>
                    <h3 class="text-lg font-display font-semibold text-forest mb-1">{{ $member['name'] }}</h3>
                    <p class="text-sm text-atmosphere font-medium">{{ $member['position'] }}</p>
                    <p class="text-sm text-earth">{{ $member['institution'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
        @endif

    </div>

    {{-- Governance Statement --}}
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center py-12">
        <h4 class="text-xl font-display font-bold text-forest mb-4">Bilateral Governance Structure</h4>
        <p class="text-earth leading-relaxed mb-4">
            This conference is governed by a distinguished bilateral committee ensuring high-level strategic and academic standards across both nations. The organizing structure reflects equal partnership between Indonesian and Indian institutions.
        </p>
        <p class="text-forest/90 font-medium">
            "Strengthening Indonesia-India Academic Diplomacy for Climate Resilience"
        </p>
    </div>

</div>
@endsection
