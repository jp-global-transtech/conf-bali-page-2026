{{--
    resources/views/components/speakers/keynote-card.blade.php
    Props: $speaker (array)
--}}

@props(['speaker'])

<div
    {{ $attributes }}
    class="bg-white border border-slate-200 border-l-4 border-l-amber-400 rounded-2xl
           overflow-hidden cursor-pointer hover:shadow-sm hover:border-amber-300
           transition-all duration-200 group"
>
    {{-- Card head --}}
    <div class="flex items-start gap-4 p-5 pt-7 border-b border-slate-100 relative">

        {{-- Status Badge (top-right) --}}
        @if(!$speaker['confirmed'])
            <div class="absolute top-3 right-3 z-10">
                <x-speakers.status-badge status="pending" />
            </div>
        @endif

        {{-- Photo --}}
        @if ($speaker['photo'] && $speaker['confirmed'])
            <div class="w-14 h-14 rounded-xl bg-amber-50 ring-2 ring-amber-100 overflow-hidden flex-shrink-0">
                <img
                    src="{{ asset($speaker['photo']) }}"
                    alt="Photo of {{ $speaker['name'] }}"
                    class="w-full h-full object-cover"
                />
            </div>
        @else
            <div class="w-14 h-14 rounded-xl bg-amber-50 border border-amber-200
                        flex items-center justify-center flex-shrink-0">
                <span class="text-base font-medium text-amber-600">{{ $speaker['initials'] }}</span>
            </div>
        @endif

        {{-- Meta --}}
        <div class="flex-1 min-w-0">
            <span class="inline-flex items-center text-xs font-medium px-2.5 py-0.5
                         bg-amber-50 text-amber-700 rounded-full mb-2">
                Keynote
            </span>
            <h3 class="text-base font-medium text-slate-800 truncate group-hover:text-amber-800 transition-colors">
                {{ $speaker['name'] }}
            </h3>
            <p class="text-xs text-slate-500 mt-0.5 truncate">
                {{ $speaker['title'] }} · {{ $speaker['institution'] }}
            </p>
        </div>
    </div>

    {{-- Card body --}}
    <div class="p-5 flex flex-col gap-3">
        {{-- Topic --}}
        <div class="bg-amber-50/60 rounded-xl px-4 py-3">
            <p class="text-xs font-medium text-amber-700 uppercase tracking-wider mb-1">Topic</p>
            <p class="text-sm text-slate-700 line-clamp-2">"{{ $speaker['topic'] }}"</p>
        </div>

        {{-- Footer chips --}}
        <div class="flex flex-wrap items-center gap-2">
            @if ($speaker['session_time'])
                <span class="text-xs text-slate-400 bg-slate-50 border border-slate-100 px-2.5 py-1 rounded-full flex items-center gap-1">
                    <i class="ti ti-clock text-xs" aria-hidden="true"></i>
                    {{ $speaker['session_time'] }}
                </span>
            @endif
            <span class="text-xs text-slate-400 bg-slate-50 border border-slate-100 px-2.5 py-1 rounded-full">
                {{ $speaker['country'] }}
            </span>
            <span class="text-xs text-amber-600 ml-auto opacity-0 group-hover:opacity-100 transition-opacity">
                Detail →
            </span>
        </div>
    </div>
</div>
