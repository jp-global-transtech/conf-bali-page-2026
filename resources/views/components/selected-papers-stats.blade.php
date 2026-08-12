{{-- Selected Papers Statistics Cards --}}
<div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-8">
    <div class="bg-white rounded-2xl shadow-md border border-gray-200 p-6">
        <div class="flex items-center gap-4">
            <div class="w-12 h-12 bg-forest/10 rounded-xl flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
            </div>
            <div>
                <p class="text-3xl font-display font-bold text-gray-900">{{ $stats['total'] }}</p>
                <p class="text-sm text-gray-600">Total Selected Papers</p>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow-md border border-gray-200 p-6">
        <div class="flex items-center gap-4">
            <div class="w-12 h-12 bg-sage/10 rounded-xl flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                </svg>
            </div>
            <div>
                <p class="text-3xl font-display font-bold text-gray-900">{{ $stats['offline'] }}</p>
                <p class="text-sm text-gray-600">Presenter (Offline)</p>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow-md border border-gray-200 p-6">
        <div class="flex items-center gap-4">
            <div class="w-12 h-12 bg-atmosphere/10 rounded-xl flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-atmosphere" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                </svg>
            </div>
            <div>
                <p class="text-3xl font-display font-bold text-gray-900">{{ $stats['online'] }}</p>
                <p class="text-sm text-gray-600">Presenter (Online)</p>
            </div>
        </div>
    </div>
</div>