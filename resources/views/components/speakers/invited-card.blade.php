{{--
    resources/views/components/speakers/invited-card.blade.php
    Props: $speaker (array) – confirmed speaker only
--}}

@props(['speaker'])

<div
    {{ $attributes }}
    class="bg-white border border-slate-200 rounded-2xl p-4 pt-8
           flex flex-col items-center text-center gap-3
           cursor-pointer hover:border-orange-200 hover:bg-orange-50/30
           transition-all duration-200 group relative"
>
    {{-- Status Badge (top-right) --}}
    @if(!$speaker['confirmed'])
        <div class="absolute top-3 right-3 z-10">
            <x-speakers.status-badge status="pending" />
        </div>
    @endif

    {{-- Photo --}}
    @if ($speaker['photo'])
        <img
            src="{{ asset($speaker['photo']) }}"
            alt="Photo of {{ $speaker['name'] }}"
            class="w-14 h-14 rounded-full object-cover ring-2 ring-orange-100"
        />
    @else
        <div class="w-14 h-14 rounded-full bg-orange-50 border border-orange-200
                    flex items-center justify-center flex-shrink-0">
            <span class="text-base font-medium text-orange-600">{{ $speaker['initials'] }}</span>
        </div>
    @endif

    {{-- Identity --}}
    <div class="w-full">
        <span class="inline-flex text-xs font-medium px-2 py-0.5
                     bg-orange-50 text-orange-700 rounded-full mb-1.5">
            Invited
        </span>
        <p class="text-sm font-medium text-slate-800 leading-tight group-hover:text-orange-800 transition-colors">
            {{ $speaker['name'] }}
        </p>
        <p class="text-xs text-slate-400 mt-0.5 truncate">
            {{ $speaker['institution'] }}
        </p>
    </div>

    {{-- Topic --}}
    <div class="w-full bg-orange-50/70 rounded-xl px-3 py-2.5 text-left">
        <p class="text-xs font-medium text-orange-700 uppercase tracking-wide mb-1">Topic</p>
        <p class="text-xs text-slate-600 line-clamp-2">{{ $speaker['topic'] }}</p>
    </div>

    {{-- Time --}}
    @if ($speaker['session_time'])
        <p class="text-xs text-slate-400 flex items-center gap-1">
            <i class="ti ti-clock text-xs" aria-hidden="true"></i>
            {{ $speaker['session_time'] }}
        </p>
    @endif
</div>
