{{--
    resources/views/components/speakers/modal.blade.php
    Props: $speaker (array)

    Rendered via Livewire conditional ($modalSpeaker).
    Backdrop klik → wire:click.self="closeModal" (diset di parent).
    Escape key → Alpine.js @keydown.window.escape.
--}}

@props(['speaker'])

@php
    $accentClass = match($speaker['role']) {
        'chief_patron' => 'border-l-emerald-500 bg-emerald-50/30',
        'keynote'      => 'border-l-amber-400 bg-amber-50/20',
        default        => 'border-l-orange-400 bg-orange-50/20',
    };
    $badgeClass = match($speaker['role']) {
        'chief_patron' => 'bg-emerald-100 text-emerald-800',
        'keynote'      => 'bg-amber-100 text-amber-800',
        default        => 'bg-orange-100 text-orange-800',
    };
    $badgeLabel = match($speaker['role']) {
        'chief_patron' => 'Chief Patron · Keynote',
        'keynote'      => 'Keynote Speaker',
        default        => 'Invited Speaker',
    };
@endphp

{{-- Backdrop --}}
<div
    {{ $attributes }}
    x-data
    @keydown.window.escape="$wire.closeModal()"
    class="fixed inset-0 z-50 flex items-center justify-center
           bg-slate-900/50 backdrop-blur-sm px-4"
    style="min-height: 100vh;"
    aria-modal="true"
    role="dialog"
    aria-label="Detail speaker {{ $speaker['name'] }}"
>
    {{-- Modal panel --}}
    <div
        @click.stop
        class="relative w-full max-w-xl bg-white rounded-2xl shadow-xl
               border-l-4 {{ $accentClass }} overflow-hidden"
    >
        {{-- Close button --}}
        <button
            wire:click="closeModal"
            class="absolute top-4 right-4 text-slate-400 hover:text-slate-600
                   transition-colors p-1.5 rounded-lg hover:bg-slate-100"
            aria-label="Tutup modal"
        >
            <i class="ti ti-x text-lg" aria-hidden="true"></i>
        </button>

        {{-- Header --}}
        <div class="p-6 pb-5 border-b border-slate-100">
            <div class="flex items-start gap-5">

                {{-- Photo --}}
                @if ($speaker['photo'])
                    <img
                        src="{{ asset($speaker['photo']) }}"
                        alt="Photo of {{ $speaker['name'] }}"
                        class="w-20 h-20 rounded-xl object-cover flex-shrink-0"
                    />
                @else
                    <div class="w-20 h-20 rounded-xl bg-slate-100 flex items-center justify-center flex-shrink-0">
                        <span class="text-xl font-medium text-slate-400">{{ $speaker['initials'] }}</span>
                    </div>
                @endif

                {{-- Identity --}}
                <div class="flex-1 min-w-0 pt-1">
                    <span class="inline-flex text-xs font-medium px-2.5 py-0.5 rounded-full mb-2 {{ $badgeClass }}">
                        {{ $badgeLabel }}
                    </span>
                    <h2 class="text-lg font-medium text-slate-900 leading-tight">
                        {{ $speaker['name'] }}
                    </h2>
                    <p class="text-sm text-slate-500 mt-0.5">
                        {{ $speaker['title'] }} · {{ $speaker['institution'] }}
                    </p>
                    <div class="flex items-center gap-2 mt-2 flex-wrap">
                        <span class="text-xs text-slate-400 flex items-center gap-1">
                            {{ $speaker['flag'] }} {{ $speaker['country'] }}
                        </span>
                        @if ($speaker['session_time'])
                            <span class="text-xs text-slate-400 flex items-center gap-1">
                                <i class="ti ti-clock text-xs" aria-hidden="true"></i>
                                {{ $speaker['session_time'] }}
                            </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        {{-- Body --}}
        <div class="p-6 flex flex-col gap-4">

            {{-- Topic --}}
            @if ($speaker['topic'])
                <div class="bg-slate-50 rounded-xl px-4 py-3">
                    <p class="text-xs font-medium text-slate-400 uppercase tracking-wider mb-1.5">
                        Presentation topic
                    </p>
                    <p class="text-sm font-medium text-slate-700 leading-snug">
                        "{{ $speaker['topic'] }}"
                    </p>
                </div>
            @endif

            {{-- Bio --}}
            @if ($speaker['bio'])
                <div>
                    <p class="text-xs font-medium text-slate-400 uppercase tracking-wider mb-1.5">
                        Biographical note
                    </p>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        {{ $speaker['bio'] }}
                    </p>
                </div>
            @endif

        </div>

        {{-- Footer --}}
        <div class="px-6 pb-5 flex justify-end">
            <button
                wire:click="closeModal"
                class="text-sm text-slate-500 hover:text-slate-700 border border-slate-200
                       hover:border-slate-300 px-4 py-2 rounded-lg transition-colors"
            >
                Tutup
            </button>
        </div>

    </div>
</div>
