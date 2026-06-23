@extends('layouts.conference')

@section('title', 'Invited Speakers - GETS 2026')

@section('content')
<div class="min-h-screen bg-gray-50 pt-20">

    {{-- Hero Section --}}
    <div class="bg-gradient-to-br from-forest via-forest to-sage relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full -translate-x-1/2 -translate-y-1/2"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-atmosphere rounded-full translate-x-1/2 translate-y-1/2"></div>
        </div>
        <div class="relative max-w-6xl mx-auto px-4 sm:px-6 py-16 text-center">
            <a href="{{ route('conference.landing') }}" class="text-ivory/80 hover:text-ivory mb-4 inline-block">&larr; Back to Conference Home</a>
            <h1 class="text-cinematic text-4xl sm:text-5xl lg:text-6xl text-white mb-4 leading-tight">
                Invited Speakers
            </h1>
            <p class="font-sans text-lg text-ivory/90 max-w-2xl mx-auto editorial-relaxed">
                Distinguished experts and thought leaders sharing their insights on climate resilience and green technology
            </p>
        </div>
    </div>

    {{-- Speakers Grid --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 py-16">
        @if(count($invitedSpeakers) > 0)
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                @foreach($invitedSpeakers as $speaker)
                {{-- Speaker Card --}}
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 group">

                    {{-- Speaker Image --}}
                    <div class="relative h-64 overflow-hidden">
                        <img src="{{ $speaker['image'] }}"
                             alt="{{ $speaker['name'] }}"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-forest/80 via-forest/20 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <span class="inline-block px-3 py-1 bg-white/20 backdrop-blur-sm text-white text-xs font-medium rounded-full">
                                {{ $speaker['country'] }}
                            </span>
                        </div>
                    </div>

                    {{-- Speaker Info --}}
                    <div class="p-6">
                        <h3 class="text-xl font-display font-semibold text-forest mb-1">
                            {{ $speaker['name'] }}
                        </h3>
                        <p class="text-sm text-atmosphere font-medium mb-3">
                            {{ $speaker['title'] }}
                        </p>
                        <p class="text-sm text-earth mb-3">
                            <span class="font-medium">{{ $speaker['institution'] }}</span>
                        </p>

                        {{-- Bio --}}
                        <p class="text-sm text-earth/80 leading-relaxed mb-4">
                            {{ $speaker['bio'] }}
                        </p>

                        {{-- Topics --}}
                        <div class="flex flex-wrap gap-2 mb-4">
                            @foreach($speaker['topics'] as $topic)
                            <span class="inline-block px-2 py-1 bg-sage/10 text-sage text-xs rounded-full">
                                {{ $topic }}
                            </span>
                            @endforeach
                        </div>

                        {{-- Contact --}}
                        <a href="mailto:{{ $speaker['email'] }}" class="inline-flex items-center gap-2 text-sm text-forest hover:text-sage transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            Contact Speaker
                        </a>
                    </div>

                </div>
                @endforeach

            </div>
        @else
            {{-- No Speakers Yet --}}
            <div class="text-center py-20">
                <div class="w-24 h-24 mx-auto mb-6 bg-forest/10 rounded-full flex items-center justify-center">
                    <svg class="w-12 h-12 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-display font-semibold text-forest mb-2">Speakers Coming Soon</h3>
                <p class="font-sans text-earth max-w-md mx-auto">
                    We are currently finalizing our list of distinguished invited speakers. Please check back soon for updates.
                </p>
            </div>
        @endif
    </div>

    {{-- Call to Action --}}
    <div class="bg-gradient-to-r from-atmosphere to-forest py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 text-center">
            <h2 class="text-cinematic text-3xl sm:text-4xl text-white mb-4">
                Interested in Speaking?
            </h2>
            <p class="font-sans text-lg text-ivory/90 mb-8 editorial-relaxed">
                We welcome proposals from qualified experts in climate resilience, green technology, and related fields.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('conference.landing') }}#register" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-white text-forest font-display font-semibold rounded-full hover:bg-ivory transition-all duration-300 hover:shadow-lg">
                    <span>Submit Abstract</span>
                </a>
                <a href="{{ route('conference.contact') }}" class="inline-flex items-center justify-center gap-2 px-8 py-4 border-2 border-white text-white font-display font-semibold rounded-full hover:bg-white hover:text-forest transition-all duration-300">
                    <span>Contact Us</span>
                </a>
            </div>
        </div>
    </div>

</div>
@endsection
