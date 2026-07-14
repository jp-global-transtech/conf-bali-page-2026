@extends('layouts.docs-layout')

@section('title', 'Conference Guidelines - GETS 2026')
@php
    $page_title = 'Conference Guidelines';
    $seo_description = 'Complete guidelines for the Global Environment & Transition Summit 2026 (GETS 2026)';
    $seo_keywords = 'conference guidelines, participation guidelines, GETS 2026 conference, registration fees, abstract submission, presentation guidelines';
    $nav_prev = ['url' => route('docs.faq'), 'title' => 'FAQ'];
    $nav_next = ['url' => route('docs.abstract'), 'title' => 'Abstract Submission'];
@endphp

@section('content')
<div class="space-y-8">
    {{-- Page Header --}}
    <div class="mb-8">
        <h1 class="text-3xl font-display font-bold text-forest mb-4">Conference Guidelines</h1>
        <p class="text-lg text-gray-600 leading-relaxed">
            Essential information and guidelines for participants, presenters, and attendees of the Global Environment & Transition Summit 2026 (GETS 2026).
        </p>
    </div>

    {{-- Table of Contents --}}
    <div class="bg-ivory rounded-xl p-6 mb-10 border border-forest/10">
        <h2 class="text-lg font-display font-semibold text-forest mb-4">On This Page</h2>
        <ul class="space-y-2">
            <li><a href="#overview" class="text-earth hover:text-forest flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span>Conference Overview</a></li>
            <li><a href="#sub-themes" class="text-earth hover:text-forest flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span>Research Sub-Themes</a></li>
            <li><a href="#important-dates" class="text-earth hover:text-forest flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span>Important Dates</a></li>
            <li><a href="#registration-fees" class="text-earth hover:text-forest flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span>Registration Categories & Fees</a></li>
            <li><a href="#submission" class="text-earth hover:text-forest flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span>Submission & Publication Guidelines</a></li>
            <li><a href="#presentation" class="text-earth hover:text-forest flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span>Presentation Guidelines</a></li>
            <li><a href="#attendance" class="text-earth hover:text-forest flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span>Attendance Policy & Special Program</a></li>
            <li><a href="#code-of-conduct" class="text-earth hover:text-forest flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span>Code of Conduct</a></li>
        </ul>
    </div>

    {{-- Conference Overview --}}
    <section id="overview" class="mb-12 scroll-mt-24">
        <h2 class="text-2xl font-display font-semibold text-forest mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            Conference Overview
        </h2>
        <div class="bg-white rounded-xl p-6 border border-gray-200">
            <p class="text-gray-700 mb-4">The <strong>Global Environment & Transition Summit 2026 (GETS 2026)</strong> brings together scholars, policymakers, industry leaders, and environmental experts to address pressing climate challenges through interdisciplinary collaboration.</p>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="bg-forest/5 rounded-lg p-4">
                    <p class="text-sm text-gray-500 mb-1">Conference Day</p>
                    <p class="font-semibold text-forest">August 24, 2026</p>
                </div>
                <div class="bg-forest/5 rounded-lg p-4">
                    <p class="text-sm text-gray-500 mb-1">Special Program Visit</p>
                    <p class="font-semibold text-forest">August 25, 2026</p>
                </div>
                <div class="bg-sage/5 rounded-lg p-4">
                    <p class="text-sm text-gray-500 mb-1">Location</p>
                    <p class="font-semibold text-forest">Universitas Udayana, Jimbaran, Bali</p>
                </div>
                <div class="bg-sage/5 rounded-lg p-4">
                    <p class="text-sm text-gray-500 mb-1">Format</p>
                    <p class="font-semibold text-forest">On-site & Virtual (Hybrid)</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Research Sub-Themes --}}
    <section id="sub-themes" class="mb-12 scroll-mt-24">
        <h2 class="text-2xl font-display font-semibold text-forest mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
            </svg>
            Research Sub-Themes
        </h2>
        <p class="text-gray-700 mb-4">Papers and abstracts submitted to GETS 2026 must align with one of the following interdisciplinary sub-themes:</p>
        <div class="grid md:grid-cols-2 gap-3">
            <div class="bg-white rounded-xl p-4 border border-gray-200 flex items-start gap-3">
                <svg class="w-5 h-5 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="text-gray-700">Green marketing and conscious consumption</span>
            </div>
            <div class="bg-white rounded-xl p-4 border border-gray-200 flex items-start gap-3">
                <svg class="w-5 h-5 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="text-gray-700">Green Human Resources Management (HRM) Practices</span>
            </div>
            <div class="bg-white rounded-xl p-4 border border-gray-200 flex items-start gap-3">
                <svg class="w-5 h-5 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="text-gray-700">Corporate Social Responsibility</span>
            </div>
            <div class="bg-white rounded-xl p-4 border border-gray-200 flex items-start gap-3">
                <svg class="w-5 h-5 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="text-gray-700">Environmental, Social, and Governance (ESG) Management</span>
            </div>
            <div class="bg-white rounded-xl p-4 border border-gray-200 flex items-start gap-3">
                <svg class="w-5 h-5 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="text-gray-700">Artificial Intelligence and Sustainable Business models</span>
            </div>
            <div class="bg-white rounded-xl p-4 border border-gray-200 flex items-start gap-3">
                <svg class="w-5 h-5 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="text-gray-700">Circular economy and waste reduction management</span>
            </div>
            <div class="bg-white rounded-xl p-4 border border-gray-200 flex items-start gap-3">
                <svg class="w-5 h-5 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="text-gray-700">Sustainable Strategic management and business policy</span>
            </div>
            <div class="bg-white rounded-xl p-4 border border-gray-200 flex items-start gap-3">
                <svg class="w-5 h-5 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="text-gray-700">Entrepreneurship and startups for sustainable development</span>
            </div>
        </div>
    </section>

    {{-- Important Dates --}}
    <section id="important-dates" class="mb-12 scroll-mt-24">
        <h2 class="text-2xl font-display font-semibold text-forest mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            Important Dates
        </h2>

        <div class="grid md:grid-cols-2 gap-6">
            {{-- Indian Delegates Timeline --}}
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <div class="flex items-center gap-2 mb-4">
                    <span class="w-3 h-3 rounded-full bg-sage"></span>
                    <h3 class="font-semibold text-forest">Indian Delegates Timeline</h3>
                </div>
                <div class="space-y-4">
                    <div class="flex items-start gap-3">
                        <div class="w-10 h-10 rounded-full bg-sage/10 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-semibold text-forest">July 15, 2026</p>
                            <p class="text-sm text-gray-600">Last Abstract Submission Deadline for Indian Delegates</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-10 h-10 rounded-full bg-sage/10 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-semibold text-forest">July 25, 2026</p>
                            <p class="text-sm text-gray-600">Last Registration & Payment Deadline for Indian Delegates</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Indonesian & General International Timeline --}}
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <div class="flex items-center gap-2 mb-4">
                    <span class="w-3 h-3 rounded-full bg-atmosphere"></span>
                    <h3 class="font-semibold text-forest">Indonesian & General International Timeline</h3>
                </div>
                <div class="space-y-4">
                    <div class="flex items-start gap-3">
                        <div class="w-10 h-10 rounded-full bg-atmosphere/10 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-atmosphere" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-semibold text-forest">August 3, 2026</p>
                            <p class="text-sm text-gray-600">Final Deadline to email Presentation Slides / Poster Files to info@jptrantech.org</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-10 h-10 rounded-full bg-atmosphere/10 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-atmosphere" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-semibold text-forest">August 10, 2026</p>
                            <p class="text-sm text-gray-600">Last Abstract Submission Deadline for Indonesia & General International participants</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-10 h-10 rounded-full bg-atmosphere/10 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-atmosphere" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-semibold text-forest">August 23, 2026</p>
                            <p class="text-sm text-gray-600">Last Registration & Payment Deadline for Indonesia & General International participants</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Summit Days --}}
        <div class="bg-white rounded-xl p-6 border border-gray-200 mt-6">
            <div class="flex items-center gap-2 mb-4">
                <span class="w-3 h-3 rounded-full bg-forest"></span>
                <h3 class="font-semibold text-forest">Summit Days</h3>
            </div>
            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-gradient-to-br from-forest/5 to-sage/5 rounded-lg p-5 border border-forest/10">
                    <div class="flex items-center gap-3 mb-2">
                        <svg class="w-5 h-5 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <p class="font-semibold text-forest">August 24, 2026</p>
                    </div>
                    <p class="text-sm text-gray-600">Conference Day – Summit Plenary & Parallel Sessions at Universitas Udayana (08:00 - 17:10 WITA).</p>
                </div>
                <div class="bg-gradient-to-br from-atmosphere/5 to-sage/5 rounded-lg p-5 border border-atmosphere/10">
                    <div class="flex items-center gap-3 mb-2">
                        <svg class="w-5 h-5 text-atmosphere" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <p class="font-semibold text-forest">August 25, 2026</p>
                    </div>
                    <p class="text-sm text-gray-600">Special Program – Learning Visit to su-re.co.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Registration Categories & Fees --}}
    <section id="registration-fees" class="mb-12 scroll-mt-24">
        <h2 class="text-2xl font-display font-semibold text-forest mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            Registration Categories & Fees
        </h2>

        <div class="bg-amber-50 border border-amber-200 rounded-xl p-4 mb-6 flex items-start gap-3">
            <svg class="w-5 h-5 text-amber-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4.5c-.77-.833-2.694-.833-3.464 0L3.34 16.5c-.77.833.192 2.5 1.732 2.5z" />
            </svg>
            <p class="text-sm text-amber-800">Registration is compulsory for all participants. If a paper has multiple authors, each author must register and pay the fee separately.</p>
        </div>

        <div class="overflow-x-auto rounded-xl border border-gray-200">
            <table class="w-full text-sm">
                <thead>
                    <tr class="bg-forest text-white">
                        <th class="text-left py-3 px-4 font-semibold">Category</th>
                        <th class="text-left py-3 px-4 font-semibold">Fee</th>
                        <th class="text-left py-3 px-4 font-semibold hidden md:table-cell">Facilities</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr class="hover:bg-forest/5 transition-colors">
                        <td class="py-3 px-4 font-medium text-gray-800">International Participant (On-site)</td>
                        <td class="py-3 px-4 font-semibold text-forest whitespace-nowrap">USD 110</td>
                        <td class="py-3 px-4 text-gray-600 text-xs hidden md:table-cell">Physical venue access, refreshments, lunch, conference kit, e-certificate, journal review track.</td>
                    </tr>
                    <tr class="hover:bg-forest/5 transition-colors">
                        <td class="py-3 px-4 font-medium text-gray-800">International Participant (Online)</td>
                        <td class="py-3 px-4 font-semibold text-forest whitespace-nowrap">USD 50</td>
                        <td class="py-3 px-4 text-gray-600 text-xs hidden md:table-cell">Full virtual access to the conference platform, journal review track.</td>
                    </tr>
                    <tr class="hover:bg-forest/5 transition-colors">
                        <td class="py-3 px-4 font-medium text-gray-800">Indonesia Participant (Online)</td>
                        <td class="py-3 px-4 font-semibold text-forest whitespace-nowrap">IDR 250,000</td>
                        <td class="py-3 px-4 text-gray-600 text-xs hidden md:table-cell">Full virtual access, tailored for domestic researchers and practitioners.</td>
                    </tr>
                    <tr class="hover:bg-forest/5 transition-colors">
                        <td class="py-3 px-4 font-medium text-gray-800">Indonesia Participant (On-site / Limited)</td>
                        <td class="py-3 px-4 font-semibold text-forest whitespace-nowrap">IDR 750,000</td>
                        <td class="py-3 px-4 text-gray-600 text-xs hidden md:table-cell">In-person access in Bali, catering, conference kit. Strictly limited quota.</td>
                    </tr>
                    <tr class="hover:bg-forest/5 transition-colors">
                        <td class="py-3 px-4 font-medium text-gray-800">Student Participant (Online Only)</td>
                        <td class="py-3 px-4 font-semibold text-forest whitespace-nowrap">IDR 150,000</td>
                        <td class="py-3 px-4 text-gray-600 text-xs hidden md:table-cell">Virtual Listener (Non-Presenter) status only. Valid Student ID (KTM) required upon upload.</td>
                    </tr>
                    <tr class="hover:bg-forest/5 transition-colors">
                        <td class="py-3 px-4 font-medium text-gray-800">Indian Delegates (On-site Presenter)</td>
                        <td class="py-3 px-4 font-semibold text-forest whitespace-nowrap">INR 10,000/-</td>
                        <td class="py-3 px-4 text-gray-600 text-xs hidden md:table-cell">Refreshments, lunch, conference kit, certificate, journal review track.</td>
                    </tr>
                    <tr class="hover:bg-forest/5 transition-colors">
                        <td class="py-3 px-4 font-medium text-gray-800">Indian Delegates (On-site Non-Presenter)</td>
                        <td class="py-3 px-4 font-semibold text-forest whitespace-nowrap">INR 5,000/-</td>
                        <td class="py-3 px-4 text-gray-600 text-xs hidden md:table-cell">Refreshments, lunch, conference kit, attendee certificate.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- Mobile-friendly facilities accordion --}}
        <div class="md:hidden mt-3 space-y-2">
            <p class="text-xs font-medium text-gray-500 uppercase tracking-wider">Facilities Details</p>
            <div class="bg-ivory rounded-lg p-3 text-xs text-gray-600 space-y-2">
                <p><strong>International (On-site):</strong> Physical venue access, refreshments, lunch, conference kit, e-certificate, journal review track.</p>
                <p><strong>International (Online):</strong> Full virtual access to the conference platform, journal review track.</p>
                <p><strong>Indonesia (Online):</strong> Full virtual access, tailored for domestic researchers and practitioners.</p>
                <p><strong>Indonesia (On-site / Limited):</strong> In-person access in Bali, catering, conference kit. Strictly limited quota.</p>
                <p><strong>Student (Online Only):</strong> Virtual Listener (Non-Presenter) status only. Valid Student ID (KTM) required upon upload.</p>
                <p><strong>Indian (On-site Presenter):</strong> Refreshments, lunch, conference kit, certificate, journal review track.</p>
                <p><strong>Indian (On-site Non-Presenter):</strong> Refreshments, lunch, conference kit, attendee certificate.</p>
            </div>
        </div>
    </section>

    {{-- Submission & Publication Guidelines --}}
    <section id="submission" class="mb-12 scroll-mt-24">
        <h2 class="text-2xl font-display font-semibold text-forest mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
            Submission & Publication Guidelines
        </h2>

        {{-- General Submission Policy --}}
        <div class="bg-white rounded-xl p-6 border border-gray-200 mb-6">
            <h3 class="font-semibold text-forest mb-3">General Submission Policy</h3>
            <ul class="space-y-2">
                <li class="flex items-start gap-2 text-sm text-gray-700">
                    <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>Submitted papers must not have been previously presented, published, or accepted for publication anywhere.</span>
                </li>
                <li class="flex items-start gap-2 text-sm text-gray-700">
                    <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>Submission implies that at least one author must register and physically present the paper at the conference.</span>
                </li>
                <li class="flex items-start gap-2 text-sm text-gray-700">
                    <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>Changes in title, authorship, and content are strictly prohibited after the deadline.</span>
                </li>
                <li class="flex items-start gap-2 text-sm text-gray-700">
                    <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>Cover page must include: Full name, current affiliation, and contact details. Clearly mark the corresponding author.</span>
                </li>
            </ul>
        </div>

        {{-- Technical Manuscript Requirements --}}
        <div class="bg-white rounded-xl p-6 border border-gray-200 mb-6">
            <h3 class="font-semibold text-forest mb-3">Technical Manuscript Requirements</h3>
            <ul class="space-y-2">
                <li class="flex items-start gap-2 text-sm text-gray-700">
                    <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                    </svg>
                    <span><strong>Length:</strong> Full-length papers should be around 5,000–7,000 words (all-inclusive).</span>
                </li>
                <li class="flex items-start gap-2 text-sm text-gray-700">
                    <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                    </svg>
                    <span><strong>Format:</strong> Must be a single MS Word document (.doc or .docx).</span>
                </li>
                <li class="flex items-start gap-2 text-sm text-gray-700">
                    <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                    </svg>
                    <span><strong>Typography:</strong> Times New Roman. Title: 16 pt. Body Text: 12 pt. Margins: 1" on all sides. Alignment: Justified.</span>
                </li>
                <li class="flex items-start gap-2 text-sm text-gray-700">
                    <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                    </svg>
                    <span><strong>References:</strong> Must adhere strictly to APA (American Psychological Association) guidelines.</span>
                </li>
            </ul>
        </div>

        {{-- Special Instructions for Indian Participants --}}
        <div class="bg-sky-50 border border-sky-200 rounded-xl p-5 mb-6">
            <div class="flex items-start gap-3">
                <svg class="w-5 h-5 text-sky-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <div>
                    <h3 class="font-semibold text-sky-800 mb-1">Special Instructions for Indian Participants</h3>
                    <p class="text-sm text-sky-700 mb-3">Indian nationals can submit their papers directly as an email attachment to: <a href="mailto:secretarynema2016@gmail.com" class="font-medium underline">secretarynema2016@gmail.com</a>. Detailed registration procedures will be provided upon paper acceptance.</p>
                    <a href="/docs/GETS_2026_Indian_Guidelines.pdf" target="_blank" class="inline-flex items-center gap-2 px-5 py-2.5 bg-forest text-white text-sm font-semibold rounded-full hover:bg-sage transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <span>Download PDF: Abstract Submission Guidelines for Indian Participants</span>
                    </a>
                </div>
            </div>
        </div>

        {{-- Publication Opportunity --}}
        <div class="bg-white rounded-xl p-6 border border-gray-200">
            <h3 class="font-semibold text-forest mb-3">Publication Opportunity</h3>
            <p class="text-sm text-gray-700 mb-4">Accepted abstracts will be compiled in the official Conference Book of Abstracts. Selected high-quality papers will be recommended for publication in official peer-reviewed journal partners:</p>
            <div class="grid md:grid-cols-2 gap-4 mb-4">
                <div class="bg-forest/5 rounded-lg p-4 border border-forest/10">
                    <p class="font-semibold text-forest text-sm">The NEHU Journal</p>
                    <p class="text-xs text-gray-500">ISSN: 0972-8406</p>
                </div>
                <div class="bg-forest/5 rounded-lg p-4 border border-forest/10">
                    <p class="font-semibold text-forest text-sm">International Journal of Applied Management Research (IJAMR)</p>
                    <p class="text-xs text-gray-500">ISSN: 2347-2839</p>
                </div>
            </div>
            <div class="bg-red-50 border border-red-200 rounded-lg p-4 flex items-start gap-3">
                <svg class="w-5 h-5 text-red-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4.5c-.77-.833-2.694-.833-3.464 0L3.34 16.5c-.77.833.192 2.5 1.732 2.5z" />
                </svg>
                <p class="text-xs text-red-700">Publication is strictly subject to the standard double-blind peer-review process and approval by the journal's editorial board. All fees paid are non-refundable.</p>
            </div>
        </div>
    </section>

    {{-- Presentation Guidelines --}}
    <section id="presentation" class="mb-12 scroll-mt-24">
        <h2 class="text-2xl font-display font-semibold text-forest mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
            </svg>
            Presentation Guidelines
        </h2>

        {{-- General Instructions --}}
        <div class="bg-ivory rounded-xl p-4 mb-6 border border-gray-200 flex items-start gap-3">
            <svg class="w-5 h-5 text-forest flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <div>
                <p class="text-sm font-medium text-forest mb-1">General Instructions</p>
                <p class="text-sm text-gray-600">All presenters must register and check in at the registration desk upon arrival. Arrive at your assigned session room at least <strong>15 minutes</strong> prior to meet the session chair and verify your setup.</p>
            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-6 mb-6">
            {{-- Oral Presentation --}}
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <h3 class="font-semibold text-forest mb-3 flex items-center gap-2">
                    <svg class="w-5 h-5 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                    </svg>
                    Oral Presentation
                </h3>
                <div class="space-y-3 text-sm text-gray-700">
                    <div>
                        <p class="font-medium text-forest text-xs uppercase tracking-wider mb-1">Duration</p>
                        <ul class="space-y-1">
                            <li class="flex items-start gap-2">
                                <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>Plenary / Invited Talks: <strong>30 mins</strong> (25 mins talk + 5 mins Q&A)</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>Contributed Talks: <strong>15 mins</strong> (12 mins talk + 3 mins Q&A)</span>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <p class="font-medium text-forest text-xs uppercase tracking-wider mb-1">Format</p>
                        <ul class="space-y-1">
                            <li class="flex items-start gap-2">
                                <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>PowerPoint (PPT, PPTX) or PDF in widescreen <strong>16:9</strong> aspect ratio</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>Use high-contrast colors and clear fonts</span>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <p class="font-medium text-forest text-xs uppercase tracking-wider mb-1">Submission</p>
                        <ul class="space-y-1">
                            <li class="flex items-start gap-2">
                                <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span>Email slides to <a href="mailto:info@jptranstech.org" class="text-forest font-medium">info@jptranstech.org</a> no later than <strong>August 3, 2026</strong></span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5.133 7m5 4v6m4-6v6M9 7V4a1 1 0 011-1h4a1 1 0 011 1v3M4 7h16" />
                                </svg>
                                <span>Bring a backup on a USB flash drive</span>
                            </li>
                        </ul>
                    </div>
                    <div class="bg-forest/5 rounded-lg p-3">
                        <p class="font-medium text-forest text-xs uppercase tracking-wider mb-1">Equipment</p>
                        <p class="text-xs text-gray-600">Session rooms provide Windows PC, projector, laser pointer, and mic. Personal laptops are discouraged.</p>
                    </div>
                </div>
            </div>

            {{-- Poster Presentation --}}
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <h3 class="font-semibold text-forest mb-3 flex items-center gap-2">
                    <svg class="w-5 h-5 text-atmosphere" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    Poster Presentation (Digital Display)
                </h3>
                <div class="space-y-3 text-sm text-gray-700">
                    <div>
                        <p class="font-medium text-forest text-xs uppercase tracking-wider mb-1">Format</p>
                        <ul class="space-y-1">
                            <li class="flex items-start gap-2">
                                <svg class="w-4 h-4 text-atmosphere flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>Landscape orientation (<strong>16:9</strong> ratio), max <strong>3 pages</strong> in PDF or PPT</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="w-4 h-4 text-atmosphere flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>Poster sessions will be digitally displayed on monitors</span>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <p class="font-medium text-forest text-xs uppercase tracking-wider mb-1">Content Requirements</p>
                        <ul class="space-y-1">
                            <li class="flex items-start gap-2">
                                <svg class="w-4 h-4 text-atmosphere flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>Include: Title, Authors, Affiliation, Introduction, Methods, Results, Conclusion, and References</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="w-4 h-4 text-atmosphere flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>The official conference logo must be included</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="w-4 h-4 text-atmosphere flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>Minimum <strong>24 pt</strong> font size for legibility from 1-2 meters</span>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <p class="font-medium text-forest text-xs uppercase tracking-wider mb-1">Submission</p>
                        <ul class="space-y-1">
                            <li class="flex items-start gap-2">
                                <svg class="w-4 h-4 text-atmosphere flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span>Email files to <a href="mailto:info@jptranstech.org" class="text-forest font-medium">info@jptranstech.org</a> no later than <strong>August 3, 2026</strong></span>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-3">
                        <a href="#" class="inline-flex items-center gap-1.5 px-3 py-1.5 border border-forest text-forest text-xs font-medium rounded-lg hover:bg-forest hover:text-white transition-colors">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                            </svg>
                            Download Official Conference Logo
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Attendance Policy & Special Program --}}
    <section id="attendance" class="mb-12 scroll-mt-24">
        <h2 class="text-2xl font-display font-semibold text-forest mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            Attendance Policy & Special Program
        </h2>

        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <div class="flex items-center gap-2 mb-3">
                    <svg class="w-5 h-5 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                    <h3 class="font-semibold text-forest">General Attendance Policy</h3>
                </div>
                <p class="text-sm text-gray-700 mb-3">Active attendance on <strong>August 24, 2026</strong> is expected. Digital certificates are issued via the web backend post-feedback submission.</p>
                <div class="bg-forest/5 rounded-lg p-3">
                    <p class="text-xs text-gray-600"><strong class="text-forest">Certificate:</strong> E-certificates will be available for download after completing the feedback form.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <div class="flex items-center gap-2 mb-3">
                    <svg class="w-5 h-5 text-atmosphere" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <h3 class="font-semibold text-forest">Special Program: Learning Visit</h3>
                </div>
                <p class="text-sm text-gray-700 mb-3">A field study on sustainable enterprise case studies at <strong>su-re.co</strong> on <strong>August 25, 2026</strong>.</p>
                <div class="bg-amber-50 border border-amber-200 rounded-lg p-3 flex items-start gap-2">
                    <svg class="w-4 h-4 text-amber-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4.5c-.77-.833-2.694-.833-3.464 0L3.34 16.5c-.77.833.192 2.5 1.732 2.5z" />
                    </svg>
                    <p class="text-xs text-amber-800">Strictly limited to a maximum of <strong>50 participants</strong> on a first-come, first-served basis. System locks automatically upon limit entry.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Code of Conduct --}}
    <section id="code-of-conduct" class="mb-12 scroll-mt-24">
        <h2 class="text-2xl font-display font-semibold text-forest mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
            </svg>
            Code of Conduct
        </h2>
        <div class="bg-white rounded-xl p-6 border border-gray-200">
            <div class="space-y-4 text-gray-700">
                <p>The GETS 2026 Conference is committed to providing a welcoming and respectful environment for all participants, regardless of background, identity, or expertise level.</p>
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <h4 class="font-semibold text-forest mb-2">Expected Behavior</h4>
                        <ul class="space-y-2">
                            <li class="flex items-start gap-2 text-sm">
                                <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>Be respectful, inclusive, and professional</span>
                            </li>
                            <li class="flex items-start gap-2 text-sm">
                                <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>Respect intellectual property and privacy</span>
                            </li>
                            <li class="flex items-start gap-2 text-sm">
                                <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>Listen actively to different perspectives</span>
                            </li>
                            <li class="flex items-start gap-2 text-sm">
                                <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>Provide constructive feedback and dialogue</span>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-semibold text-forest mb-2">Unacceptable Behavior</h4>
                        <ul class="space-y-2">
                            <li class="flex items-start gap-2 text-sm">
                                <svg class="w-4 h-4 text-red-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                                <span>Harassment or discrimination</span>
                            </li>
                            <li class="flex items-start gap-2 text-sm">
                                <svg class="w-4 h-4 text-red-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                                <span>Disruptive conduct during sessions</span>
                            </li>
                            <li class="flex items-start gap-2 text-sm">
                                <svg class="w-4 h-4 text-red-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                                <span>Unauthorized professional recording of presentation slides</span>
                            </li>
                            <li class="flex items-start gap-2 text-sm">
                                <svg class="w-4 h-4 text-red-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                                <span>Violation of intellectual property rights</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="bg-forest/5 rounded-lg p-4 text-sm text-gray-600">
                    <p><strong>Reporting:</strong> Contact the organizing committee directly. All reports will be handled with strict confidentiality.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Contact CTA --}}
    <section class="mt-16">
        <div class="bg-gradient-to-r from-forest to-sage rounded-xl p-8 text-center">
            <h3 class="text-2xl font-display font-bold text-white mb-3">Need More Information?</h3>
            <p class="text-white/90 mb-6">Our team is here to help with any questions about conference participation.</p>
            <a href="{{ route('conference.contact') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-white text-forest font-display font-semibold rounded-full hover:bg-ivory transition-colors">
                <span>Contact Support</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </section>
</div>

{{-- Back to Top Button --}}
<div x-data="{ show: false }"
     x-init="window.addEventListener('scroll', () => { show = window.scrollY > 400 })"
     class="fixed bottom-8 right-8 z-50"
     x-show="show"
     x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="opacity-0 translate-y-4"
     x-transition:enter-end="opacity-100 translate-y-0"
     x-transition:leave="transition ease-in duration-200"
     x-transition:leave-start="opacity-100 translate-y-0"
     x-transition:leave-end="opacity-0 translate-y-4"
     style="display: none;">
    <button @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
            class="w-12 h-12 bg-forest text-white rounded-full shadow-lg hover:bg-sage transition-colors flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-forest focus:ring-offset-2"
            aria-label="Back to top">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
    </button>
</div>
@endsection
