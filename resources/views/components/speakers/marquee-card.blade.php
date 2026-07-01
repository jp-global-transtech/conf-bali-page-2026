@props(['speaker' => []])

<div class="flex-shrink-0 w-48 h-64 relative group overflow-hidden rounded-2xl bg-white border border-gray-200 hover:shadow-lg transition-all cursor-pointer">
    {{-- TBA Badge (for placeholder speakers) --}}
    @if(!$speaker['photo'] || !file_exists(public_path($speaker['photo'])))
    <div class="absolute top-3 left-3 z-20">
        <span class="inline-flex items-center gap-1 px-2 py-1 bg-amber-100 text-amber-700 text-xs font-semibold rounded-full">
            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
            </svg>
            To Be Announced
        </span>
    </div>
    @endif

    {{-- Photo --}}
    <div class="w-full h-40 overflow-hidden">
        @if($speaker['photo'] && file_exists(public_path($speaker['photo'])))
            <img src="{{ asset($speaker['photo']) }}"
                 alt="{{ $speaker['name'] }}"
                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
        @else
            <div class="w-full h-full bg-gradient-to-br from-amber-50 to-amber-100 flex items-center justify-center">
                <span class="text-3xl font-bold text-amber-600">{{ $speaker['initials'] }}</span>
            </div>
        @endif
    </div>

    {{-- Info --}}
    <div class="absolute bottom-0 left-0 right-0 bg-white/95 backdrop-blur-sm p-3 border-t border-gray-100">
        <h4 class="text-sm font-semibold text-gray-900 truncate">{{ $speaker['name'] }}</h4>
        <p class="text-xs text-gray-600 truncate">{{ $speaker['institution'] }}</p>
        <span class="text-xs text-gray-400">{{ $speaker['country'] }}</span>
    </div>
</div>
