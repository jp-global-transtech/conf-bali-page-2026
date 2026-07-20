@extends('layouts.docs-layout')

@section('title', 'Registration Guide - Bali 2026')
@php
    $page_title = 'Registration Guide';
    $seo_description = 'Detailed step-by-step guide for conference registration';
    $seo_keywords = 'registration guide, how to register, conference sign up, Bali 2026';
    $nav_prev = ['url' => route('docs.guidelines'), 'title' => 'Conference Guidelines'];
    $nav_next = ['url' => route('docs.payment'), 'title' => 'Payment Information'];
@endphp

@section('content')
<div class="space-y-8">
    {{-- Page Header --}}
    <div class="mb-8">
        <h1 class="text-3xl font-display font-bold text-forest mb-4">Registration Guide</h1>
        <p class="text-xl text-gray-600 leading-relaxed">
            Complete step-by-step guide to register for the Bali 2026 International Conference.
        </p>
    </div>

    {{-- Registration Overview --}}
    <div class="bg-gradient-to-r from-forest/5 to-sage/5 rounded-xl p-6 mb-10 border border-forest/10">
        <h2 class="text-lg font-display font-semibold text-forest mb-4">Registration Process</h2>
        <div class="flex flex-wrap items-center gap-2 text-sm">
            <span class="px-3 py-1 bg-forest text-white rounded-full">Account</span>
            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
            <span class="px-3 py-1 bg-forest text-white rounded-full">Profile</span>
            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
            <span class="px-3 py-1 bg-forest text-white rounded-full">Type</span>
            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
            <span class="px-3 py-1 bg-forest text-white rounded-full">Abstract</span>
            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
            <span class="px-3 py-1 bg-sage text-white rounded-full">Payment</span>
            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
            <span class="px-3 py-1 bg-sage text-white rounded-full">Confirm</span>
        </div>
    </div>

    {{-- Table of Contents --}}
    <div class="bg-ivory rounded-xl p-6 mb-10 border border-forest/10">
        <h2 class="text-lg font-display font-semibold text-forest mb-4">On This Page</h2>
        <ul class="space-y-2">
            <li><a href="#requirements" class="text-earth hover:text-forest flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span>Before You Register</a></li>
            <li><a href="#create-account" class="text-earth hover:text-forest flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span>Creating Your Account</a></li>
            <li><a href="#complete-profile" class="text-earth hover:text-forest flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span>Completing Your Profile</a></li>
            <li><a href="#registration-types" class="text-earth hover:text-forest flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span>Selecting Registration Type</a></li>
            <li><a href="#abstract" class="text-earth hover:text-forest flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span>Abstract Submission</a></li>
            <li><a href="#indian-registration" class="text-earth hover:text-forest flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span>Indian Nationals Registration</a></li>
            <li><a href="#deadlines" class="text-earth hover:text-forest flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span>Registration Deadlines</a></li>
        </ul>
    </div>

    {{-- Before You Register --}}
    <section id="requirements" class="mb-12">
        <h2 class="text-2xl font-display font-semibold text-forest mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
            </svg>
            Before You Register
        </h2>
        <div class="bg-white rounded-xl p-6 border border-gray-200">
            <h3 class="font-semibold text-forest mb-3">Requirements</h3>
            <div class="grid md:grid-cols-2 gap-4">
                <div class="space-y-2">
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span class="text-sm text-gray-700">Valid email address</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span class="text-sm text-gray-700">Personal information</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span class="text-sm text-gray-700">Affiliation details</span>
                    </div>
                </div>
                <div class="space-y-2">
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span class="text-sm text-gray-700">Presentation details (if applicable)</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span class="text-sm text-gray-700">Payment method ready</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span class="text-sm text-gray-700">Student ID (if student rate)</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Creating Your Account --}}
    <section id="create-account" class="mb-12">
        <h2 class="text-2xl font-display font-semibold text-forest mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
            Step 1: Creating Your Account
        </h2>
        <div class="bg-white rounded-xl p-6 border border-gray-200">
            <ol class="space-y-4">
                <li class="flex gap-4">
                    <div class="flex-shrink-0 w-8 h-8 rounded-full bg-forest text-white flex items-center justify-center font-semibold text-sm">1</div>
                    <div>
                        <h4 class="font-semibold text-forest">Visit the Registration Portal</h4>
                        <p class="text-sm text-gray-600">Navigate to the registration page and click the "Register" button.</p>
                    </div>
                </li>
                <li class="flex gap-4">
                    <div class="flex-shrink-0 w-8 h-8 rounded-full bg-forest text-white flex items-center justify-center font-semibold text-sm">2</div>
                    <div>
                        <h4 class="font-semibold text-forest">Fill in Basic Information</h4>
                        <p class="text-sm text-gray-600">Enter your email address (will be your username), create a password (minimum 8 characters), and confirm password.</p>
                    </div>
                </li>
                <li class="flex gap-4">
                    <div class="flex-shrink-0 w-8 h-8 rounded-full bg-sage text-white flex items-center justify-center font-semibold text-sm">3</div>
                    <div>
                        <h4 class="font-semibold text-forest">Email Verification</h4>
                        <p class="text-sm text-gray-600">After submitting, you'll receive a verification email. Click the link within 24 hours to activate your account.</p>
                        <div class="bg-sage/10 rounded-lg p-3 mt-2">
                            <p class="text-xs text-forest"><strong>Tip:</strong> Check your spam folder if you don't receive the verification email within a few minutes.</p>
                        </div>
                    </div>
                </li>
            </ol>
        </div>
    </section>

    {{-- Completing Your Profile --}}
    <section id="complete-profile" class="mb-12">
        <h2 class="text-2xl font-display font-semibold text-forest mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
            </svg>
            Step 2: Completing Your Profile
        </h2>
        <div class="bg-white rounded-xl p-6 border border-gray-200">
            <p class="text-sm text-gray-600 mb-4">Fill in your personal and institutional details as they appear in the registration form.</p>
            <div class="space-y-2 text-sm text-gray-700">
                <div class="flex justify-between py-2 border-b">
                    <span>First Name</span>
                    <span class="text-red-500">Required</span>
                </div>
                <div class="flex justify-between py-2 border-b">
                    <span>Last Name</span>
                    <span class="text-red-500">Required</span>
                </div>
                <div class="flex justify-between py-2 border-b">
                    <span>Email Address</span>
                    <span class="text-red-500">Required</span>
                </div>
                <div class="flex justify-between py-2 border-b">
                    <span>Phone Number</span>
                    <span class="text-gray-400">Optional</span>
                </div>
                <div class="flex justify-between py-2 border-b">
                    <span>Country</span>
                    <span class="text-red-500">Required</span>
                </div>
                <div class="flex justify-between py-2 border-b">
                    <span>Institution Name</span>
                    <span class="text-red-500">Required</span>
                </div>
                <div class="flex justify-between py-2">
                    <span>Position / Title</span>
                    <span class="text-red-500">Required</span>
                </div>
            </div>
            <div class="bg-ivory rounded-lg p-4 mt-4 text-xs text-gray-600">
                <p><strong>Note:</strong> After completing your profile, you'll proceed to select a Registration Category (Early Bird / Regular / Student) and Attendance Type (Onsite / Online) in the next step.</p>
            </div>
        </div>
    </section>

    {{-- Registration Types --}}
    <section id="registration-types" class="mb-12">
        <h2 class="text-2xl font-display font-semibold text-forest mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
            </svg>
            Step 3: Selecting Registration Type
        </h2>
        <div class="grid md:grid-cols-3 gap-4">
            <div class="bg-white rounded-xl p-6 border border-gray-200 hover:border-forest/30 transition-colors">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-10 h-10 bg-teal-100 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-forest">Indonesia Participants</h3>
                        <p class="text-sm text-gray-500">Online Only</p>
                    </div>
                </div>
                <p class="text-2xl font-display font-bold text-forest mb-1">IDR 500,000</p>
                <p class="text-sm text-gray-600">Virtual access via Zoom for domestic participants.</p>
            </div>
            <div class="bg-white rounded-xl p-6 border border-gray-200 hover:border-forest/30 transition-colors">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-10 h-10 bg-forest/10 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-forest">International Participants</h3>
                        <p class="text-sm text-gray-500">On-site &amp; Online</p>
                    </div>
                </div>
                <p class="text-2xl font-display font-bold text-forest mb-1">USD 110 / USD 50</p>
                <p class="text-sm text-gray-600">Choose in-person attendance in Bali or virtual participation.</p>
            </div>
            <div class="bg-white rounded-xl p-6 border border-gray-200 hover:border-forest/30 transition-colors">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-10 h-10 bg-amber-100 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-forest">Indian Partners</h3>
                        <p class="text-sm text-gray-500">Presenter &amp; Participant</p>
                    </div>
                </div>
                <p class="text-2xl font-display font-bold text-forest mb-1">INR 10,000 / INR 5,000</p>
                <p class="text-sm text-gray-600">Coordinated by NEMA India. Presenter and listener options available.</p>
            </div>
        </div>
    </section>

    {{-- Abstract Submission --}}
    <section id="abstract" class="mb-12">
        <h2 class="text-2xl font-display font-semibold text-forest mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
            Step 4: Abstract Submission (Optional)
        </h2>
        <div class="bg-white rounded-xl p-6 border border-gray-200">
            <p class="text-gray-700 mb-4">If you're presenting at the conference, you can submit your abstract during registration:</p>
            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-forest/5 rounded-lg p-4">
                    <h4 class="font-medium text-forest mb-2">Abstract Guidelines</h4>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• Word Count: 250-300 words</li>
                        <li>• Format: Plain text or PDF</li>
                        <li>• Content: Background, methods, results, conclusion</li>
                    </ul>
                </div>
                <div class="bg-sage/10 rounded-lg p-4">
                    <h4 class="font-medium text-forest mb-2">Presentation Types</h4>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• Oral Presentation</li>
                        <li>• Poster Presentation</li>
                        <li>• Virtual Presentation</li>
                    </ul>
                </div>
            </div>
            <p class="text-sm text-gray-500 mt-4">See <a href="{{ route('docs.abstract') }}" class="text-forest hover:text-sage font-medium">Abstract Submission Guidelines</a> for complete details.</p>
        </div>
    </section>

    {{-- Indian Participants Registration --}}
    <section id="indian-registration" class="mb-12">
        <h2 class="text-2xl font-display font-semibold text-forest mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9" />
            </svg>
            Registration for Indian Nationals
        </h2>
        <div class="bg-white rounded-xl p-6 border border-gray-200">
            <p class="text-gray-700 mb-6">Special registration rates are available for Indian participants:</p>
            <div class="grid md:grid-cols-2 gap-4 mb-6">
                <div class="bg-gradient-to-br from-forest/10 to-forest/5 rounded-lg p-5 border border-forest/20">
                    <div class="flex items-center gap-3 mb-2">
                        <svg class="w-5 h-5 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                        <h4 class="font-semibold text-forest">Paper Presenting Authors/Delegates</h4>
                    </div>
                    <p class="text-3xl font-display font-bold text-sage mb-1">INR 10,000/-</p>
                    <p class="text-sm text-gray-600">Full conference access with presentation</p>
                </div>
                <div class="bg-gradient-to-br from-sage/10 to-sage/5 rounded-lg p-5 border border-sage/20">
                    <div class="flex items-center gap-3 mb-2">
                        <svg class="w-5 h-5 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <h4 class="font-semibold text-forest">Non-Presenting Participant</h4>
                    </div>
                    <p class="text-3xl font-display font-bold text-sage mb-1">INR 5,000/-</p>
                    <p class="text-sm text-gray-600">Attendance only, no presentation</p>
                </div>
            </div>
            <div class="bg-ivory rounded-lg p-4 text-sm text-gray-700">
                <p class="font-semibold mb-2">Registration fee includes:</p>
                <ul class="space-y-1">
                    <li>• Refreshment and lunch (conference day)</li>
                    <li>• Conference kits</li>
                    <li>• Certificate for participants</li>
                </ul>
                <p class="mt-3 text-xs text-gray-600">
                    <strong>Note:</strong> Registration is compulsory for all participants. At least one participant must be physically present for presentation. If a paper has more than one author, all authors need to register separately.
                </p>
            </div>
            <p class="text-sm text-gray-600 mt-4">
                For detailed submission guidelines, <a href="/docs/GETS_2026_Indian_Guidelines.pdf" target="_blank" class="text-forest hover:text-sage font-medium">download the Indian Guidelines PDF</a> or email to <a href="mailto:secretarynema2016@gmail.com" class="text-forest hover:text-sage">secretarynema2016@gmail.com</a>
            </p>
        </div>
    </section>

    {{-- Deadlines --}}
    <section id="deadlines" class="mb-12">
        <h2 class="text-2xl font-display font-semibold text-forest mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            Registration Deadlines
        </h2>

        <div class="grid md:grid-cols-2 gap-6 mb-6">
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
                            <p class="text-sm text-gray-600">Last Registration &amp; Payment Deadline for Indian Delegates</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Indonesian & General International Timeline --}}
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <div class="flex items-center gap-2 mb-4">
                    <span class="w-3 h-3 rounded-full bg-atmosphere"></span>
                    <h3 class="font-semibold text-forest">Indonesian &amp; General International Timeline</h3>
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
                            <p class="text-sm text-gray-600">Last Abstract Submission Deadline for Indonesia &amp; General International participants</p>
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
                            <p class="text-sm text-gray-600">Last Registration &amp; Payment Deadline for Indonesia &amp; General International participants</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Summit Days --}}
        <div class="bg-white rounded-xl p-6 border border-gray-200">
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
                    <p class="text-sm text-gray-600">Conference Day &ndash; Summit Plenary &amp; Parallel Sessions at Universitas Udayana (08:00 - 17:10 WITA).</p>
                </div>
                <div class="bg-gradient-to-br from-atmosphere/5 to-sage/5 rounded-lg p-5 border border-atmosphere/10">
                    <div class="flex items-center gap-3 mb-2">
                        <svg class="w-5 h-5 text-atmosphere" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <p class="font-semibold text-forest">August 25, 2026</p>
                    </div>
                    <p class="text-sm text-gray-600">Special Program &ndash; Learning Visit to su-re.co.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- After Registration -->
    <section class="mb-12">
        <h2 class="text-2xl font-display font-semibold text-forest mb-4">After Registration</h2>
        <div class="bg-white rounded-xl p-6 border border-gray-200">
            <p class="text-gray-700 mb-4">Once registered, you'll receive:</p>
            <ul class="space-y-2 text-gray-700">
                <li class="flex items-start gap-2">
                    <svg class="w-5 h-5 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span>Booking Reference - Unique identifier for your registration</span>
                </li>
                <li class="flex items-start gap-2">
                    <svg class="w-5 h-5 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span>Payment Receipt - Transaction confirmation</span>
                </li>
                <li class="flex items-start gap-2">
                    <svg class="w-5 h-5 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span>QR Code - For check-in at the venue</span>
                </li>
                <li class="flex items-start gap-2">
                    <svg class="w-5 h-5 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span>Welcome Email - Additional information and updates</span>
                </li>
            </ul>
        </div>
    </section>

    <!-- CTA -->
    <section class="mt-16">
        <div class="bg-gradient-to-r from-forest to-sage rounded-xl p-8 text-center">
            <h3 class="text-2xl font-display font-bold text-white mb-3">Ready to Register?</h3>
            <p class="text-white/90 mb-6">Join us for an unforgettable conference experience in Bali.</p>
            <a href="{{ route('conference.register') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-white text-forest font-display font-semibold rounded-full hover:bg-ivory transition-colors">
                <span>Start Registration</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </section>
</div>
@endsection
