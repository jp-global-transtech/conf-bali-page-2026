@extends('layouts.conference')

@section('title', 'Speakers Section | Bali 2026 Conference')

@section('content')
<div class="min-h-screen bg-slate-50 pt-20">

    {{-- Hero --}}
    <div class="bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <h1 class="text-3xl font-bold text-slate-900">Speakers</h1>
            <p class="text-slate-600 mt-2">Distinguished speakers from Indonesia and India</p>
        </div>
    </div>

    {{-- Livewire Speakers Section --}}
    @livewire('speakers-section')

</div>
@endsection
