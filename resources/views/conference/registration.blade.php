@extends('layouts.conference')

@section('title', 'Register - GETS 2026')
@section('meta-description', 'Register for the Global Environment & Transition Summit 2026 (GETS 2026). Secure registration system powered by conference management platform.')

@section('content')
{{-- Page Loading State --}}
<div x-data="{
    isLoading: true,
    init() {
        this.$store.loading = this.$store.loading || {};
        this.$store.loading.isLoading = true;
        setTimeout(() => {
            this.isLoading = false;
            this.$store.loading.isLoading = false;
        }, 600);
    }
}">
    {{-- Loading Screen --}}
    @include('components.loading-screen')

    {{-- Main Content --}}
    <div x-show="!isLoading" x-cloak x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">

        {{-- Hero Section --}}
        <section class="relative min-h-[70vh] flex items-center justify-center overflow-hidden py-20 md:py-32">
            <div class="absolute inset-0">
                <div class="absolute inset-0 bg-gradient-to-br from-white via-[#F8FBF9] to-[#F5F9F6]"></div>
                <div class="absolute inset-0 opacity-[0.015]" style="background-image: radial-gradient(circle at 1px 1px, #166534 1px, transparent 0); background-size: 60px 60px;"></div>
                <div class="absolute top-[-5%] right-[-5%] w-[500px] h-[500px] bg-emerald-500/5 rounded-full blur-3xl"></div>
                <div class="absolute bottom-[-5%] left-[-5%] w-[400px] h-[400px] bg-teal-500/3 rounded-full blur-3xl"></div>
            </div>

            <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                {{-- Badge --}}
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-forest/10 border border-forest/20 rounded-full mb-8">
                    <svg class="w-5 h-5 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                    <span class="text-sm font-medium text-forest">Secure Registration System</span>
                </div>

                <h1 class="font-display text-4xl md:text-5xl lg:text-6xl text-gray-900 font-bold mb-6">
                    Registration for GETS 2026
                </h1>

                <p class="text-xl md:text-2xl text-gray-600 max-w-2xl mx-auto mb-8">
                    You will be redirected to our secure conference management system to complete your registration.
                </p>

                {{-- Info Cards --}}
                <div class="grid md:grid-cols-3 gap-6 mb-10 max-w-3xl mx-auto">
                    <div class="bg-white rounded-xl p-5 border border-forest/10 shadow-sm">
                        <div class="w-10 h-10 bg-forest/10 rounded-lg flex items-center justify-center mx-auto mb-3">
                            <svg class="w-5 h-5 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <p class="text-sm font-medium text-forest">Secure Payment</p>
                    </div>

                    <div class="bg-white rounded-xl p-5 border border-forest/10 shadow-sm">
                        <div class="w-10 h-10 bg-forest/10 rounded-lg flex items-center justify-center mx-auto mb-3">
                            <svg class="w-5 h-5 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                        <p class="text-sm font-medium text-forest">Easy Form</p>
                    </div>

                    <div class="bg-white rounded-xl p-5 border border-forest/10 shadow-sm">
                        <div class="w-10 h-10 bg-forest/10 rounded-lg flex items-center justify-center mx-auto mb-3">
                            <svg class="w-5 h-5 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </div>
                        <p class="text-sm font-medium text-forest">Instant Confirmation</p>
                    </div>
                </div>

                {{-- CTA Button --}}
                <a href="{{ config('conference.conf_ms_web_url') }}/conference/register"
                   class="inline-flex items-center gap-3 px-10 py-5 bg-forest text-white text-lg font-display font-semibold rounded-xl hover:bg-sage transition-all duration-300 hover:shadow-lg hover:shadow-sage/25 hover:-translate-y-0.5">
                    <span>Continue to Registration</span>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>

                <p class="text-sm text-gray-500 mt-6">
                    You'll be redirected to <span class="font-mono text-xs bg-gray-100 px-2 py-1 rounded">{{ config('conference.conf_ms_web_url') }}/conference/register</span>
                </p>
            </div>
        </section>

        {{-- Auto Redirect Notice --}}
        <section class="py-8 bg-ivory">
            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-sage/10 border border-sage/30 rounded-xl p-6 text-center">
                    <p class="text-earth text-sm leading-relaxed">
                        <strong class="text-forest">Important:</strong> If you are not redirected automatically, please click the button above.
                        For any registration-related queries, please contact <a href="mailto:info@jptranstech.org" class="text-sage font-medium hover:underline">info@jptranstech.org</a>
                    </p>
                </div>
            </div>
        </section>

        {{-- Back to Home --}}
        <section class="py-8 bg-white">
            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <a href="{{ route('conference.landing') }}"
                   class="inline-flex items-center gap-2 text-earth hover:text-forest transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    <span>Back to Homepage</span>
                </a>
            </div>
        </section>

    </div>
</div>
@endsection

@section('footer')
<div x-data x-show="!$store.loading.isLoading" x-cloak x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
    <x-footer />
</div>
@endsection
