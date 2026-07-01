{{--
    Image Carousel Component
    Props: $images (array), $alts (array)
    Features: Auto-play, manual navigation, smooth transitions
--}}
@props([
    'images' => [],
    'alts' => [],
    'autoplay' => true,
    'interval' => 5000
])

<div x-data="{
    currentIndex: 0,
    images: {{ json_encode($images) }},
    alts: {{ json_encode($alts) }},
    autoplay: {{ $autoplay ? 'true' : 'false' }},
    interval: {{ $interval }},
    timer: null,

    next() {
        this.currentIndex = (this.currentIndex + 1) % this.images.length;
    },
    prev() {
        this.currentIndex = (this.currentIndex - 1 + this.images.length) % this.images.length;
    },
    goTo(index) {
        this.currentIndex = index;
    },
    startAutoplay() {
        if (!this.autoplay) return;
        this.stopAutoplay();
        this.timer = setInterval(() => this.next(), this.interval);
    },
    stopAutoplay() {
        if (this.timer) {
            clearInterval(this.timer);
            this.timer = null;
        }
    }
}" x-init="startAutoplay()" @mouseenter="stopAutoplay()" @mouseleave="startAutoplay()"
    class="relative aspect-[4/3] rounded-3xl overflow-hidden shadow-2xl bg-gray-100">

    {{-- Slides Container --}}
    <div class="relative w-full h-full">
        @foreach($images as $index => $image)
            <div x-show="currentIndex === {{ $index }}"
                 x-transition:enter="transition ease-out duration-500"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition ease-in duration-300"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 class="absolute inset-0">
                <img src="{{ asset($image) }}"
                     alt="{{ $alts[$index] ?? 'Venue image' }}"
                     class="w-full h-full object-cover">
            </div>
        @endforeach
    </div>

    {{-- Gradient Overlay (for text readability if needed) --}}
    <div class="absolute inset-0 bg-gradient-to-t from-forest/30 via-transparent to-transparent pointer-events-none"></div>

    {{-- Navigation Arrows --}}
    @if(count($images) > 1)
        {{-- Previous Button --}}
        <button @click="prev()"
                class="absolute left-4 top-1/2 -translate-y-1/2 w-10 h-10 flex items-center justify-center bg-white/90 hover:bg-white text-gray-800 rounded-full shadow-lg opacity-0 hover:opacity-100 transition-all duration-200 group-hover:opacity-100"
                aria-label="Previous image">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>

        {{-- Next Button --}}
        <button @click="next()"
                class="absolute right-4 top-1/2 -translate-y-1/2 w-10 h-10 flex items-center justify-center bg-white/90 hover:bg-white text-gray-800 rounded-full shadow-lg opacity-0 hover:opacity-100 transition-all duration-200 group-hover:opacity-100"
                aria-label="Next image">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>
    @endif

    {{-- Dots Indicator --}}
    @if(count($images) > 1)
        <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex items-center gap-2">
            @foreach($images as $index => $image)
                <button @click="goTo({{ $index }})"
                        class="w-2.5 h-2.5 rounded-full transition-all duration-200"
                        :class="currentIndex === {{ $index }} ? 'bg-white w-8' : 'bg-white/50 hover:bg-white/70'"
                        :aria-label="'Go to slide {{ $index + 1 }}'"
                        :aria-current="currentIndex === {{ $index }} ? 'slide' : null">
                </button>
            @endforeach
        </div>
    @endif

    {{-- Slide Counter (optional) --}}
    @if(count($images) > 1)
        <div class="absolute top-4 right-4 px-3 py-1 bg-black/50 backdrop-blur-sm text-white text-xs font-medium rounded-full">
            <span x-text="currentIndex + 1"></span> / {{ count($images) }}
        </div>
    @endif

</div>
