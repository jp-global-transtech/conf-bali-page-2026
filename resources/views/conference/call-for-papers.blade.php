@extends('layouts.conference')

@section('title', 'Call for Abstract - GETS 2026')
@section('meta-description', 'Submit your abstract for the Global Environment & Transition Summit 2026 (GETS 2026). 13 interdisciplinary sub-themes on climate resilience and green transition.')

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
        <section class="relative min-h-[50vh] flex items-center justify-center overflow-hidden py-20 md:py-32">
            <div class="absolute inset-0">
                {{-- Layer 1: Base gradient --}}
                <div class="absolute inset-0 bg-gradient-to-br from-white via-[#F8FBF9] to-[#F5F9F6]"></div>
                {{-- Layer 2: Subtle grid pattern --}}
                <div class="absolute inset-0 opacity-[0.015]" style="background-image: radial-gradient(circle at 1px 1px, #166534 1px, transparent 0); background-size: 60px 60px;"></div>
                {{-- Layer 3: Soft gradient glow --}}
                <div class="absolute top-[-5%] right-[-5%] w-[500px] h-[500px] bg-emerald-500/5 rounded-full blur-3xl"></div>
                <div class="absolute bottom-[-5%] left-[-5%] w-[400px] h-[400px] bg-teal-500/3 rounded-full blur-3xl"></div>
            </div>

            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

                <span class="inline-block px-4 py-1.5 bg-forest/10 text-forest rounded-full text-sm font-medium mb-6">
                    GETS 2026
                </span>
                <h1 class="font-display text-4xl md:text-5xl lg:text-6xl text-gray-900 font-bold mb-6">
                    Call for Abstract
                </h1>
                <p class="text-xl md:text-2xl text-gray-600 max-w-3xl mx-auto mb-8">
                    Authors are invited to submit original research aligned with the conference themes
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#download-template" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-forest text-white font-display font-semibold rounded-lg hover:bg-forest-700 transition-all duration-300 shadow-md hover:shadow-lg">
                        <span>Download Template</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                        </svg>
                    </a>
                    <a href="{{ route('conference.contact') }}" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-white text-forest font-display font-semibold rounded-lg border-2 border-forest hover:bg-forest/5 transition-all duration-300">
                        <span>Contact Us</span>
                    </a>
                </div>
            </div>
        </section>

        {{-- Sub-themes Section --}}
        <section class="py-16 md:py-20 bg-ivory">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="font-display text-3xl md:text-4xl text-forest font-bold mb-4">
                        13 Interdisciplinary Sub-themes
                    </h2>
                    <p class="text-lg text-earth max-w-2xl mx-auto">
                        We welcome submissions across these interconnected research areas
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($subthemes as $index => $subtheme)
                        <div class="group bg-white rounded-xl p-6 hover:bg-forest/5 transition-all duration-300 hover:shadow-lg border border-forest/10">
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 w-10 h-10 bg-forest rounded-lg flex items-center justify-center text-white font-display font-bold">
                                    {{ $index + 1 }}
                                </div>
                                <div>
                                    <h3 class="font-display text-lg text-forest font-semibold mb-2 group-hover:text-sage transition-colors">
                                        {{ $subtheme }}
                                    </h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- Abstract Submission Overview --}}
        <section class="py-16 md:py-20 bg-ivory">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-4xl mx-auto text-center mb-12">
                    <h2 class="font-display text-3xl md:text-4xl text-forest font-bold mb-6">
                        Abstract Submission Overview
                    </h2>
                    <p class="text-lg text-earth leading-relaxed">
                        We invite researchers, academics, and professionals to submit their original research abstracts for presentation at GETS 2026.
                    </p>
                </div>

                <div class="max-w-3xl mx-auto">
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="bg-white rounded-xl p-6 shadow-sm text-center">
                            <h3 class="font-display text-lg font-semibold text-forest mb-2">Submit Original Research</h3>
                            <p class="text-earth text-sm">Share your unpublished research findings with the global academic community.</p>
                        </div>
                        <div class="bg-white rounded-xl p-6 shadow-sm text-center">
                            <h3 class="font-display text-lg font-semibold text-forest mb-2">Align with Conference Themes</h3>
                            <p class="text-earth text-sm">Your abstract should relate to one of our 13 interdisciplinary sub-themes on climate resilience and green transition.</p>
                        </div>
                        <div class="bg-white rounded-xl p-6 shadow-sm text-center">
                            <h3 class="font-display text-lg font-semibold text-forest mb-2">Peer Review Process</h3>
                            <p class="text-earth text-sm">All submitted abstracts will undergo review by our expert committee. Selected authors will be notified of acceptance.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Important Dates --}}
        <section class="py-16 md:py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="font-display text-3xl md:text-4xl text-forest font-bold mb-4">
                        Important Dates
                    </h2>
                    <p class="text-lg text-earth">
                        Key milestones — deadlines vary by participant category
                    </p>
                </div>

                <div class="max-w-5xl mx-auto space-y-8">

                    {{-- ════════════════════════════════════════════
                         Indian Delegates (Coordinated by NEMA)
                         ════════════════════════════════════════════ --}}
                    <div class="bg-gradient-to-br from-orange-50 to-amber-50 rounded-2xl p-6 md:p-8 border border-orange-200/60">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 bg-orange-500 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Indian Delegates</h3>
                                <p class="text-sm text-gray-600">Coordinated by NEMA</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="bg-white rounded-xl p-5 border border-orange-200 shadow-sm">
                                <div class="flex items-center gap-2 mb-3">
                                    <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <span class="text-sm font-semibold text-gray-900">Abstract Submission</span>
                                </div>
                                <p class="text-2xl md:text-3xl font-bold text-orange-600">15 July 2026</p>
                                <p class="text-xs text-gray-500 mt-1">For Presenters / Authors</p>
                            </div>
                            <div class="bg-white rounded-xl p-5 border border-orange-200 shadow-sm">
                                <div class="flex items-center gap-2 mb-3">
                                    <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                    <span class="text-sm font-semibold text-gray-900">Registration Deadline</span>
                                </div>
                                <p class="text-2xl md:text-3xl font-bold text-orange-600">25 July 2026</p>
                                <p class="text-xs text-gray-500 mt-1">For All Delegates</p>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mt-4">
                            For detailed guidelines, download the
                            <a href="/docs/GETS_2026_Indian_Guidelines.pdf" target="_blank" class="text-orange-600 hover:text-orange-700 font-medium underline underline-offset-2">Indian Guidelines PDF</a>
                            or email
                            <a href="mailto:secretarynema2016@gmail.com" class="text-orange-600 hover:text-orange-700 font-medium underline underline-offset-2">secretarynema2016@gmail.com</a>
                        </p>
                    </div>

                    {{-- ════════════════════════════════════════════
                         Indonesia & International Participants
                         ════════════════════════════════════════════ --}}
                    <div class="bg-gradient-to-br from-emerald-50 to-teal-50 rounded-2xl p-6 md:p-8 border border-emerald-200/60">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 bg-teal-600 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Indonesia &amp; General International Participants</h3>
                                <p class="text-sm text-gray-600">Direct Registration</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="bg-white rounded-xl p-5 border border-emerald-200 shadow-sm">
                                <div class="flex items-center gap-2 mb-3">
                                    <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <span class="text-sm font-semibold text-gray-900">Abstract Submission</span>
                                </div>
                                <p class="text-2xl md:text-3xl font-bold text-teal-700">10 August 2026</p>
                                <p class="text-xs text-gray-500 mt-1">For Presenters / Authors</p>
                            </div>
                            <div class="bg-white rounded-xl p-5 border border-emerald-200 shadow-sm">
                                <div class="flex items-center gap-2 mb-3">
                                    <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                    <span class="text-sm font-semibold text-gray-900">Registration Deadline</span>
                                </div>
                                <p class="text-2xl md:text-3xl font-bold text-teal-700">23 August 2026</p>
                                <p class="text-xs text-gray-500 mt-1">For All Participants</p>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mt-4">
                            Submit through the
                            <a href="{{ config('conference.conf_ms_web_url') }}" target="_blank" class="text-teal-600 hover:text-teal-700 font-medium underline underline-offset-2">registration portal</a>
                            or email your abstract to
                            <a href="mailto:info@jptranstech.org" class="text-teal-600 hover:text-teal-700 font-medium underline underline-offset-2">info@jptranstech.org</a>
                        </p>
                    </div>

                    {{-- ════════════════════════════════════════════
                         Summit & Event Days (Bali, Hybrid)
                         ════════════════════════════════════════════ --}}
                    <div class="bg-gradient-to-br from-slate-50 to-gray-100 rounded-2xl p-6 md:p-8 border border-slate-200/60">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 bg-slate-600 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Summit &amp; Event Days</h3>
                                <p class="text-sm text-gray-600">Lecture Building, Universitas Udayana, Bali — Hybrid Conference</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="bg-white rounded-xl p-5 border border-slate-200 shadow-sm">
                                <div class="flex items-center gap-2 mb-3">
                                    <svg class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <span class="text-sm font-semibold text-gray-900">Conference Day</span>
                                </div>
                                <p class="text-2xl md:text-3xl font-bold text-slate-800">24 August 2026</p>
                                <p class="text-xs text-gray-500 mt-1">Plenary &amp; Parallel Sessions (09:00 – 17:20 WITA)</p>
                            </div>
                            <div class="bg-white rounded-xl p-5 border border-slate-200 shadow-sm">
                                <div class="flex items-center gap-2 mb-3">
                                    <svg class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-sm font-semibold text-gray-900">Special Program</span>
                                </div>
                                <p class="text-2xl md:text-3xl font-bold text-slate-800">25 August 2026</p>
                                <p class="text-xs text-gray-500 mt-1">Learning Visit to su-re.co <span class="font-medium text-amber-600">(Strictly Limited to 50 Seats)</span></p>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mt-4">
                            <span class="font-medium text-slate-700">Important Notice:</span> Technical presentation slides and digital poster files must be submitted via email before <span class="font-semibold text-slate-800">3 August 2026</span>.
                        </p>
                    </div>

                </div>
            </div>
        </section>

        {{-- Abstract Requirements --}}
        <section class="py-16 md:py-20 bg-atmosphere/5">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="font-display text-3xl md:text-4xl text-forest font-bold mb-4">
                        Abstract Requirements
                    </h2>
                    <p class="text-lg text-earth">
                        Please ensure your abstract meets these requirements
                    </p>
                </div>

                <div class="max-w-4xl mx-auto">
                    <div class="grid md:grid-cols-2 gap-8">
                        {{-- Left Column: Basic Requirements --}}
                        <div class="bg-white rounded-2xl shadow-lg p-8">
                            <h3 class="font-display text-xl text-forest font-semibold mb-6 flex items-center gap-3">
                                <div class="w-10 h-10 bg-forest/10 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </div>
                                Format Requirements
                            </h3>
                            <ul class="space-y-3 text-earth">
                                <li class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span><strong>Maximum 1 page</strong> (A4 size)</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span><strong>Maximum 400 words</strong></span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Written in <strong>English</strong></span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Font: <strong>Times New Roman</strong></span>
                                </li>
                            </ul>
                        </div>

                        {{-- Right Column: Content Checklist --}}
                        <div class="bg-white rounded-2xl shadow-lg p-8">
                            <h3 class="font-display text-xl text-forest font-semibold mb-6 flex items-center gap-3">
                                <div class="w-10 h-10 bg-forest/10 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                    </svg>
                                </div>
                                Include
                            </h3>
                            <ul class="space-y-2 text-earth">
                                <li class="flex items-start gap-2">
                                    <svg class="w-4 h-4 text-sage flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4" />
                                    </svg>
                                    <span>Title</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-4 h-4 text-sage flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4" />
                                    </svg>
                                    <span>Author(s)</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-4 h-4 text-sage flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4" />
                                    </svg>
                                    <span>Affiliation(s)</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-4 h-4 text-sage flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4" />
                                    </svg>
                                    <span>Email Address</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-4 h-4 text-sage flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4" />
                                    </svg>
                                    <span>Abstract Content</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-4 h-4 text-sage flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4" />
                                    </svg>
                                    <span>Up to <strong>5 Keywords</strong></span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-4 h-4 text-sage flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4" />
                                    </svg>
                                    <span>Up to <strong>5 References</strong></span>
                                </li>
                            </ul>

                            <div class="mt-6 pt-6 border-t border-forest/10">
                                <h4 class="font-semibold text-forest mb-3 text-sm">The abstract should describe:</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="inline-block px-3 py-1 bg-forest/5 text-forest rounded-full text-sm">Background</span>
                                    <span class="inline-block px-3 py-1 bg-forest/5 text-forest rounded-full text-sm">Objectives</span>
                                    <span class="inline-block px-3 py-1 bg-forest/5 text-forest rounded-full text-sm">Methods</span>
                                    <span class="inline-block px-3 py-1 bg-forest/5 text-forest rounded-full text-sm">Results</span>
                                    <span class="inline-block px-3 py-1 bg-forest/5 text-forest rounded-full text-sm">Conclusion</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Download Template Section --}}
        <section id="download-template" class="py-16 md:py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-3xl mx-auto text-center">
                    <h2 class="font-display text-3xl md:text-4xl text-forest font-bold mb-4">
                        Download Official Abstract Template
                    </h2>
                    <p class="text-lg text-earth mb-8">
                        Please use the official template to ensure your abstract meets the conference formatting requirements.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        {{-- Primary: Download Template --}}
                        <a href="/templates/GETS2026_Abstract_Template.docx" download="GETS2026_Abstract_Template.docx" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-forest text-white font-display font-semibold rounded-lg hover:bg-forest-700 transition-all duration-300 shadow-md hover:shadow-lg">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                            </svg>
                            <span>Download Abstract Template (.DOCX)</span>
                        </a>

                        {{-- Secondary: Download Sample --}}
                        <a href="/docs/sample-abstract.pdf" target="_blank" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-white text-forest font-display font-semibold rounded-lg border-2 border-forest hover:bg-forest/5 transition-all duration-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            <span>Download Sample (.PDF)</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{-- Sub-themes Section (Moved after hero) --}}

        {{-- Submission Process --}}
        <section class="py-16 md:py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="font-display text-3xl md:text-4xl text-forest font-bold mb-4">
                        Submission Process
                    </h2>
                    <p class="text-lg text-earth">
                        Follow these steps to submit your abstract
                    </p>
                </div>

                <div class="max-w-5xl mx-auto">
                    {{-- Desktop: Horizontal | Mobile: Stacked --}}
                    <div class="flex flex-col md:flex-row items-start justify-between gap-4 md:gap-2">
                        {{-- Step 1 --}}
                        <div class="flex-1 text-center md:text-left">
                            <div class="w-16 h-16 bg-forest rounded-full flex items-center justify-center mx-auto md:mx-0 mb-4">
                                <span class="text-2xl font-display font-bold text-white">1</span>
                            </div>
                            <div class="flex items-center gap-2 mb-2 md:mb-3">
                                <svg class="w-6 h-6 text-forest flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                <h3 class="font-display text-lg font-semibold text-forest">Prepare Abstract</h3>
                            </div>
                            <p class="text-sm text-earth">Download template and prepare your abstract following guidelines.</p>
                            {{-- Arrow for mobile only --}}
                            <div class="md:hidden flex justify-center my-4">
                                <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </div>

                        {{-- Arrow for desktop --}}
                        <div class="hidden md:flex items-center flex-shrink-0 px-2">
                            <svg class="w-8 h-8 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </div>

                        {{-- Step 2 --}}
                        <div class="flex-1 text-center md:text-left">
                            <div class="w-16 h-16 bg-forest rounded-full flex items-center justify-center mx-auto md:mx-0 mb-4">
                                <span class="text-2xl font-display font-bold text-white">2</span>
                            </div>
                            <div class="flex items-center gap-2 mb-2 md:mb-3">
                                <svg class="w-6 h-6 text-forest flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                </svg>
                                <h3 class="font-display text-lg font-semibold text-forest">Submit Online</h3>
                            </div>
                            <p class="text-sm text-earth">Submit your abstract through the online submission system.</p>
                            <div class="md:hidden flex justify-center my-4">
                                <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </div>

                        <div class="hidden md:flex items-center flex-shrink-0 px-2">
                            <svg class="w-8 h-8 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </div>

                        {{-- Step 3 --}}
                        <div class="flex-1 text-center md:text-left">
                            <div class="w-16 h-16 bg-forest rounded-full flex items-center justify-center mx-auto md:mx-0 mb-4">
                                <span class="text-2xl font-display font-bold text-white">3</span>
                            </div>
                            <div class="flex items-center gap-2 mb-2 md:mb-3">
                                <svg class="w-6 h-6 text-forest flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                                </svg>
                                <h3 class="font-display text-lg font-semibold text-forest">Peer Review</h3>
                            </div>
                            <p class="text-sm text-earth">Your abstract undergoes review by our expert committee.</p>
                            <div class="md:hidden flex justify-center my-4">
                                <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </div>

                        <div class="hidden md:flex items-center flex-shrink-0 px-2">
                            <svg class="w-8 h-8 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </div>

                        {{-- Step 4 --}}
                        <div class="flex-1 text-center md:text-left">
                            <div class="w-16 h-16 bg-forest rounded-full flex items-center justify-center mx-auto md:mx-0 mb-4">
                                <span class="text-2xl font-display font-bold text-white">4</span>
                            </div>
                            <div class="flex items-center gap-2 mb-2 md:mb-3">
                                <svg class="w-6 h-6 text-forest flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                </svg>
                                <h3 class="font-display text-lg font-semibold text-forest">Notification</h3>
                            </div>
                            <p class="text-sm text-earth">Receive notification of acceptance via email.</p>
                            <div class="md:hidden flex justify-center my-4">
                                <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </div>

                        <div class="hidden md:flex items-center flex-shrink-0 px-2">
                            <svg class="w-8 h-8 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </div>

                        {{-- Step 5 --}}
                        <div class="flex-1 text-center md:text-left">
                            <div class="w-16 h-16 bg-forest rounded-full flex items-center justify-center mx-auto md:mx-0 mb-4">
                                <span class="text-2xl font-display font-bold text-white">5</span>
                            </div>
                            <div class="flex items-center gap-2 mb-2 md:mb-3">
                                <svg class="w-6 h-6 text-forest flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <h3 class="font-display text-lg font-semibold text-forest">Registration</h3>
                            </div>
                            <p class="text-sm text-earth">Complete registration to secure your presentation slot.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Final CTA Section --}}
        <section class="py-16 md:py-24 bg-forest">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="font-display text-3xl md:text-4xl text-white font-bold mb-6">
                    Ready to Submit Your Abstract?
                </h2>
                <p class="text-lg text-ivory-200 mb-8 max-w-2xl mx-auto">
                    Join researchers, academics, and professionals from around the world by contributing your research to GETS 2026.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('conference.register') }}" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-sage text-forest font-display font-semibold rounded-lg hover:bg-white transition-all duration-300 hover:shadow-lg">
                        <span>Submit Abstract / Register Now</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                    <a href="{{ route('conference.contact') }}" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-transparent border-2 border-white text-white font-display font-semibold rounded-lg hover:bg-white hover:text-forest transition-all duration-300">
                        <span>Contact Us</span>
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
