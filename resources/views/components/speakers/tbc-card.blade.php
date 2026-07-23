@props(['speaker'])

<div class="bg-slate-50 border border-dashed border-slate-300 rounded-2xl p-4
            flex flex-col items-center text-center gap-3 opacity-70">

    {{-- Pending Badge --}}
    <div class="w-full flex justify-end -mb-2">
        <x-speakers.status-badge status="pending" />
    </div>

    {{-- Avatar / Initials --}}
    @if ($speaker['photo'])
        <img
            src="{{ asset($speaker['photo']) }}"
            alt="{{ $speaker['name'] }}"
            class="w-14 h-14 rounded-full object-cover ring-2 ring-slate-200 opacity-60"
        />
    @else
        <div class="w-14 h-14 rounded-full bg-white border-2 border-dashed border-slate-300
                    flex items-center justify-center">
            <span class="text-base font-medium text-slate-400">{{ $speaker['initials'] }}</span>
        </div>
    @endif

    {{-- Identity --}}
    <div class="w-full">
        <span class="inline-flex text-xs font-medium px-2 py-0.5
                     bg-white border border-dashed border-slate-300 text-slate-400 rounded-full mb-1.5">
            TBC
        </span>
        <p class="text-sm font-medium text-slate-500 leading-tight">
            {{ $speaker['name'] }}
        </p>
        <p class="text-xs text-slate-400 mt-0.5 truncate">
            {{ $speaker['institution'] }}
        </p>
    </div>

    {{-- Topic / Status --}}
    <div class="w-full bg-white border border-dashed border-slate-200 rounded-xl px-3 py-2.5">
        <p class="text-xs text-slate-400 italic">Akan Diundang</p>
    </div>

    <p class="text-xs text-slate-400">Konfirmasi sedang diproses</p>
</div>
