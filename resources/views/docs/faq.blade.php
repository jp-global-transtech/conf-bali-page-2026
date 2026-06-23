@extends('layouts.docs-layout')

@section('title', 'FAQ - Bali 2026')
@php
    $page_title = 'Frequently Asked Questions';
    $seo_description = 'Answers to common questions about the Bali 2026 International Conference';
    $seo_keywords = 'FAQ, questions, conference help, Bali 2026';
    $nav_prev = ['url' => route('docs.payment'), 'title' => 'Payment Information'];
@endphp

@section('content')
<div class="space-y-8">
    {{-- Page Header --}}
    <div class="mb-8">
        <h1 class="text-3xl font-display font-bold text-forest mb-4">Frequently Asked Questions</h1>
        <p class="text-xl text-gray-600 leading-relaxed">
            Find answers to the most commonly asked questions about Bali 2026 International Conference.
        </p>
    </div>

    {{-- Quick Navigation --}}
    <div class="bg-ivory rounded-xl p-6 mb-10 border border-forest/10">
        <h2 class="text-lg font-display font-semibold text-forest mb-4">Categories</h2>
        <div class="grid md:grid-cols-3 gap-3">
            <a href="#registration" class="flex items-center gap-2 p-3 bg-white rounded-lg hover:bg-forest/5 transition-colors">
                <svg class="w-5 h-5 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                <span class="text-sm font-medium text-gray-700">Registration</span>
            </a>
            <a href="#payment" class="flex items-center gap-2 p-3 bg-white rounded-lg hover:bg-forest/5 transition-colors">
                <svg class="w-5 h-5 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                </svg>
                <span class="text-sm font-medium text-gray-700">Payment</span>
            </a>
            <a href="#abstracts" class="flex items-center gap-2 p-3 bg-white rounded-lg hover:bg-forest/5 transition-colors">
                <svg class="w-5 h-5 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                <span class="text-sm font-medium text-gray-700">Abstracts</span>
            </a>
            <a href="#travel" class="flex items-center gap-2 p-3 bg-white rounded-lg hover:bg-forest/5 transition-colors">
                <svg class="w-5 h-5 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                </svg>
                <span class="text-sm font-medium text-gray-700">Travel & Accommodation</span>
            </a>
            <a href="#conference" class="flex items-center gap-2 p-3 bg-white rounded-lg hover:bg-forest/5 transition-colors">
                <svg class="w-5 h-5 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <span class="text-sm font-medium text-gray-700">Conference Details</span>
            </a>
            <a href="#virtual" class="flex items-center gap-2 p-3 bg-white rounded-lg hover:bg-forest/5 transition-colors">
                <svg class="w-5 h-5 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                </svg>
                <span class="text-sm font-medium text-gray-700">Virtual Participation</span>
            </a>
        </div>
    </div>

    {{-- Registration Questions --}}
    <section id="registration" class="mb-12">
        <h2 class="text-2xl font-display font-semibold text-forest mb-6 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
            Registration Questions
        </h2>
        <div class="space-y-4">
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <h3 class="font-semibold text-forest mb-2">How do I register for the conference?</h3>
                <p class="text-gray-700 mb-3">Registration is done through our online portal. Simply create an account, complete your profile, select your registration type, and make payment.</p>
                <a href="{{ route('docs.registration') }}" class="text-forest hover:text-sage text-sm font-medium inline-flex items-center gap-1">
                    <span>See Registration Guide</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <h3 class="font-semibold text-forest mb-2">What is included in the registration fee?</h3>
                <ul class="text-gray-700 space-y-1">
                    <li>• Access to all scientific sessions</li>
                    <li>• Conference materials and proceedings</li>
                    <li>• Coffee breaks and lunch (for in-person)</li>
                    <li>• Welcome reception</li>
                    <li>• Certificate of attendance</li>
                </ul>
            </div>
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <h3 class="font-semibold text-forest mb-2">Can I register on-site?</h3>
                <p class="text-gray-700 mb-3">Yes, on-site registration is available during the conference. However, we strongly recommend pre-registering as early bird discounts are not available on-site and materials may be limited.</p>
            </div>
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <h3 class="font-semibold text-forest mb-2">What is the cancellation policy?</h3>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="bg-gray-50">
                                <th class="px-4 py-2 text-left font-semibold text-gray-700">Timing</th>
                                <th class="px-4 py-2 text-left font-semibold text-gray-700">Refund</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-t">
                                <td class="px-4 py-2">Before June 1, 2026</td>
                                <td class="px-4 py-2 text-forest font-medium">90% refund</td>
                            </tr>
                            <tr class="border-t">
                                <td class="px-4 py-2">June 1 - July 31, 2026</td>
                                <td class="px-4 py-2 text-sage font-medium">50% refund</td>
                            </tr>
                            <tr class="border-t">
                                <td class="px-4 py-2">After August 1, 2026</td>
                                <td class="px-4 py-2 text-red-600 font-medium">No refund</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <h3 class="font-semibold text-forest mb-2">Can I transfer my registration to someone else?</h3>
                <p class="text-gray-700">No, registrations are non-transferable. Each person must register individually.</p>
            </div>
        </div>
    </section>

    {{-- Payment Questions --}}
    <section id="payment" class="mb-12">
        <h2 class="text-2xl font-display font-semibold text-forest mb-6 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
            </svg>
            Payment Questions
        </h2>
        <div class="space-y-4">
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <h3 class="font-semibold text-forest mb-2">What payment methods do you accept?</h3>
                <ul class="text-gray-700 space-y-1">
                    <li>• Credit/Debit cards (Visa, Mastercard, Amex)</li>
                    <li>• Bank transfers</li>
                    <li>• Official purchase orders (for institutions)</li>
                </ul>
            </div>
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <h3 class="font-semibold text-forest mb-2">Is my payment secure?</h3>
                <p class="text-gray-700">Yes, all transactions are secured with SSL encryption, PCI DSS compliance, and 3D Secure verification. We do not store card details on our servers.</p>
            </div>
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <h3 class="font-semibold text-forest mb-2">Do you offer group discounts?</h3>
                <p class="text-gray-700">Yes, groups of 5 or more from the same institution receive a 10% discount. Contact our team for more information.</p>
            </div>
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <h3 class="font-semibold text-forest mb-2">Can I get an invoice for my institution?</h3>
                <p class="text-gray-700">Yes, official invoices can be generated through your registration portal. Navigate to "Invoice Request" and fill in your institution's details.</p>
            </div>
        </div>
    </section>

    {{-- Abstract and Presentation --}}
    <section id="abstracts" class="mb-12">
        <h2 class="text-2xl font-display font-semibold text-forest mb-6 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
            Abstract and Presentation
        </h2>
        <div class="space-y-4">
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <h3 class="font-semibold text-forest mb-2">How do I submit an abstract?</h3>
                <p class="text-gray-700 mb-3">Abstracts are submitted during the registration process. You'll need to provide presentation title, category, preferred type, and abstract text (250-300 words).</p>
                <a href="{{ route('docs.abstract') }}" class="text-forest hover:text-sage text-sm font-medium inline-flex items-center gap-1">
                    <span>See Abstract Guidelines</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <h3 class="font-semibold text-forest mb-2">What is the abstract format?</h3>
                <ul class="text-gray-700 space-y-1">
                    <li>• <strong>Word count:</strong> 250-300 words</li>
                    <li>• <strong>Format:</strong> Plain text or PDF</li>
                    <li>• <strong>Sections:</strong> Background, Methods, Results, Conclusion</li>
                    <li>• <strong>Keywords:</strong> 3-5 relevant keywords</li>
                </ul>
            </div>
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <h3 class="font-semibold text-forest mb-2">When will I know if my abstract is accepted?</h3>
                <p class="text-gray-700">Notifications will be sent by July 30, 2026 via email.</p>
            </div>
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <h3 class="font-semibold text-forest mb-2">What presentation types are available?</h3>
                <div class="grid md:grid-cols-3 gap-4 mt-3">
                    <div class="bg-forest/5 rounded-lg p-3">
                        <h4 class="font-medium text-forest text-sm">Oral Presentation</h4>
                        <p class="text-xs text-gray-600">15-minute talk + 5-minute Q&A</p>
                    </div>
                    <div class="bg-sage/10 rounded-lg p-3">
                        <h4 class="font-medium text-forest text-sm">Poster Presentation</h4>
                        <p class="text-xs text-gray-600">90-minute poster session</p>
                    </div>
                    <div class="bg-atmosphere/10 rounded-lg p-3">
                        <h4 class="font-medium text-forest text-sm">Virtual Presentation</h4>
                        <p class="text-xs text-gray-600">Pre-recorded video + live Q&A</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Travel and Accommodation --}}
    <section id="travel" class="mb-12">
        <h2 class="text-2xl font-display font-semibold text-forest mb-6 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
            </svg>
            Travel and Accommodation
        </h2>
        <div class="space-y-4">
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <h3 class="font-semibold text-forest mb-2">Do you provide accommodation?</h3>
                <p class="text-gray-700">No, accommodation is not included in the registration fee. However, we have partnered with several hotels offering special rates for conference participants.</p>
            </div>
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <h3 class="font-semibold text-forest mb-2">Do I need a visa to attend?</h3>
                <p class="text-gray-700">Visa requirements vary by country. Please check with your local Indonesian embassy. We can provide an invitation letter for visa application purposes after registration is confirmed.</p>
            </div>
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <h3 class="font-semibold text-forest mb-2">What airport should I fly to?</h3>
                <p class="text-gray-700"><strong>Ngurah Rai International Airport (DPS)</strong> in Bali, Indonesia. The conference venue is approximately 30 minutes from airport by car.</p>
            </div>
        </div>
    </section>

    {{-- Conference Details --}}
    <section id="conference" class="mb-12">
        <h2 class="text-2xl font-display font-semibold text-forest mb-6 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            Conference Details
        </h2>
        <div class="space-y-4">
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <h3 class="font-semibold text-forest mb-2">Where is the conference held?</h3>
                <p class="text-gray-700">The conference will be held at <strong>Universitas Udayana, Bali</strong>. Exact location details will be provided closer to the event date.</p>
            </div>
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <h3 class="font-semibold text-forest mb-2">What is the conference schedule?</h3>
                <div class="space-y-2 text-gray-700">
                    <p><strong>August 24, 2026:</strong> Full day conference including opening ceremony, sessions, and closing ceremony</p>
                </div>
            </div>
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <h3 class="font-semibold text-forest mb-2">Is there a dress code?</h3>
                <p class="text-gray-700"><strong>Business casual</strong> is recommended for all sessions. For the gala dinner, <strong>formal attire</strong> is suggested.</p>
            </div>
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <h3 class="font-semibold text-forest mb-2">Will meals be provided?</h3>
                <p class="text-gray-700">Yes, morning and afternoon coffee breaks, lunch on conference days, and welcome reception are included.</p>
            </div>
        </div>
    </section>

    {{-- Virtual Participation --}}
    <section id="virtual" class="mb-12">
        <h2 class="text-2xl font-display font-semibold text-forest mb-6 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
            </svg>
            Virtual Participation
        </h2>
        <div class="space-y-4">
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <h3 class="font-semibold text-forest mb-2">What does virtual registration include?</h3>
                <ul class="text-gray-700 space-y-1">
                    <li>• Live stream access to all sessions</li>
                    <li>• Digital conference materials</li>
                    <li>• Virtual networking opportunities</li>
                    <li>• Digital certificate</li>
                </ul>
            </div>
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <h3 class="font-semibold text-forest mb-2">How do I access virtual sessions?</h3>
                <p class="text-gray-700">Access details will be sent 7 days before the conference with unique login credentials and platform access instructions.</p>
            </div>
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <h3 class="font-semibold text-forest mb-2">Can I switch from in-person to virtual?</h3>
                <p class="text-gray-700">Yes, you can change your registration type before August 1, 2026 with full credit applied. Contact support to make changes.</p>
            </div>
        </div>
    </section>

    {{-- Special Requirements --}}
    <section class="mb-12">
        <h2 class="text-2xl font-display font-semibold text-forest mb-6">Special Requirements</h2>
        <div class="space-y-4">
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <h3 class="font-semibold text-forest mb-2">I have dietary restrictions. What should I do?</h3>
                <p class="text-gray-700">During registration, you can specify Halal Food, Vegan, Vegetarian, or Other dietary requirements. All special dietary needs will be accommodated.</p>
            </div>
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <h3 class="font-semibold text-forest mb-2">Is the venue accessible?</h3>
                <p class="text-gray-700">Yes, the venue is fully accessible with wheelchair ramps, elevators, accessible restrooms, designated seating areas, and assistive listening devices.</p>
            </div>
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <h3 class="font-semibold text-forest mb-2">Can I bring a guest?</h3>
                <p class="text-gray-700">Guests are welcome but must register separately. Accompanying person registration includes social events only.</p>
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
