{{--
    resources/views/components/speakers/tbc-card.blade.php
    Slot TBC — pembicara belum dikonfirmasi
--}}

<div class="bg-slate-50 border border-dashed border-slate-300 rounded-2xl p-4
            flex flex-col items-center text-center gap-3 opacity-60">

    {{-- Avatar placeholder --}}
    <div class="w-14 h-14 rounded-full bg-white border-2 border-dashed border-slate-300
                flex items-center justify-center">
        <i class="ti ti-user text-xl text-slate-300" aria-hidden="true"></i>
    </div>

    {{-- Identity --}}
    <div class="w-full">
        <span class="inline-flex text-xs font-medium px-2 py-0.5
                     bg-white border border-dashed border-slate-300 text-slate-400 rounded-full mb-1.5">
            TBC
        </span>
        <div class="h-3 w-3/4 mx-auto bg-slate-200 rounded-full mb-1.5"></div>
        <div class="h-2.5 w-1/2 mx-auto bg-slate-200 rounded-full"></div>
    </div>

    {{-- Topic placeholder --}}
    <div class="w-full bg-white border border-dashed border-slate-200 rounded-xl px-3 py-2.5">
        <p class="text-xs text-slate-400 italic">Akan Diundang</p>
    </div>

    <p class="text-xs text-slate-400">Segera diumumkan</p>
</div>
