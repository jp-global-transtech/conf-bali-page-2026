@extends('layouts.conference')

@section('title', 'About GETS 2026 - Global Environment & Transition Summit')
@section('meta-description', 'Learn about the Global Environment & Transition Summit 2026 (GETS 2026) on Leading the Green Transition: Strategies for a Climate-Resilient Future. A bilateral collaboration between Indonesia and India.')

@section('content')
{{-- Page Loading State --}}
<div x-data="{
    isLoading: true,
    init() {
        // Also update store for footer visibility
        this.$store.loading = this.$store.loading || {};
        this.$store.loading.isLoading = true;
        setTimeout(() => {
            this.isLoading = false;
            this.$store.loading.isLoading = false;
        }, 800);
    }
}">
    {{-- Loading Screen --}}
    @include('components.loading-screen')

    {{-- Main Content --}}
    <div x-show="!isLoading" x-cloak x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">

        {{-- Hero Section --}}
        <section class="relative bg-forest py-20 md:py-32">
            <div class="absolute inset-0 overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-forest via-forest to-sage opacity-90"></div>
                {{-- Abstract background pattern --}}
                <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.4\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
            </div>

            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <span class="inline-block px-4 py-1.5 bg-sage/20 text-sage rounded-full text-sm font-medium mb-6">
                    About the Conference
                </span>
                <h1 class="font-display text-4xl md:text-5xl lg:text-6xl text-white font-bold mb-6">
                    Leading the Green Transition
                </h1>
                <p class="text-xl md:text-2xl text-ivory-200 max-w-3xl mx-auto mb-8">
                    Strategies for a Climate-Resilient Future
                </p>
            </div>
        </section>

        {{-- Background & Context Section --}}
        <section class="py-16 md:py-24 bg-ivory">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <span class="inline-block px-3 py-1 bg-atmosphere/10 text-atmosphere rounded-full text-sm font-medium mb-4">
                            Background & Context
                        </span>
                        <h2 class="font-display text-3xl md:text-4xl text-forest font-bold mb-6">
                            Why This Conference Matters
                        </h2>
                        <p class="text-lg text-earth leading-relaxed mb-6">
                            The world faces unprecedented challenges from extreme weather events and environmental degradation. Climate change is no longer a distant threat—it's a present reality affecting communities, ecosystems, and economies worldwide.
                        </p>
                        <p class="text-lg text-earth leading-relaxed mb-6">
                            This conference responds to this urgent call by providing an interdisciplinary platform where scholars, policymakers, innovators, and practitioners can collaborate on practical strategies for climate resilience and green transition.
                        </p>
                    </div>
                    <div class="relative">
                        <div class="aspect-video rounded-2xl overflow-hidden shadow-2xl">
                            <img src="https://images.unsplash.com/photo-1569163139394-de4798aa62b6?w=800&q=80"
                                 alt="Climate action and sustainability"
                                 class="w-full h-full object-cover">
                        </div>
                        {{-- Decorative elements --}}
                        <div class="absolute -bottom-6 -left-6 w-24 h-24 bg-sage/20 rounded-2xl -z-10"></div>
                        <div class="absolute -top-6 -right-6 w-24 h-24 bg-atmosphere/20 rounded-2xl -z-10"></div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Conference Vision Section --}}
        <section class="py-16 md:py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <span class="inline-block px-3 py-1 bg-sage/10 text-sage rounded-full text-sm font-medium mb-4">
                        Our Vision
                    </span>
                    <h2 class="font-display text-3xl md:text-4xl text-forest font-bold mb-6">
                        Bridging Technology, Business, Policy & Culture
                    </h2>
                    <p class="text-lg text-earth leading-relaxed">
                        We believe that effective climate action requires collaboration across disciplines and borders. Our vision is to create lasting impact through:
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    {{-- Vision Card 1 --}}
                    <div class="group bg-ivory rounded-2xl p-8 hover:bg-forest hover:text-white transition-all duration-300">
                        <div class="w-14 h-14 bg-forest group-hover:bg-white/20 rounded-xl flex items-center justify-center mb-6 transition-colors">
                            <svg class="w-7 h-7 text-white group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                            </svg>
                        </div>
                        <h3 class="font-display text-xl text-forest group-hover:text-white font-semibold mb-3">Innovation</h3>
                        <p class="text-earth group-hover:text-ivory-200 text-sm leading-relaxed">
                            Cutting-edge technologies for environmental challenges
                        </p>
                    </div>

                    {{-- Vision Card 2 --}}
                    <div class="group bg-ivory rounded-2xl p-8 hover:bg-sage hover:text-white transition-all duration-300">
                        <div class="w-14 h-14 bg-sage group-hover:bg-white/20 rounded-xl flex items-center justify-center mb-6 transition-colors">
                            <svg class="w-7 h-7 text-white group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="font-display text-xl text-forest group-hover:text-white font-semibold mb-3">Business</h3>
                        <p class="text-earth group-hover:text-ivory-200 text-sm leading-relaxed">
                            Sustainable economic models and green finance
                        </p>
                    </div>

                    {{-- Vision Card 3 --}}
                    <div class="group bg-ivory rounded-2xl p-8 hover:bg-atmosphere hover:text-white transition-all duration-300">
                        <div class="w-14 h-14 bg-atmosphere group-hover:bg-white/20 rounded-xl flex items-center justify-center mb-6 transition-colors">
                            <svg class="w-7 h-7 text-white group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                            </svg>
                        </div>
                        <h3 class="font-display text-xl text-forest group-hover:text-white font-semibold mb-3">Policy</h3>
                        <p class="text-earth group-hover:text-ivory-200 text-sm leading-relaxed">
                            Effective governance and international cooperation
                        </p>
                    </div>

                    {{-- Vision Card 4 --}}
                    <div class="group bg-ivory rounded-2xl p-8 hover:bg-forest/70 hover:text-white transition-all duration-300">
                        <div class="w-14 h-14 bg-forest/70 group-hover:bg-white/20 rounded-xl flex items-center justify-center mb-6 transition-colors">
                            <svg class="w-7 h-7 text-white group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="font-display text-xl text-forest group-hover:text-white font-semibold mb-3">Culture</h3>
                        <p class="text-earth group-hover:text-ivory-200 text-sm leading-relaxed">
                            Traditional wisdom and cultural heritage
                        </p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Bilateral Collaboration Section --}}
        <section class="py-16 md:py-24 bg-gradient-to-br from-forest/5 to-sage/10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <span class="inline-block px-3 py-1 bg-sage/20 text-sage rounded-full text-sm font-medium mb-4">
                        Bilateral Partnership
                    </span>
                    <h2 class="font-display text-3xl md:text-4xl text-forest font-bold mb-6">
                        Indonesia × India Collaboration
                    </h2>
                    <p class="text-lg text-earth leading-relaxed">
                        This conference represents a unique bilateral collaboration bringing together leading institutions from both nations
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    {{-- Indonesia Side --}}
                    <div class="bg-white rounded-2xl p-8 shadow-lg">
                        <div class="flex items-center gap-4 mb-6">
                            <span class="text-4xl">🇮🇩</span>
                            <div>
                                <h3 class="font-display text-2xl text-forest font-semibold">Indonesia</h3>
                                <p class="text-earth text-sm">Host & PMO</p>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div class="flex items-start gap-3">
                                <div class="w-10 h-10 bg-forest/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-medium text-forest">Udayana University</p>
                                    <p class="text-sm text-earth">Bali, Indonesia - Host</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-10 h-10 bg-forest/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-medium text-forest">FiNder U-CoE UNPAD</p>
                                    <p class="text-sm text-earth">Universitas Padjadjaran - Co-Host & PMO</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6 pt-6 border-t border-forest/10">
                            <p class="text-sm text-earth">
                                <strong>Focus:</strong> Future Tech & Applied Sciences
                            </p>
                        </div>
                    </div>

                    {{-- India Side --}}
                    <div class="bg-white rounded-2xl p-8 shadow-lg">
                        <div class="flex items-center gap-4 mb-6">
                            <span class="text-4xl">🇮🇳</span>
                            <div>
                                <h3 class="font-display text-2xl text-forest font-semibold">India</h3>
                                <p class="text-earth text-sm">International Partner</p>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div class="flex items-start gap-3">
                                <div class="w-10 h-10 bg-atmosphere/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-atmosphere" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-medium text-forest">Dhanamanjuri University</p>
                                    <p class="text-sm text-earth">Manipur, India</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-10 h-10 bg-atmosphere/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-atmosphere" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-medium text-forest">NEMA</p>
                                    <p class="text-sm text-earth">North Eastern Management Association</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6 pt-6 border-t border-forest/10">
                            <p class="text-sm text-earth">
                                <strong>Focus:</strong> Business, Society & Policy
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Conference Objectives Section --}}
        <section class="py-16 md:py-24 bg-ivory">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <span class="inline-block px-3 py-1 bg-atmosphere/10 text-atmosphere rounded-full text-sm font-medium mb-4">
                        Objectives
                    </span>
                    <h2 class="font-display text-3xl md:text-4xl text-forest font-bold mb-6">
                        What We Aim to Achieve
                    </h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white rounded-xl p-6 shadow-sm border border-forest/10">
                        <div class="w-12 h-12 bg-sage/20 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="font-display text-lg text-forest font-semibold mb-2">Global Platform</h3>
                        <p class="text-earth text-sm leading-relaxed">
                            Create an interdisciplinary platform for scholars, policymakers, and innovators to collaborate
                        </p>
                    </div>

                    <div class="bg-white rounded-xl p-6 shadow-sm border border-forest/10">
                        <div class="w-12 h-12 bg-sage/20 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547z" />
                            </svg>
                        </div>
                        <h3 class="font-display text-lg text-forest font-semibold mb-2">Practical Strategies</h3>
                        <p class="text-earth text-sm leading-relaxed">
                            Develop actionable strategies for ecological sustainability and climate resilience
                        </p>
                    </div>

                    <div class="bg-white rounded-xl p-6 shadow-sm border border-forest/10">
                        <div class="w-12 h-12 bg-sage/20 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="font-display text-lg text-forest font-semibold mb-2">Bridge Sectors</h3>
                        <p class="text-earth text-sm leading-relaxed">
                            Connect technology, business, policy, and cultural heritage for holistic solutions
                        </p>
                    </div>

                    <div class="bg-white rounded-xl p-6 shadow-sm border border-forest/10">
                        <div class="w-12 h-12 bg-atmosphere/20 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-atmosphere" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <h3 class="font-display text-lg text-forest font-semibold mb-2">Knowledge Exchange</h3>
                        <p class="text-earth text-sm leading-relaxed">
                            Facilitate knowledge sharing between Indonesia, India, and the global community
                        </p>
                    </div>

                    <div class="bg-white rounded-xl p-6 shadow-sm border border-forest/10">
                        <div class="w-12 h-12 bg-atmosphere/20 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-atmosphere" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                            </svg>
                        </div>
                        <h3 class="font-display text-lg text-forest font-semibold mb-2">Innovation Showcase</h3>
                        <p class="text-earth text-sm leading-relaxed">
                            Highlight cutting-edge research and innovations in green technology
                        </p>
                    </div>

                    <div class="bg-white rounded-xl p-6 shadow-sm border border-forest/10">
                        <div class="w-12 h-12 bg-atmosphere/20 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-atmosphere" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                            </svg>
                        </div>
                        <h3 class="font-display text-lg text-forest font-semibold mb-2">Publication Opportunities</h3>
                        <p class="text-earth text-sm leading-relaxed">
                            Provide publication opportunities in conference proceedings and edited volumes
                        </p>
                    </div>
                </div>
            </div>
        </section>

        {{-- CTA Section --}}
        <section class="py-16 md:py-24 bg-forest">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="font-display text-3xl md:text-4xl text-white font-bold mb-6">
                    Be Part of the Solution
                </h2>
                <p class="text-lg text-ivory-200 mb-8">
                    Join us in shaping a climate-resilient future through collaboration and innovation
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('conference.registration') }}" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-sage text-forest font-display font-semibold rounded-full hover:bg-white transition-all duration-300 hover:shadow-lg">
                        <span>Register Now</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                    <a href="{{ route('conference.call-for-abstract') }}" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-transparent border-2 border-white text-white font-display font-semibold rounded-full hover:bg-white hover:text-forest transition-all duration-300">
                        <span>Submit Abstract</span>
                    </a>
                </div>
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
