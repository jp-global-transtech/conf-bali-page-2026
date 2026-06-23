@extends('layouts.conference')

@section('title', 'Call for Abstract - GETS 2026')
@section('meta-description', 'Submit your abstract for the Global Environment & Transition Summit 2026 (GETS 2026). 11 interdisciplinary sub-themes on climate resilience and green transition.')

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
                    Call for Abstract / Call for Abstracts
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
                            <p class="text-earth leading-relaxed mb-4">
                                Selected papers will be considered for publication in:
                            </p>
                            <ul class="space-y-2 text-earth">
                                <li class="flex items-start gap-2">
                                    <svg class="w-5 h-5 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Official Conference Proceedings (ISSN registered)</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-5 h-5 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Edited Volume with Springer/Elsevier (Under consideration)</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-5 h-5 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Special Issue in Partner Journals</span>
                                </li>
                            </ul>
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
                        8 Interdisciplinary Sub-themes
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

        {{-- Indian Participants Guidelines --}}
        <section class="py-16 md:py-24 bg-ivory">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-3xl mx-auto text-center mb-12">
                    <h2 class="font-display text-3xl md:text-4xl text-forest font-bold mb-4">
                        Guidelines for Indian Participants
                    </h2>
                    <p class="text-lg text-earth">
                        Download the complete submission guidelines for Indian participants
                    </p>
                </div>

                <div class="bg-white rounded-2xl shadow-lg p-8 md:p-12">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 w-12 h-12 bg-sage/20 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-display text-xl text-forest font-semibold mb-3">Abstract Submission Guidelines for Indian Participants</h3>
                            <p class="text-earth leading-relaxed mb-6">
                                Download the complete guidelines including submission requirements, format specifications, important dates, and registration fees.
                            </p>
                            <div class="flex flex-col sm:flex-row gap-4">
                                <a href="/docs/GETS_2026_Indian_Guidelines.pdf" target="_blank" class="inline-flex items-center gap-2 px-6 py-3 bg-forest text-white font-display font-semibold rounded-lg hover:bg-forest-700 transition-all duration-300">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                    <span>Download Guidelines PDF</span>
                                </a>
                                <a href="mailto:secretarynema2016@gmail.com" class="inline-flex items-center gap-2 px-6 py-3 bg-white text-forest font-display font-semibold rounded-lg border-2 border-forest hover:bg-forest/5 transition-all duration-300">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    <span>Email Submission</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- Indian Registration Fees --}}
                    <div class="mt-8 pt-8 border-t border-forest/10">
                        <h4 class="font-display text-lg text-forest font-semibold mb-4">Registration Fees for Indian Nationals</h4>
                        <div class="grid md:grid-cols-2 gap-4">
                            <div class="bg-forest/5 rounded-lg p-4 border border-forest/10">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <h5 class="font-semibold text-forest">Paper Presenting Authors/Delegates</h5>
                                        <p class="text-sm text-earth">Full conference access with presentation</p>
                                    </div>
                                    <span class="text-2xl font-display font-bold text-sage">INR 10,000/-</span>
                                </div>
                            </div>
                            <div class="bg-sage/10 rounded-lg p-4 border border-sage/20">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <h5 class="font-semibold text-forest">Non-Presenting Participant</h5>
                                        <p class="text-sm text-earth">Attendance only, no presentation</p>
                                    </div>
                                    <span class="text-2xl font-display font-bold text-sage">INR 5,000/-</span>
                                </div>
                            </div>
                        </div>
                        <p class="text-sm text-earth mt-4">
                            <strong>Included:</strong> Refreshment and lunch (conference day), conference kits, and certificate. Registration is compulsory for all participants. At least one participant must be physically present for presentation.
                        </p>
                    </div>
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
