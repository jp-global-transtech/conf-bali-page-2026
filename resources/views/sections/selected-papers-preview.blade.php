<section id="selected-papers" class="py-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Selected Papers</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Papers selected for presentation at GETS 2026 &middot; 24 August 2026 &middot; Universitas Udayana, Bali &amp; Online
            </p>
        </div>

        @include('components.selected-papers-stats', ['stats' => $stats])

        <div class="bg-white rounded-2xl shadow-lg border border-gray-200 overflow-hidden">
            <div class="bg-gradient-to-r from-forest to-sage px-6 py-4 text-center">
                <h3 class="text-lg font-bold text-white">Selected Papers Overview</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 divide-y divide-gray-100 md:divide-y-0">
                @foreach ($papers as $index => $paper)
                @php
                    $presenter = collect($paper['authors'])->firstWhere('is_presenter', true);
                @endphp
                <div class="flex items-start gap-3 px-6 py-4 {{ $index % 2 === 1 ? 'md:border-l md:border-gray-100' : '' }}">
                    <span class="inline-flex items-center justify-center flex-shrink-0 min-w-8 px-2 py-1 rounded-md bg-forest/10 text-forest text-xs font-bold mt-0.5">{{ $index + 1 }}</span>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-gray-900 leading-snug">{{ $paper['title'] }}</p>
                        @if ($presenter)
                        <p class="text-xs text-gray-500 mt-1">{{ $presenter['name'] }}</p>
                        @endif
                    </div>
                    @if ($paper['mode'] === 'offline')
                    <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full bg-sage/10 text-sage font-semibold text-[10px] flex-shrink-0 mt-0.5">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                        </svg>
                        Offline
                    </span>
                    @else
                    <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full bg-atmosphere/10 text-atmosphere font-semibold text-[10px] flex-shrink-0 mt-0.5">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                        Online
                    </span>
                    @endif
                </div>
                @endforeach
            </div>
        </div>

        <div class="text-center mt-8">
            <a href="{{ route('conference.selected-papers') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-forest text-white font-semibold rounded-lg hover:bg-sage transition-colors">
                <span>View All Selected Papers</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </div>
</section>