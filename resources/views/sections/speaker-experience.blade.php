{{--
    SECTION: MEET THE SPEAKERS
    Premium Conference Style with Carousel
--}}
@props(['speakers' => collect()])

@section('speakers_styles')
<style>
    .speaker-card {
        transition: all 0.3s ease;
    }
    .speaker-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 24px -8px rgba(0, 0, 0, 0.15);
    }
</style>
@endsection

@php
    $allSpeakers = collect(include resource_path('data/speakers.php'))->where('confirmed', true)->values();
@endphp

<section id="speakers" class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Section Header --}}
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Meet the Speakers</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Meet global experts, researchers, and professionals sharing perspectives on climate resilience and sustainable transition.
            </p>
        </div>

        @once
        <script>
            function speakerCarousel() {
                return {
                    currentIndex: 0,
                    totalSpeakers: {{ $allSpeakers->count() }},
                    speakersPerPage: 4,
                    autoplayInterval: null,

                    init() {
                        this.updateSpeakersPerPage();
                        window.addEventListener('resize', () => this.updateSpeakersPerPage());
                        this.startAutoplay();

                        // Pause on hover
                        this.$el.addEventListener('mouseenter', () => this.stopAutoplay());
                        this.$el.addEventListener('mouseleave', () => this.startAutoplay());
                    },

                    updateSpeakersPerPage() {
                        if (window.innerWidth >= 1280) this.speakersPerPage = 4;
                        else if (window.innerWidth >= 768) this.speakersPerPage = 2;
                        else this.speakersPerPage = 1;
                    },

                    get slides() {
                        return Math.ceil(this.totalSpeakers / this.speakersPerPage);
                    },

                    nextSlide() {
                        const maxIndex = this.totalSpeakers - this.speakersPerPage;
                        this.currentIndex = this.currentIndex >= maxIndex ? 0 : this.currentIndex + 1;
                    },

                    prevSlide() {
                        const maxIndex = this.totalSpeakers - this.speakersPerPage;
                        this.currentIndex = this.currentIndex <= 0 ? maxIndex : this.currentIndex - 1;
                    },

                    goToSlide(index) {
                        this.currentIndex = index * this.speakersPerPage;
                    },

                    startAutoplay() {
                        this.autoplayInterval = setInterval(() => this.nextSlide(), 5000);
                    },

                    stopAutoplay() {
                        clearInterval(this.autoplayInterval);
                    }
                };
            }
        </script>
        @endonce

        {{-- Speaker Carousel --}}
        <div x-data="speakerCarousel()" class="relative">

            {{-- Carousel Container --}}
            <div class="overflow-hidden rounded-3xl bg-white shadow-sm border border-gray-100">
                <div class="flex transition-transform duration-500 ease-in-out py-8"
                     :style="'transform: translateX(' + (-currentIndex * (100 / speakersPerPage)) + '%)'">

                    @foreach ($allSpeakers as $speaker)
                        <div class="flex-shrink-0 px-4" :style="'width: ' + (100 / speakersPerPage) + '%'">
                            {{-- Speaker Card --}}
                            <div class="speaker-card bg-white rounded-2xl p-6 text-center">
                                {{-- Photo --}}
                                <div class="mx-auto w-32 h-32 rounded-full bg-gradient-to-br from-green-50 to-green-100 flex items-center justify-center overflow-hidden mb-4">
                                    @if ($speaker['photo'] && file_exists(public_path($speaker['photo'])))
                                        <img src="{{ asset($speaker['photo']) }}" alt="{{ $speaker['name'] }}" class="w-full h-full object-cover">
                                    @else
                                        <span class="text-3xl font-bold text-green-600">{{ $speaker['initials'] }}</span>
                                    @endif
                                </div>

                                {{-- Name --}}
                                <h4 class="text-lg font-semibold text-gray-900 mb-1">{{ $speaker['name'] }}</h4>

                                {{-- Institution --}}
                                <p class="text-sm text-gray-600 font-medium mb-2">{{ $speaker['institution'] }}</p>

                                {{-- Country --}}
                                <p class="text-sm text-gray-400">{{ $speaker['flag'] }} {{ $speaker['country'] }}</p>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

            {{-- Navigation Arrows --}}
            <button @click="prevSlide" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 w-12 h-12 bg-white/90 backdrop-blur rounded-full shadow-lg flex items-center justify-center text-gray-700 hover:text-green-700 hover:bg-white transition-all z-10">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
            </button>
            <button @click="nextSlide" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 w-12 h-12 bg-white/90 backdrop-blur rounded-full shadow-lg flex items-center justify-center text-gray-700 hover:text-green-700 hover:bg-white transition-all z-10">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </button>

            {{-- Dot Indicators --}}
            <div class="flex justify-center gap-2 mt-6">
                <template x-for="(slide, index) in slides" :key="index">
                    <button @click="goToSlide(index)"
                            :class="index === Math.floor(currentIndex / speakersPerPage) ? 'bg-green-700' : 'bg-gray-300'"
                            class="w-3 h-3 rounded-full transition-colors">
                    </button>
                </template>
            </div>

        </div>

        {{-- CTA --}}
        <div class="text-center mt-12">
            <a href="{{ route('conference.speakers') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-green-800 text-white font-medium rounded-full hover:bg-green-900 transition-colors">
                View Speaker Details
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>

    </div>
</section>
