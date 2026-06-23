@extends('layouts.conference')

@section('title', 'Register - GETS 2026')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-sage/10 to-atmosphere/5 py-16 px-4">
    <div class="max-w-7xl mx-auto">
        {{-- Header --}}
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-display font-bold text-forest mb-4">Conference Registration</h1>
            <p class="text-lg text-earth max-w-2xl mx-auto">
                Join us for the Global Environment & Transition Summit 2026 (GETS 2026).
            </p>
        </div>

        {{-- Registration Form Component --}}
        <x-registration-form />
    </div>
</div>
@endsection
