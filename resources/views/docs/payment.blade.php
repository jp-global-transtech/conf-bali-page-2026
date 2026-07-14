@extends('layouts.docs-layout')

@section('title', 'Payment Information - GETS 2026')
@php
    $page_title = 'Payment Information';
    $seo_description = 'Payment methods, instructions, and fee structure for GETS 2026 conference registration';
    $seo_keywords = 'payment, fees, bank transfer, credit card, conference registration, GETS 2026, Indian delegates, Indonesia';
    $nav_prev = ['url' => route('docs.registration'), 'title' => 'Registration Guide'];
    $nav_next = ['url' => route('docs.faq'), 'title' => 'FAQ'];
@endphp

@section('content')
<div class="space-y-8">
    {{-- Page Header --}}
    <div class="mb-8">
        <h1 class="text-3xl font-display font-bold text-forest mb-4">Payment Information</h1>
        <p class="text-lg text-gray-600 leading-relaxed">
            Complete guide to payment options, fee structure, and procedures for your GETS 2026 registration.
        </p>
    </div>

    {{-- Table of Contents --}}
    <div class="bg-ivory rounded-xl p-6 mb-10 border border-forest/10">
        <h2 class="text-lg font-display font-semibold text-forest mb-4">On This Page</h2>
        <ul class="space-y-2">
            <li><a href="#methods" class="text-earth hover:text-forest flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span>Payment Methods</a></li>
            <li><a href="#fees" class="text-earth hover:text-forest flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span>Fee Structure</a></li>
            <li><a href="#timeline" class="text-earth hover:text-forest flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span>Payment Timeline</a></li>
            <li><a href="#confirmation" class="text-earth hover:text-forest flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span>Payment Confirmation</a></li>
            <li><a href="#invoicing" class="text-earth hover:text-forest flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span>Tax & Invoicing</a></li>
        </ul>
    </div>

    {{-- Payment Methods --}}
    <section id="methods" class="mb-12 scroll-mt-24">
        <h2 class="text-2xl font-display font-semibold text-forest mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
            </svg>
            Payment Methods
        </h2>
        <div class="space-y-6">
            {{-- Credit Card --}}
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 bg-forest/10 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-forest">Credit/Debit Card</h3>
                        <p class="text-sm text-gray-500">Instant confirmation</p>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <p class="text-sm font-medium text-gray-700 mb-2">Accepted Cards</p>
                        <div class="flex gap-2">
                            <span class="px-2 py-1 bg-gray-100 rounded text-xs">Visa</span>
                            <span class="px-2 py-1 bg-gray-100 rounded text-xs">Mastercard</span>
                            <span class="px-2 py-1 bg-gray-100 rounded text-xs">Amex</span>
                        </div>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-700 mb-2">Processing</p>
                        <p class="text-sm text-gray-600">Instant &bull; No additional fee</p>
                    </div>
                </div>
            </div>

            {{-- Bank Transfer --}}
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 bg-sage/10 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-forest">Bank Transfer</h3>
                        <p class="text-sm text-gray-500">2-5 business days processing</p>
                    </div>
                </div>

                <p class="text-sm text-gray-700 mb-4">Select your region for bank transfer details:</p>

                <div class="grid md:grid-cols-2 gap-4">
                    {{-- India --}}
                    <div class="bg-gray-50 rounded-lg p-4">
                        <div class="flex items-center gap-2 mb-3">
                            <h4 class="font-semibold text-forest text-sm">Indian Delegates</h4>
                        </div>
                        <p class="text-xs text-gray-500 mb-3">North Eastern Management Association (NEMA)</p>
                        <div class="space-y-1 text-sm text-gray-700">
                            <p><strong>Bank:</strong> State Bank of India</p>
                            <p><strong>Branch:</strong> Manipur University</p>
                            <p><strong>Account No.:</strong> 20512944868</p>
                            <p><strong>IFSC Code:</strong> SBIN0005320</p>
                        </div>
                    </div>

                    {{-- Indonesia --}}
                    <div class="bg-gray-50 rounded-lg p-4">
                        <div class="flex items-center gap-2 mb-3">
                            <h4 class="font-semibold text-forest text-sm">Indonesia & International</h4>
                        </div>
                        <p class="text-xs text-gray-500 mb-3">JP Global Transtech</p>
                        <div class="space-y-1 text-sm text-gray-700">
                            <p><strong>Bank:</strong> Bank Mandiri</p>
                            <p><strong>Account No.:</strong> 1320018179748</p>
                        </div>
                    </div>
                </div>

                <div class="bg-amber-50 border border-amber-200 rounded-lg p-3 mt-4 flex items-start gap-2">
                    <svg class="w-4 h-4 text-amber-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <p class="text-xs text-amber-800">Include your registration reference in the transfer description. Upload the payment receipt in the registration portal for verification.</p>
                </div>
            </div>

            {{-- Purchase Order --}}
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 bg-atmosphere/10 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-atmosphere" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-forest">Official Purchase Order</h3>
                        <p class="text-sm text-gray-500">For institutions</p>
                    </div>
                </div>
                <div class="space-y-2 text-sm text-gray-600">
                    <p><strong>Requirements:</strong> Minimum 3 registrants, official PO on letterhead</p>
                    <p><strong>Payment Terms:</strong> Net 30 days from invoice date</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Fee Structure --}}
    <section id="fees" class="mb-12 scroll-mt-24">
        <h2 class="text-2xl font-display font-semibold text-forest mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            Fee Structure
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

        {{-- Non-refundable disclaimer --}}
        <div class="bg-red-50 border border-red-200 rounded-lg p-4 mt-4 flex items-start gap-3">
            <svg class="w-5 h-5 text-red-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4.5c-.77-.833-2.694-.833-3.464 0L3.34 16.5c-.77.833.192 2.5 1.732 2.5z" />
            </svg>
            <p class="text-xs text-red-700">All fees paid are non-refundable. Publication is strictly subject to the standard double-blind peer-review process and approval by the journal's editorial board.</p>
        </div>
    </section>

    {{-- Payment Timeline --}}
    <section id="timeline" class="mb-12 scroll-mt-24">
        <h2 class="text-2xl font-display font-semibold text-forest mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            Payment Timeline
        </h2>

        <div class="grid md:grid-cols-2 gap-6">
            {{-- Indian Delegates --}}
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <div class="flex items-center gap-2 mb-4">
                    <span class="w-3 h-3 rounded-full bg-sage"></span>
                    <h3 class="font-semibold text-forest">Indian Delegates</h3>
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
                            <p class="text-sm text-gray-600">Last Abstract Submission Deadline</p>
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
                            <p class="text-sm text-gray-600">Last Registration & Payment Deadline</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Indonesia & International --}}
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <div class="flex items-center gap-2 mb-4">
                    <span class="w-3 h-3 rounded-full bg-atmosphere"></span>
                    <h3 class="font-semibold text-forest">Indonesia & General International</h3>
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
                            <p class="text-sm text-gray-600">Final Deadline to email Presentation Slides / Poster Files</p>
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
                            <p class="text-sm text-gray-600">Last Abstract Submission Deadline</p>
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
                            <p class="text-sm text-gray-600">Last Registration & Payment Deadline</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Payment Confirmation --}}
    <section id="confirmation" class="mb-12 scroll-mt-24">
        <h2 class="text-2xl font-display font-semibold text-forest mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            Payment Confirmation
        </h2>
        <div class="bg-white rounded-xl p-6 border border-gray-200">
            <p class="text-gray-700 mb-4">After payment confirmation, you will receive:</p>
            <ul class="space-y-3">
                <li class="flex items-start gap-3">
                    <svg class="w-5 h-5 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span><strong>Official Receipt</strong> - Tax invoice/receipt</span>
                </li>
                <li class="flex items-start gap-3">
                    <svg class="w-5 h-5 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span><strong>Confirmation Letter</strong> - With booking reference</span>
                </li>
                <li class="flex items-start gap-3">
                    <svg class="w-5 h-5 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span><strong>QR Code</strong> - For event check-in</span>
                </li>
                <li class="flex items-start gap-3">
                    <svg class="w-5 h-5 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span><strong>Payment Summary</strong> - Detailed breakdown</span>
                </li>
            </ul>
        </div>
    </section>

    {{-- Tax & Invoicing --}}
    <section id="invoicing" class="mb-12 scroll-mt-24">
        <h2 class="text-2xl font-display font-semibold text-forest mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
            </svg>
            Tax & Invoicing
        </h2>
        <div class="bg-white rounded-xl p-6 border border-gray-200">
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="font-semibold text-forest mb-3">Tax Information</h3>
                    <ul class="space-y-2 text-sm text-gray-700">
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span><strong>Indonesian:</strong> VAT (PPN) 11% included</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span><strong>International:</strong> No tax applied</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Tax ID available on receipts</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-semibold text-forest mb-3">Invoice Types</h3>
                    <ul class="space-y-2 text-sm text-gray-700">
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Standard Invoice</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Tax Invoice (Indonesia)</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Pro Forma Invoice (for visa)</span>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="text-sm text-gray-600 mt-4">To request a custom invoice, log in to your registration portal and navigate to "Invoice Request".</p>
        </div>
    </section>

    {{-- Contact CTA --}}
    <section class="mt-16">
        <div class="bg-gradient-to-r from-forest to-sage rounded-xl p-8 text-center">
            <h3 class="text-2xl font-display font-bold text-white mb-3">Need Payment Help?</h3>
            <p class="text-white/90 mb-6">Our team is here to assist with any payment-related questions.</p>
            <a href="{{ route('conference.contact') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-white text-forest font-display font-semibold rounded-full hover:bg-ivory transition-colors">
                <span>Contact Support</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
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
