{{--
    resources/views/components/speakers/plenary-card.blade.php
    Props: $speaker (array)
--}}

@props(['speaker'])

<div
    wire:click="openModal({{ $speaker['id'] }})"
    class="flex flex-col md:flex-row gap-6 bg-slate-50 border border-slate-200
           border-l-4 border-l-emerald-500 rounded-2xl p-6 md:p-8
           cursor-pointer hover:bg-emerald-50/40 transition-colors duration-200 group"
>
    {{-- Photo --}}
    <div class="flex-shrink-0">
        @if ($speaker['photo'])
            <img
                src="{{ asset($speaker['photo']) }}"
                alt="Photo of {{ $speaker['name'] }}"
                class="w-40 h-40 md:w-48 md:h-48 object-cover rounded-2xl bg-slate-100"
            />
        @else
            <div class="w-40 h-40 md:w-48 md:h-48 rounded-2xl bg-slate-200 flex items-center justify-center">
                <span class="text-3xl font-medium text-slate-400">{{ $speaker['initials'] }}</span>
            </div>
        @endif
    </div>

    {{-- Content --}}
    <div class="flex flex-col gap-4 justify-center flex-1">

        {{-- Badge --}}
        <span class="inline-flex items-center gap-1.5 text-xs font-medium px-3 py-1
                     bg-emerald-100 text-emerald-800 rounded-full w-fit">
            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 inline-block"></span>
            Chief Patron · Keynote
        </span>

        {{-- Name & role --}}
        <div>
            <h3 class="text-2xl font-medium text-slate-900 group-hover:text-emerald-800 transition-colors">
                {{ $speaker['name'] }}
            </h3>
            <p class="text-sm text-slate-500 mt-0.5">
                {{ $speaker['title'] }} · {{ $speaker['institution'] }}
            </p>
        </div>

        {{-- Topic --}}
        <div class="bg-white border border-slate-200 rounded-xl px-4 py-3">
            <p class="text-xs font-medium text-slate-400 uppercase tracking-wider mb-1">Keynote Address</p>
            <p class="text-sm font-medium text-slate-700">"{{ $speaker['topic'] }}"</p>
        </div>

        {{-- Bio snippet --}}
        <p class="text-sm text-slate-500 leading-relaxed line-clamp-3">
            {{ $speaker['bio'] }}
        </p>

        {{-- Meta row --}}
        <div class="flex flex-wrap items-center gap-3">
            @if ($speaker['session_time'])
                <span class="flex items-center gap-1.5 text-xs text-slate-400 bg-white border border-slate-200 px-3 py-1.5 rounded-full">
                    <i class="ti ti-clock text-sm" aria-hidden="true"></i>
                    {{ $speaker['session_time'] }}
                </span>
            @endif
            <span class="text-xs text-slate-400 bg-white border border-slate-200 px-3 py-1.5 rounded-full">
                {{ $speaker['country'] }}
            </span>
            <span class="text-xs text-emerald-600 font-medium ml-auto group-hover:underline">
                Lihat profil lengkap →
            </span>
        </div>

    </div>
</div>
