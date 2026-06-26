@props(['speakers' => []])

@php
    // Duplicate speakers for seamless loop (triplicate for very long seamless scroll)
    $duplicatedSpeakers = array_merge($speakers->toArray(), $speakers->toArray(), $speakers->toArray());
@endphp

<div class="relative w-full overflow-hidden py-12 bg-gradient-to-br from-white via-[#F8FBF9] to-[#F5F9F6]">
    {{-- Section Header --}}
    <div class="text-center mb-8 relative z-10">
        <span class="inline-block text-sm font-medium text-earth mb-4">
            Meet Our Speakers
        </span>
        <h2 class="text-2xl md:text-3xl lg:text-4xl font-display font-bold text-forest mb-4">
            Distinguished Experts
        </h2>
        <p class="text-earth max-w-2xl mx-auto text-sm">
            Leading voices from Indonesia and India shaping climate resilience and sustainability
        </p>
    </div>

    {{-- Marquee Container --}}
    <div class="relative group">

        {{-- Single Row - Scrolls Left --}}
        <div class="flex gap-6 animate-marquee hover:[animation-play-state:paused]"
             style="width: max-content;">
            @foreach($duplicatedSpeakers as $speaker)
                <x-speakers.marquee-card :speaker="$speaker" />
            @endforeach
        </div>

        {{-- Fade Edges for seamless appearance --}}
        <div class="absolute top-0 left-0 w-32 h-full bg-gradient-to-r from-[#F8FBF9] to-transparent z-10 pointer-events-none"></div>
        <div class="absolute top-0 right-0 w-32 h-full bg-gradient-to-l from-[#F5F9F6] to-transparent z-10 pointer-events-none"></div>
    </div>
</div>
