{{--
    Status Badge for Speakers
    Props: $status (string: 'pending'|'confirmed'|'tba')
--}}
@props(['status' => 'pending'])

@switch($status)
    @case('pending')
        <span class="inline-flex items-center gap-1 px-2 py-1 bg-amber-50 text-amber-700 border border-amber-200 text-xs font-medium rounded-full">
            <span class="w-2 h-2 bg-amber-400 rounded-full"></span>
            Invitation in Progress
        </span>
        @break

    @case('confirmed')
        {{-- Optional: for future use --}}
        <span class="inline-flex items-center gap-1 px-2 py-1 bg-emerald-50 text-emerald-700 border border-emerald-200 text-xs font-medium rounded-full">
            <span class="w-2 h-2 bg-emerald-400 rounded-full"></span>
            Confirmed
        </span>
        @break

    @case('tba')
        <span class="inline-flex items-center gap-1 px-2 py-1 bg-amber-100 text-amber-700 text-xs font-semibold rounded-full">
            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
            </svg>
            To Be Announced
        </span>
        @break
@endswitch
