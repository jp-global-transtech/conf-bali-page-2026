{{--
    SECTION: MEET THE SPEAKERS
    Infinite Photo Marquee
--}}

@php
    $allSpeakers = collect(include resource_path('data/speakers.php'))->where('confirmed', true)->values();
@endphp

<section id="speakers" class="relative">
    <x-speakers.photo-marquee :speakers="$allSpeakers" />

    {{-- CTA --}}
    <div class="text-center pb-12">
        <a href="{{ route('conference.speakers') }}" class="inline-flex items-center gap-2 px-8 py-4 bg-forest text-white font-display font-semibold rounded-xl hover:bg-sage transition-all duration-300 hover:shadow-lg hover:shadow-sage/25">
            View All Speakers
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
        </a>
    </div>
</section>
