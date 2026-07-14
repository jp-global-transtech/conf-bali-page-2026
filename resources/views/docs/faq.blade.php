@extends('layouts.docs-layout')

@section('title', 'FAQ - GETS 2026')
@php
    $page_title = 'Frequently Asked Questions';
    $seo_description = 'Quick answers to common questions about registration, publication, and payment for GETS 2026';
    $seo_keywords = 'FAQ, registration, publication, payment, GETS 2026, conference, Bali';
    $nav_prev = ['url' => route('docs.payment'), 'title' => 'Payment Information'];
@endphp

@section('content')
<div class="space-y-8" x-data="{ active: null }">
    {{-- Page Header --}}
    <div class="mb-8">
        <h1 class="text-3xl font-display font-bold text-forest mb-4">Frequently Asked Questions (FAQ)</h1>
        <p class="text-lg text-gray-600 leading-relaxed italic">
            Find quick answers to the most common questions regarding registration, paper publication, and technical guidelines for GETS 2026.
        </p>
    </div>

    {{-- Quick Navigation --}}
    <div class="bg-ivory rounded-xl p-6 mb-10 border border-forest/10">
        <h2 class="text-lg font-display font-semibold text-forest mb-4">Categories</h2>
        <div class="grid md:grid-cols-3 gap-3">
            <a href="#registration-attendance" class="flex items-center gap-2 p-3 bg-white rounded-lg hover:bg-forest/5 transition-colors">
                <svg class="w-5 h-5 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                <span class="text-sm font-medium text-gray-700">Registration & Attendance</span>
            </a>
            <a href="#publication" class="flex items-center gap-2 p-3 bg-white rounded-lg hover:bg-forest/5 transition-colors">
                <svg class="w-5 h-5 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                <span class="text-sm font-medium text-gray-700">Publication & Scientific Manuscript</span>
            </a>
            <a href="#payment-policy" class="flex items-center gap-2 p-3 bg-white rounded-lg hover:bg-forest/5 transition-colors">
                <svg class="w-5 h-5 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                </svg>
                <span class="text-sm font-medium text-gray-700">Payment & Financial Policy</span>
            </a>
        </div>
    </div>

    {{-- Category: Registration & Attendance --}}
    <section id="registration-attendance" class="mb-12 scroll-mt-24">
        <h2 class="text-2xl font-display font-semibold text-forest mb-6 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
            Registration & Attendance
        </h2>

        <div class="space-y-3">
            {{-- Q1 --}}
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                <button @click="active = active === 'q1' ? null : 'q1'"
                        class="w-full flex items-center justify-between p-5 text-left hover:bg-forest/5 transition-colors"
                        :class="{ 'bg-forest/5': active === 'q1' }">
                    <span class="font-semibold text-slate-800 text-sm pr-4">Are Bachelor (S1) and Master (S2) students allowed to participate in this conference?</span>
                    <svg class="w-4 h-4 text-slate-400 flex-shrink-0 duration-300 transition-transform"
                         :class="{ 'rotate-180': active === 'q1' }"
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="active === 'q1'"
                     x-collapse
                     x-cloak>
                    <div class="px-5 pb-5 text-slate-600 text-sm leading-relaxed space-y-2">
                        <p><strong>Yes, absolutely.</strong> We warmly welcome undergraduate and postgraduate students to participate. However, please note that the special <strong>Student Participant rate (IDR 150,000)</strong> is <strong>strictly restricted to the Virtual/Online tier</strong> and applies only to <em>Listener (Non-Presenter)</em> status. You must upload a valid Student ID (KTM) during registration.</p>
                        <p>Students who wish to submit a paper and act as a <em>Presenter</em> must register under the regular <strong>Indonesia Participant (Online/On-site)</strong> tier.</p>
                    </div>
                </div>
            </div>

            {{-- Q2 --}}
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                <button @click="active = active === 'q2' ? null : 'q2'"
                        class="w-full flex items-center justify-between p-5 text-left hover:bg-forest/5 transition-colors"
                        :class="{ 'bg-forest/5': active === 'q2' }">
                    <span class="font-semibold text-slate-800 text-sm pr-4">I am a participant from Indonesia. Can I choose the In-Person (On-site) attendance option in Bali?</span>
                    <svg class="w-4 h-4 text-slate-400 flex-shrink-0 duration-300 transition-transform"
                         :class="{ 'rotate-180': active === 'q2' }"
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="active === 'q2'"
                     x-collapse
                     x-cloak>
                    <div class="px-5 pb-5 text-slate-600 text-sm leading-relaxed space-y-2">
                        <p>The primary track for Indonesian participants is directed <em>Online/Virtual</em> for time efficiency and to maximize international networking space at the physical venue.</p>
                        <p>However, we do open a limited exception for domestic participants who wish to attend physically at Universitas Udayana, Bali. <strong>On-site seats for domestic participants are strictly limited.</strong> Once the maximum database quota is reached, the system will automatically lock this option and direct you to the <em>Online</em> track.</p>
                    </div>
                </div>
            </div>

            {{-- Q3 --}}
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                <button @click="active = active === 'q3' ? null : 'q3'"
                        class="w-full flex items-center justify-between p-5 text-left hover:bg-forest/5 transition-colors"
                        :class="{ 'bg-forest/5': active === 'q3' }">
                    <span class="font-semibold text-slate-800 text-sm pr-4">How do I register for the Special Program: Learning Visit to su-re.co on August 25, 2026?</span>
                    <svg class="w-4 h-4 text-slate-400 flex-shrink-0 duration-300 transition-transform"
                         :class="{ 'rotate-180': active === 'q3' }"
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="active === 'q3'"
                     x-collapse
                     x-cloak>
                    <div class="px-5 pb-5 text-slate-600 text-sm leading-relaxed">
                        <p>You can opt-in to this field study program directly on the online registration form when choosing the <em>On-site</em> attendance type. This program is <strong>strictly limited to the first 50 participants</strong> on a <em>first-come, first-served</em> basis. Once the 50-slot limit is reached, the backend system will automatically disable this option.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Category: Publication & Scientific Manuscript --}}
    <section id="publication" class="mb-12 scroll-mt-24">
        <h2 class="text-2xl font-display font-semibold text-forest mb-6 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
            Publication & Scientific Manuscript
        </h2>

        <div class="space-y-3">
            {{-- Q4 --}}
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                <button @click="active = active === 'q4' ? null : 'q4'"
                        class="w-full flex items-center justify-between p-5 text-left hover:bg-forest/5 transition-colors"
                        :class="{ 'bg-forest/5': active === 'q4' }">
                    <span class="font-semibold text-slate-800 text-sm pr-4">Is publication in The NEHU Journal or IJAMR 100% guaranteed if I pay the Presenter registration fee?</span>
                    <svg class="w-4 h-4 text-slate-400 flex-shrink-0 duration-300 transition-transform"
                         :class="{ 'rotate-180': active === 'q4' }"
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="active === 'q4'"
                     x-collapse
                     x-cloak>
                    <div class="px-5 pb-5 text-slate-600 text-sm leading-relaxed space-y-2">
                        <p><strong>No, absolute acceptance is not guaranteed.</strong> All submissions through the <em>Presenter</em> track will undergo an initial screening by the GETS 2026 Scientific Committee, and selected high-quality papers will be recommended to our partner journals.</p>
                        <p>However, final acceptance and publication decisions are <strong>strictly subject to the standard double-blind peer-review process and final approval by the respective journal's editorial board (subject to review from the journal side).</strong></p>
                        <p>Papers that do not pass the journal review will still be published in the official <strong>GETS 2026 Conference Book of Abstracts</strong>.</p>
                    </div>
                </div>
            </div>

            {{-- Q5 --}}
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                <button @click="active = active === 'q5' ? null : 'q5'"
                        class="w-full flex items-center justify-between p-5 text-left hover:bg-forest/5 transition-colors"
                        :class="{ 'bg-forest/5': active === 'q5' }">
                    <span class="font-semibold text-slate-800 text-sm pr-4">If a paper has three co-authors, do all three authors need to pay the registration fee?</span>
                    <svg class="w-4 h-4 text-slate-400 flex-shrink-0 duration-300 transition-transform"
                         :class="{ 'rotate-180': active === 'q5' }"
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="active === 'q5'"
                     x-collapse
                     x-cloak>
                    <div class="px-5 pb-5 text-slate-600 text-sm leading-relaxed">
                        <p><strong>Yes, registration is mandatory for all individuals.</strong> If your paper has multiple authors and all of them wish to attend the summit or receive official certificates, <strong>each author must register and complete the payment separately</strong> through the website system. However, for the presentation session itself, at least one representative author must be physically present to deliver the talk.</p>
                    </div>
                </div>
            </div>

            {{-- Q6 --}}
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                <button @click="active = active === 'q6' ? null : 'q6'"
                        class="w-full flex items-center justify-between p-5 text-left hover:bg-forest/5 transition-colors"
                        :class="{ 'bg-forest/5': active === 'q6' }">
                    <span class="font-semibold text-slate-800 text-sm pr-4">Can I change the paper title or the author names after the final submission deadline has passed?</span>
                    <svg class="w-4 h-4 text-slate-400 flex-shrink-0 duration-300 transition-transform"
                         :class="{ 'rotate-180': active === 'q6' }"
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="active === 'q6'"
                     x-collapse
                     x-cloak>
                    <div class="px-5 pb-5 text-slate-600 text-sm leading-relaxed">
                        <p><strong>No, it is strictly prohibited.</strong> According to academic guidelines, changes in the paper title, authorship list, or contents are not possible after the submission deadline has passed to ensure a smooth and fair peer-review process.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Category: Payment & Financial Policy --}}
    <section id="payment-policy" class="mb-12 scroll-mt-24">
        <h2 class="text-2xl font-display font-semibold text-forest mb-6 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
            </svg>
            Payment &amp; Financial Policy
        </h2>

        <div class="space-y-3">
            {{-- Q7 --}}
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                <button @click="active = active === 'q7' ? null : 'q7'"
                        class="w-full flex items-center justify-between p-5 text-left hover:bg-forest/5 transition-colors"
                        :class="{ 'bg-forest/5': active === 'q7' }">
                    <span class="font-semibold text-slate-800 text-sm pr-4">If my abstract or full paper is rejected by the committee or the journal reviewers, can I request a refund?</span>
                    <svg class="w-4 h-4 text-slate-400 flex-shrink-0 duration-300 transition-transform"
                         :class="{ 'rotate-180': active === 'q7' }"
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="active === 'q7'"
                     x-collapse
                     x-cloak>
                    <div class="px-5 pb-5 text-slate-600 text-sm leading-relaxed">
                        <p><strong>No, all payments are non-refundable.</strong> All registration fees transacted through the landing page website are <strong>final</strong>. The fees are immediately allocated to fund administrative operations, virtual hybrid platforms, and the initial peer-review handling process managed by the scientific committee.</p>
                    </div>
                </div>
            </div>

            {{-- Q8 --}}
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                <button @click="active = active === 'q8' ? null : 'q8'"
                        class="w-full flex items-center justify-between p-5 text-left hover:bg-forest/5 transition-colors"
                        :class="{ 'bg-forest/5': active === 'q8' }">
                    <span class="font-semibold text-slate-800 text-sm pr-4">What are the registration fees for delegates applying from India?</span>
                    <svg class="w-4 h-4 text-slate-400 flex-shrink-0 duration-300 transition-transform"
                         :class="{ 'rotate-180': active === 'q8' }"
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="active === 'q8'"
                     x-collapse
                     x-cloak>
                    <div class="px-5 pb-5 text-slate-600 text-sm leading-relaxed">
                        <p>In accordance with our bilateral institutional agreements, Indian delegates have a fixed pricing structure:</p>
                        <ul class="list-disc list-inside mt-2 space-y-1">
                            <li><strong>INR 10,000/-</strong> for <em>Paper Presenting Authors/Delegates</em> (Presenter)</li>
                            <li><strong>INR 5,000/-</strong> for <em>Non-Presenting Participants</em> (Listener)</li>
                        </ul>
                        <p class="mt-2">Comprehensive guidelines and direct registration links for Indian delegates can be accessed via the dedicated PDF download hyperlink on our main Guidelines page.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Contact CTA --}}
    <section class="mt-16">
        <div class="bg-gradient-to-r from-forest to-sage rounded-xl p-8 text-center">
            <h3 class="text-2xl font-display font-bold text-white mb-3">Still Have Questions?</h3>
            <p class="text-white/90 mb-6">Our support team is here to help with any inquiries.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('conference.contact') }}" class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-white text-forest font-display font-semibold rounded-full hover:bg-ivory transition-colors">
                    <span>Contact Support</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </a>
                <a href="{{ route('docs.registration') }}" class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-forest/20 text-white font-display font-semibold rounded-full hover:bg-forest/30 transition-colors border border-white/30">
                    <span>Registration Guide</span>
                </a>
            </div>
        </div>
    </section>
</div>
@endsection
