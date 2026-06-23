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
    {{-- Logo --}}
    <div>
        <img src="{{ asset('logo-gets-2026.png') }}" alt="Conference Logo" class="h-16 w-auto object-contain animate-pulse">
    </div>
</div>
