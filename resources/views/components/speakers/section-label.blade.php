{{--
    resources/views/components/speakers/section-label.blade.php
    Props: $color (emerald|amber|orange), $tag, $heading
--}}

@props(['color' => 'emerald', 'tag' => '', 'heading' => ''])

@php
    $dotColor = match($color) {
        'amber'  => 'bg-amber-400',
        'orange' => 'bg-orange-500',
        default  => 'bg-emerald-500',
    };
    $tagColor = match($color) {
        'amber'  => 'text-amber-600',
        'orange' => 'text-orange-600',
        default  => 'text-emerald-700',
    };
@endphp

<div class="mb-6">
    <div class="flex items-center gap-2 mb-1.5">
        <span class="inline-block w-1.5 h-1.5 rounded-full {{ $dotColor }}"></span>
        <span class="text-xs font-medium tracking-widest uppercase {{ $tagColor }}">{{ $tag }}</span>
    </div>
    <h2 class="text-xl font-medium text-slate-800">{{ $heading }}</h2>
</div>
