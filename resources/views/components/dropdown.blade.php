@props(['align' => 'right', 'width' => '48', 'contentClasses' => 'py-1 bg-white dark:bg-gray-800'])

@php
$alignClasses = match($align) {
    'left' => 'ltr:origin-top-left rtl:origin-top-right start-0',
    'right' => 'ltr:origin-top-right rtl:origin-top-left end-0',
    default => 'ltr:origin-top-left rtl:origin-top-right start-0',
};

$widthClasses = match($width) {
    '48' => 'w-48',
    '56' => 'w-56',
    '64' => 'w-64',
    default => 'w-48',
};
@endphp

<div class="relative" x-data="{ open: false }" @click.away="open = false" @close.stop="open = false">
    <div @click="open = ! open">
        {{ $trigger }}
    </div>

    <div x-show="open"
           x-transition:enter="transition ease-out duration-200"
           x-transition:enter-start="opacity-0 scale-95"
           x-transition:enter-end="opacity-100 scale-100"
           x-transition:leave="transition ease-in duration-75"
           x-transition:leave-start="opacity-100 scale-100"
           x-transition:leave-end="opacity-0 scale-95"
           class="absolute z-50 mt-2 {{ $widthClasses }} rounded-md shadow-lg {{ $alignClasses }}"
           style="display: none;"
           @click.stop="open = false">
        <div class="rounded-md ring-1 ring-black ring-opacity-5 {{ $contentClasses }}">
            {{ $slot }}
        </div>
    </div>
</div>
