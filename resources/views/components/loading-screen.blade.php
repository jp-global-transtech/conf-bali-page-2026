{{-- Loading Screen Component --}}
<div
    x-show="$store.loading && $store.loading.isLoading"
    x-transition:leave="transition-opacity duration-300"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="fixed inset-0 z-[9999] flex flex-col items-center justify-center bg-white"
    role="status"
    aria-label="Loading"
    x-cloak
>
    {{-- Progress Bar --}}
    <div class="absolute top-0 left-0 right-0 h-[3px] bg-forest/10">
        <div
            class="h-full bg-gradient-to-r from-forest to-sage transition-all duration-300"
            :style="{ width: $store.loading.progress + '%' }"
        ></div>
    </div>

    {{-- Logo --}}
    <div>
        <img src="{{ asset('logo-gets-2026.png') }}" alt="Conference Logo" class="h-16 w-auto object-contain animate-pulse">
    </div>
</div>
