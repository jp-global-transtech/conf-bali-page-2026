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
        <section class="relative min-h-[60vh] flex items-center justify-center overflow-hidden py-20 md:py-32">
            <div class="absolute inset-0">
                {{-- Layer 1: Base gradient (clean white to soft green) --}}
                <div class="absolute inset-0 bg-gradient-to-br from-white via-[#F8FBF9] to-[#F5F9F6]"></div>
                {{-- Layer 2: Very subtle grid pattern --}}
                <div class="absolute inset-0 opacity-[0.015]" style="background-image: radial-gradient(circle at 1px 1px, #166534 1px, transparent 0); background-size: 60px 60px;"></div>
                {{-- Layer 3: Soft gradient glow --}}
                <div class="absolute top-[-5%] right-[-5%] w-[500px] h-[500px] bg-emerald-500/5 rounded-full blur-3xl"></div>
                <div class="absolute bottom-[-5%] left-[-5%] w-[400px] h-[400px] bg-teal-500/3 rounded-full blur-3xl"></div>
            </div>

            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <span class="inline-block px-4 py-1.5 bg-forest/10 text-forest rounded-full text-sm font-medium mb-6">
                    Call for Abstracts
                </span>
                <h1 class="font-display text-4xl md:text-5xl lg:text-6xl text-gray-900 font-bold mb-6">
                    Online Conference
                </h1>
                <p class="text-xl md:text-2xl text-gray-600 max-w-3xl mx-auto mb-8">
                    Share your research on climate resilience and green transition with a global audience
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('conference.registration') }}" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-forest text-white font-display font-semibold rounded-lg hover:bg-forest-700 transition-all duration-300 shadow-md hover:shadow-lg">
                        <span>Submit Abstract</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                    <a href="{{ route('conference.contact') }}" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-white text-forest font-display font-semibold rounded-lg border-2 border-forest hover:bg-forest-5 transition-all duration-300">
                        <span>Contact Us</span>
                    </a>
                </div>
            </div>
        </section>

        {{-- Introduction Section --}}
        <section class="py-16 md:py-24 bg-ivory">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-3xl mx-auto text-center mb-12">
                    <h2 class="font-display text-3xl md:text-4xl text-forest font-bold mb-6">
                        About the Call for Abstract
                    </h2>
                    <p class="text-lg text-earth leading-relaxed">
                        The GETS 2026 welcomes abstract submissions from researchers, practitioners, and students worldwide. Our Online Conference provides a platform for presenting innovative research without the constraints of international travel.
                    </p>
                </div>

                {{-- Publication Opportunity --}}
                <div class="bg-white rounded-2xl shadow-lg p-8 md:p-12 mb-12">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 w-12 h-12 bg-atmosphere/10 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-atmosphere" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-display text-xl text-forest font-semibold mb-3">Publication Opportunity</h3>
                            <p class="text-earth leading-relaxed mb-6">
                                Selected manuscripts will be considered for publication opportunities through academic review and editorial evaluation.
                            </p>

                            <div class="space-y-5">
                                {{-- Journal Publication --}}
                                <div class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <div>
                                        <h4 class="font-display text-lg font-semibold text-forest mb-1">Journal Publication Opportunities</h4>
                                        <p class="text-earth leading-relaxed">High-quality papers may be recommended for publication in partner academic journals or special issues.</p>
                                    </div>
                                </div>

                                {{-- Conference Proceedings --}}
                                <div class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <div>
                                        <h4 class="font-display text-lg font-semibold text-forest mb-1">Conference Proceedings / Edited Volume</h4>
                                        <p class="text-earth leading-relaxed">Accepted manuscripts may be considered for inclusion in conference proceedings or edited academic publications.</p>
                                    </div>
                                </div>

                                {{-- Academic Quality Review --}}
                                <div class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <div>
                                        <h4 class="font-display text-lg font-semibold text-forest mb-1">Academic Quality Review</h4>
                                        <p class="text-earth leading-relaxed">All manuscripts will undergo editorial screening, peer-review evaluation, and similarity checking.</p>
                                    </div>
                                </div>
                            </div>

                            {{-- Publication Note --}}
                            <div class="mt-6 bg-sage/10 rounded-lg p-4 border border-sage/20">
                                <p class="text-sm text-earth">
                                    <strong>Note:</strong> Publication channels, guidelines, and requirements will be announced after confirmation with academic partners.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Sub-themes Section --}}
        <section class="py-16 md:py-24 bg-white">
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
                        <div class="group bg-ivory rounded-xl p-6 hover:bg-forest/5 transition-all duration-300 hover:shadow-lg border border-forest/10">
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

        {{-- Submission Guidelines --}}
        <section class="py-16 md:py-24 bg-atmosphere/5">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="font-display text-3xl md:text-4xl text-forest font-bold mb-4">
                        Submission Guidelines
                    </h2>
                    <p class="text-lg text-earth">
                        Please follow these guidelines when preparing your submission
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    {{-- Abstract Format --}}
                    <div class="bg-white rounded-2xl shadow-lg p-8">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-12 h-12 bg-sage/20 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                            <h3 class="font-display text-xl text-forest font-semibold">Abstract Format</h3>
                        </div>
                        <ul class="space-y-3 text-earth">
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Maximum 250 words</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>PDF format only</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Include 3-5 keywords</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>State your preferred sub-theme</span>
                            </li>
                        </ul>
                    </div>

                    {{-- Important Dates --}}
                    <div class="bg-white rounded-2xl shadow-lg p-8">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-12 h-12 bg-sage/20 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <h3 class="font-display text-xl text-forest font-semibold">Important Dates</h3>
                        </div>
                        <ul class="space-y-3 text-earth">
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Abstract Submission: <strong>July 15, 2026</strong></span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Notification: <strong>July 30, 2026</strong></span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Full Paper: <strong>August 15, 2026</strong></span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Conference: <strong>August 24, 2026</strong></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        {{-- Regional Guidelines - Accordion Style --}}
        <section class="py-16 md:py-24 bg-ivory" x-data="{
            activePanel: 'india',
            togglePanel(panel) {
                this.activePanel = this.activePanel === panel ? null : panel;
            }
        }">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-3xl mx-auto text-center mb-12">
                    <h2 class="font-display text-3xl md:text-4xl text-forest font-bold mb-4">
                        Regional Guidelines & Fees
                    </h2>
                    <p class="text-lg text-earth">
                        Select your region for specific submission guidelines and registration information
                    </p>
                </div>

                {{-- India Panel --}}
                <div class="mb-4">
                    <button @click="togglePanel('india')" class="w-full bg-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 overflow-hidden">
                        <div class="p-6 flex items-center justify-between">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-full bg-orange-100 flex items-center justify-center text-2xl">🇮🇳</div>
                                <div class="text-left">
                                    <h3 class="font-display text-xl font-bold text-forest">India</h3>
                                    <p class="text-sm text-earth">Abstract guidelines & registration fees for Indian participants</p>
                                </div>
                            </div>
                            <svg class="w-6 h-6 text-sage transition-transform duration-300" :class="activePanel === 'india' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </button>
                    <div x-show="activePanel === 'india'" x-collapse x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" class="bg-white rounded-xl mt-2 shadow-md overflow-hidden">
                        <div class="p-8">
                            {{-- Indian Guidelines --}}
                            <div class="mb-8">
                                <h4 class="font-display text-lg font-semibold text-forest mb-4">Abstract Submission Guidelines</h4>
                                <p class="text-earth leading-relaxed mb-6">
                                    Download the complete guidelines including submission requirements, format specifications, important dates, and registration fees.
                                </p>
                                <div class="flex flex-wrap gap-4">
                                    <a href="/docs/GETS_2026_Indian_Guidelines.pdf" target="_blank" class="inline-flex items-center gap-2 px-6 py-3 bg-forest text-white font-display font-semibold rounded-lg hover:bg-forest-700 transition-all duration-300">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                        <span>Download PDF</span>
                                    </a>
                                    <a href="mailto:secretarynema2016@gmail.com" class="inline-flex items-center gap-2 px-6 py-3 bg-white text-forest font-display font-semibold rounded-lg border-2 border-forest hover:bg-forest/5 transition-all duration-300">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                        <span>Email Submission</span>
                                    </a>
                                </div>
                            </div>

                            {{-- Indian Registration Fees --}}
                            <div class="border-t border-forest/10 pt-8">
                                <h4 class="font-display text-lg font-semibold text-forest mb-4">Registration Fees (Indian Nationals)</h4>
                                <div class="grid md:grid-cols-2 gap-4 mb-4">
                                    <div class="bg-forest/5 rounded-lg p-4 border border-forest/10">
                                        <div class="flex justify-between items-center">
                                            <div>
                                                <h5 class="font-semibold text-forest">Presenting Author/Delegate</h5>
                                                <p class="text-sm text-earth">Full conference access with presentation</p>
                                            </div>
                                            <span class="text-2xl font-display font-bold text-sage">₹10,000</span>
                                        </div>
                                    </div>
                                    <div class="bg-sage/10 rounded-lg p-4 border border-sage/20">
                                        <div class="flex justify-between items-center">
                                            <div>
                                                <h5 class="font-semibold text-forest">Non-Presenting Participant</h5>
                                                <p class="text-sm text-earth">Attendance only, no presentation</p>
                                            </div>
                                            <span class="text-2xl font-display font-bold text-sage">₹5,000</span>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-sm text-earth bg-gray-50 rounded-lg p-3">
                                    <strong>Included:</strong> Refreshment and lunch (conference day), conference kits, and certificate. At least one author must be physically present for presentation.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Indonesia Panel --}}
                <div class="mb-4">
                    <button @click="togglePanel('indo')" class="w-full bg-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 overflow-hidden">
                        <div class="p-6 flex items-center justify-between">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-full bg-red-100 flex items-center justify-center text-2xl">🇮🇩</div>
                                <div class="text-left">
                                    <h3 class="font-display text-xl font-bold text-forest">Indonesia</h3>
                                    <p class="text-sm text-earth">Abstract guidelines & registration fees for Indonesian participants</p>
                                </div>
                            </div>
                            <svg class="w-6 h-6 text-sage transition-transform duration-300" :class="activePanel === 'indo' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </button>
                    <div x-show="activePanel === 'indo'" x-collapse x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" class="bg-white rounded-xl mt-2 shadow-md overflow-hidden">
                        <div class="p-8 text-center">
                            <div class="w-16 h-16 bg-sage/20 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h4 class="font-display text-xl font-semibold text-forest mb-2">Guidelines Coming Soon</h4>
                            <p class="text-earth mb-6">Specific guidelines and registration fees for Indonesian participants are being prepared. Check back soon!</p>
                            <div class="bg-forest/5 rounded-lg p-4 border border-forest/10 inline-block">
                                <p class="text-sm text-earth">
                                    <strong>Conference Venue:</strong> Universitas Udayana, Bali, Indonesia<br>
                                    <strong>Date:</strong> August 24, 2026
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- International Panel --}}
                <div class="mb-4">
                    <button @click="togglePanel('intl')" class="w-full bg-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 overflow-hidden">
                        <div class="p-6 flex items-center justify-between">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center text-2xl">🌍</div>
                                <div class="text-left">
                                    <h3 class="font-display text-xl font-bold text-forest">International</h3>
                                    <p class="text-sm text-earth">Guidelines for participants from other countries</p>
                                </div>
                            </div>
                            <svg class="w-6 h-6 text-sage transition-transform duration-300" :class="activePanel === 'intl' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </button>
                    <div x-show="activePanel === 'intl'" x-collapse x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" class="bg-white rounded-xl mt-2 shadow-md overflow-hidden">
                        <div class="p-8 text-center">
                            <div class="w-16 h-16 bg-atmosphere/20 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-atmosphere" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h4 class="font-display text-xl font-semibold text-forest mb-2">International Guidelines</h4>
                            <p class="text-earth mb-6">Guidelines for international participants will be available soon. Contact us for specific inquiries.</p>
                            <a href="mailto:{{ $conference['support_email'] ?? 'gets2026@udem.ac.id' }}" class="inline-flex items-center gap-2 px-6 py-3 bg-forest text-white font-display font-semibold rounded-lg hover:bg-forest-700 transition-all duration-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span>Contact Us</span>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- General Note --}}
                <div class="mt-8 text-center">
                    <p class="text-sm text-earth">
                        Don't see your region? <a href="{{ route('conference.contact') }}" class="text-forest font-semibold hover:underline">Contact us</a> for specific inquiries about abstract submission.
                    </p>
                </div>
            </div>
        </section>

        {{-- Submission Process --}}
        <section class="py-16 md:py-20 bg-white">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="font-display text-3xl md:text-4xl text-forest font-bold mb-4">
                        Submission Process
                    </h2>
                    <p class="text-lg text-earth">
                        Follow these steps to submit your abstract for GETS 2026
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    {{-- Step 1 --}}
                    <div class="text-center">
                        <div class="w-16 h-16 bg-forest rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-display font-bold text-white">1</span>
                        </div>
                        <h3 class="font-display text-lg font-semibold text-forest mb-2">Download Template</h3>
                        <p class="text-sm text-earth">Prepare your abstract following GETS 2026 guidelines.</p>
                    </div>

                    {{-- Step 2 --}}
                    <div class="text-center">
                        <div class="w-16 h-16 bg-forest rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-display font-bold text-white">2</span>
                        </div>
                        <h3 class="font-display text-lg font-semibold text-forest mb-2">Submit Abstract</h3>
                        <p class="text-sm text-earth">Send your abstract for committee review.</p>
                    </div>

                    {{-- Step 3 --}}
                    <div class="text-center">
                        <div class="w-16 h-16 bg-forest rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-display font-bold text-white">3</span>
                        </div>
                        <h3 class="font-display text-lg font-semibold text-forest mb-2">Review & Acceptance</h3>
                        <p class="text-sm text-earth">Receive abstract acceptance notification.</p>
                    </div>

                    {{-- Step 4 --}}
                    <div class="text-center">
                        <div class="w-16 h-16 bg-forest rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-display font-bold text-white">4</span>
                        </div>
                        <h3 class="font-display text-lg font-semibold text-forest mb-2">Register as Presenter</h3>
                        <p class="text-sm text-earth">Complete conference registration after acceptance.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- CTA Section --}}
        <section class="py-16 md:py-24 bg-forest">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="font-display text-3xl md:text-4xl text-white font-bold mb-6">
                    Ready to Submit Your Abstract?
                </h2>
                <p class="text-lg text-ivory-200 mb-8">
                    Join researchers from around the world in advancing climate resilience and green transition
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    {{-- Secondary: Download Template --}}
                    <a href="/templates/GETS2026_Abstract_Template.docx" download="GETS2026_Abstract_Template.docx" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-white text-forest font-display font-semibold rounded-full hover:bg-forest/5 transition-all duration-300">
                        <span>Download Abstract Template 📄</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                        </svg>
                    </a>
                    {{-- Primary: Submit Abstract --}}
                    <a href="{{ route('conference.registration') }}" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-sage text-forest font-display font-semibold rounded-full hover:bg-white transition-all duration-300 hover:shadow-lg">
                        <span>Submit Abstract</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                    {{-- Questions --}}
                    <a href="mailto:{{ $conference['support_email'] }}" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-transparent border-2 border-white text-white font-display font-semibold rounded-full hover:bg-white hover:text-forest transition-all duration-300">
                        <span>Questions?</span>
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
