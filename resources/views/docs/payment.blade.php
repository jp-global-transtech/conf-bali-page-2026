@extends('layouts.docs-layout')

@section('title', 'Payment Information - Bali 2026')
@php
    $page_title = 'Payment Information';
    $seo_description = 'Payment methods, instructions, and FAQs for conference fees';
    $seo_keywords = 'payment, fees, credit card, bank transfer, conference registration';
    $nav_prev = ['url' => route('docs.registration'), 'title' => 'Registration Guide'];
    $nav_next = ['url' => route('docs.faq'), 'title' => 'FAQ'];
@endphp

@section('content')
<div class="space-y-8">
    {{-- Page Header --}}
    <div class="mb-8">
        <h1 class="text-3xl font-display font-bold text-forest mb-4">Payment Information</h1>
        <p class="text-xl text-gray-600 leading-relaxed">
            Complete guide to payment options and procedures for your conference registration.
        </p>
    </div>

    {{-- Table of Contents --}}
    <div class="bg-ivory rounded-xl p-6 mb-10 border border-forest/10">
        <h2 class="text-lg font-display font-semibold text-forest mb-4">On This Page</h2>
        <ul class="space-y-2">
            <li><a href="#methods" class="text-earth hover:text-forest flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span>Payment Methods</a></li>
            <li><a href="#timeline" class="text-earth hover:text-forest flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span>Payment Timeline</a></li>
            <li><a href="#fees" class="text-earth hover:text-forest flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span>Fee Structure</a></li>
            <li><a href="#cancellation" class="text-earth hover:text-forest flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span>Cancellation Policy</a></li>
            <li><a href="#confirmation" class="text-earth hover:text-forest flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span>Payment Confirmation</a></li>
            <li><a href="#invoicing" class="text-earth hover:text-forest flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span>Tax & Invoicing</a></li>
        </ul>
    </div>

    {{-- Payment Methods --}}
    <section id="methods" class="mb-12">
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
                        <p class="text-sm text-gray-600">Instant • No additional fee</p>
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
                        <p class="text-sm text-gray-500">2-5 business days</p>
                    </div>
                </div>

                <p class="text-sm text-gray-700 mb-4">Select your region for bank transfer details:</p>

                <div class="grid md:grid-cols-2 gap-4">
                    {{-- India --}}
                    <div class="bg-gray-50 rounded-lg p-4">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="text-lg">🇮🇳</span>
                            <h4 class="font-semibold text-forest text-sm">India-Based Delegates</h4>
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
                            <span class="text-lg">🇮🇩</span>
                            <h4 class="font-semibold text-forest text-sm">Indonesia & International</h4>
                        </div>
                        <p class="text-xs text-gray-500 mb-3">JP Global Transtech</p>
                        <div class="space-y-1 text-sm text-gray-700">
                            <p><strong>Bank:</strong> Bank Mandiri</p>
                            <p><strong>Account No.:</strong> 1320018179748</p>
                        </div>
                    </div>
                </div>

                <p class="text-sm text-gray-600 mt-4">💡 Include your registration reference in transfer description. Upload receipt in portal for verification.</p>
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

    {{-- Payment Timeline --}}
    <section id="timeline" class="mb-12">
        <h2 class="text-2xl font-display font-semibold text-forest mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            Payment Timeline
        </h2>
        <div class="bg-white rounded-xl p-6 border border-gray-200">
            <div class="space-y-4">
                <div class="flex items-center gap-4">
                    <div class="w-8 h-8 rounded-full bg-forest/10 flex items-center justify-center text-forest font-semibold text-sm">1</div>
                    <div class="flex-1">
                        <p class="font-medium text-gray-700">Payment Submission</p>
                        <p class="text-sm text-gray-500">Within 7 days of registration</p>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <div class="w-8 h-8 rounded-full bg-forest/10 flex items-center justify-center text-forest font-semibold text-sm">2</div>
                    <div class="flex-1">
                        <p class="font-medium text-gray-700">Payment Confirmation</p>
                        <p class="text-sm text-gray-500">1-3 business days (bank transfer)</p>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <div class="w-8 h-8 rounded-full bg-sage/20 flex items-center justify-center text-sage font-semibold text-sm">3</div>
                    <div class="flex-1">
                        <p class="font-medium text-gray-700">Registration Finalization</p>
                        <p class="text-sm text-gray-500">Within 24 hours of confirmation</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Fee Structure --}}
    <section id="fees" class="mb-12">
        <h2 class="text-2xl font-display font-semibold text-forest mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            Fee Structure
        </h2>
        <div class="bg-white rounded-xl p-6 border border-gray-200">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="border-b">
                            <th class="text-left py-3 px-4 font-semibold text-gray-700">Category</th>
                            <th class="text-center py-3 px-4 font-semibold text-gray-700">Fee</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="py-3 px-4 text-gray-700">Student</td>
                            <td class="text-center py-3 px-4 text-forest font-semibold">Announce Soon</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-3 px-4 text-gray-700">Academic</td>
                            <td class="text-center py-3 px-4 text-forest font-semibold">Announce Soon</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-3 px-4 text-gray-700">Industry</td>
                            <td class="text-center py-3 px-4 text-forest font-semibold">Announce Soon</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 text-gray-700">Virtual</td>
                            <td class="text-center py-3 px-4 text-forest font-semibold">Announce Soon</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="text-sm text-gray-500 mt-4">* Early bird deadline: May 31, 2026</p>
        </div>
    </section>

    {{-- Cancellation Policy --}}
    <section id="cancellation" class="mb-12">
        <h2 class="text-2xl font-display font-semibold text-forest mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
            </svg>
            Cancellation Policy
        </h2>
        <div class="bg-white rounded-xl p-6 border border-gray-200">
            <div class="space-y-3">
                <div class="flex items-center justify-between p-3 bg-green-50 rounded-lg">
                    <span class="text-gray-700">Before June 1, 2026</span>
                    <span class="font-semibold text-green-600">90% refund</span>
                </div>
                <div class="flex items-center justify-between p-3 bg-yellow-50 rounded-lg">
                    <span class="text-gray-700">June 1 - July 31, 2026</span>
                    <span class="font-semibold text-yellow-600">50% refund</span>
                </div>
                <div class="flex items-center justify-between p-3 bg-red-50 rounded-lg">
                    <span class="text-gray-700">After August 1, 2026</span>
                    <span class="font-semibold text-red-600">No refund</span>
                </div>
            </div>
            <p class="text-sm text-gray-500 mt-4">All refunds processed within 30 business days to original payment method.</p>
        </div>
    </section>

    {{-- Payment Confirmation --}}
    <section id="confirmation" class="mb-12">
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
    <section id="invoicing" class="mb-12">
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
                        <li>• <strong>Indonesian:</strong> VAT (PPN) 11% included</li>
                        <li>• <strong>International:</strong> No tax applied</li>
                        <li>• Tax ID available on receipts</li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-semibold text-forest mb-3">Invoice Types</h3>
                    <ul class="space-y-2 text-sm text-gray-700">
                        <li>• Standard Invoice</li>
                        <li>• Tax Invoice (Indonesia)</li>
                        <li>• Pro Forma Invoice (for visa)</li>
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
@endsection
