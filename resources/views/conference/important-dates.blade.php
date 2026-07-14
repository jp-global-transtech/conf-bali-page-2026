@extends('layouts.conference')

@section('content')
<div class="min-h-screen bg-gray-50 pt-20 pb-12">
    <!-- Header -->
    <div class="bg-white border-b border-gray-200">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 py-8">
            <a href="{{ route('conference.landing') }}" class="text-blue-900 hover:text-blue-700 mb-4 inline-block">&larr; Back to Conference Home</a>
            <h1 class="text-3xl sm:text-4xl font-bold text-gray-900">Important Dates</h1>
            <p class="text-gray-600 mt-2">Mark your calendar with these important conference milestones for GETS 2026</p>
        </div>
    </div>

    <!-- Important Dates Content -->
    <div class="max-w-4xl mx-auto px-4 sm:px-6 py-8">

        {{-- Indian Delegates Section --}}
        <div class="mb-12">
            <div class="bg-gradient-to-br from-orange-50 to-amber-50 rounded-2xl p-6 md:p-8 border border-orange-200">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-12 h-12 bg-orange-500 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-gray-900">Indian Delegates</h2>
                        <p class="text-gray-600">Coordinated by NEMA (North Eastern Management Association)</p>
                    </div>
                </div>

                <p class="text-gray-700 mb-6">
                    Indian delegates are coordinated through NEMA. The following dates are specifically for Indian participants submitting abstracts and registering for GETS 2026.
                </p>

                <!-- Timeline -->
                <div class="space-y-4">
                    {{-- Abstract Submission --}}
                    <div class="bg-white rounded-xl p-5 border border-orange-200 shadow-sm">
                        <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-4">
                            <div class="flex-1">
                                <div class="flex items-center gap-2 mb-2">
                                    <span class="inline-flex items-center px-3 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">
                                        Deadline
                                    </span>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900">Abstract Submission</h3>
                                <p class="text-sm text-gray-600 mt-1">For Presenters / Authors</p>
                                <div class="flex items-center gap-2 mt-3 text-sm">
                                    <svg class="w-4 h-4 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <span class="font-semibold text-orange-600">15 July 2026</span>
                                </div>
                            </div>
                            <a href="mailto:secretarynema2016@gmail.com" class="inline-flex items-center gap-2 px-4 py-2 text-sm border border-orange-300 rounded-lg hover:bg-orange-50 transition-colors text-orange-700">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                Submit via Email
                            </a>
                        </div>
                    </div>

                    {{-- Registration Deadline --}}
                    <div class="bg-white rounded-xl p-5 border border-orange-200 shadow-sm">
                        <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-4">
                            <div class="flex-1">
                                <div class="flex items-center gap-2 mb-2">
                                    <span class="inline-flex items-center px-3 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">
                                        Deadline
                                    </span>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900">Registration Deadline</h3>
                                <p class="text-sm text-gray-600 mt-1">For All Delegates</p>
                                <div class="flex items-center gap-2 mt-3 text-sm">
                                    <svg class="w-4 h-4 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <span class="font-semibold text-orange-600">25 July 2026</span>
                                </div>
                            </div>
                            <a href="/docs/GETS_2026_Indian_Guidelines.pdf" target="_blank" class="inline-flex items-center gap-2 px-4 py-2 text-sm border border-orange-300 rounded-lg hover:bg-orange-50 transition-colors text-orange-700">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                Download Guidelines
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Registration Fees Info --}}
                <div class="mt-6 p-4 bg-white rounded-lg border border-orange-100">
                    <h4 class="font-semibold text-gray-900 mb-3">Registration Fees for Indian Nationals</h4>
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div class="flex justify-between items-center p-3 bg-orange-50 rounded-lg">
                            <div>
                                <p class="font-medium text-gray-900">Paper Presenting Authors/Delegates</p>
                                <p class="text-xs text-gray-600">Full conference access with presentation</p>
                            </div>
                            <span class="text-lg font-bold text-orange-600">INR 10,000/-</span>
                        </div>
                        <div class="flex justify-between items-center p-3 bg-orange-50 rounded-lg">
                            <div>
                                <p class="font-medium text-gray-900">Non-Presenting Participant</p>
                                <p class="text-xs text-gray-600">Attendance only, no presentation</p>
                            </div>
                            <span class="text-lg font-bold text-orange-600">INR 5,000/-</span>
                        </div>
                    </div>
                    <p class="text-xs text-gray-600 mt-3">
                        <strong>Included:</strong> Refreshment and lunch (conference day), conference kits, and certificate. Registration is compulsory for all participants.
                    </p>
                </div>
            </div>
        </div>

        {{-- Indonesia & International Participants Section --}}
        <div class="mb-12">
            <div class="bg-gradient-to-br from-forest/5 to-sage/5 rounded-2xl p-6 md:p-8 border border-forest/20">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-12 h-12 bg-forest rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-gray-900">Indonesia & International Participants</h2>
                        <p class="text-gray-600">Direct Registration through GETS 2026 Portal</p>
                    </div>
                </div>

                <p class="text-gray-700 mb-6">
                    Participants from Indonesia and other international countries can register directly through the official GETS 2026 registration portal. Submission guidelines, registration details, and important updates are available below.
                </p>

                <div class="grid sm:grid-cols-2 gap-4">
                    <a href="{{ route('docs.registration') }}" class="bg-white rounded-xl p-5 border border-forest/10 hover:border-forest/30 transition-all hover:shadow-md">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 bg-forest/10 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                            <h3 class="font-semibold text-gray-900">Registration Guide</h3>
                        </div>
                        <p class="text-sm text-gray-600">Step-by-step guide for conference registration</p>
                    </a>

                    <a href="{{ route('docs.abstract') }}" class="bg-white rounded-xl p-5 border border-forest/10 hover:border-forest/30 transition-all hover:shadow-md">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 bg-sage/10 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            </div>
                            <h3 class="font-semibold text-gray-900">Abstract Submission</h3>
                        </div>
                        <p class="text-sm text-gray-600">Guidelines for submitting your abstract</p>
                    </a>

                    <a href="{{ route('docs.payment') }}" class="bg-white rounded-xl p-5 border border-forest/10 hover:border-forest/30 transition-all hover:shadow-md">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 bg-atmosphere/10 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-atmosphere" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v4a3 3 0 003 3z" />
                                </svg>
                            </div>
                            <h3 class="font-semibold text-gray-900">Payment Information</h3>
                        </div>
                        <p class="text-sm text-gray-600">Payment methods, fees, and invoicing</p>
                    </a>

                    <a href="{{ route('conference.call-for-abstract') }}" class="bg-white rounded-xl p-5 border border-forest/10 hover:border-forest/30 transition-all hover:shadow-md">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 bg-tech/10 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-tech" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </div>
                            <h3 class="font-semibold text-gray-900">Call for Abstract</h3>
                        </div>
                        <p class="text-sm text-gray-600">Submit your abstract for GETS 2026</p>
                    </a>
                </div>
            </div>
        </div>

        {{-- Conference Day Section --}}
        <div>
            <div class="bg-gradient-to-br from-forest to-sage rounded-2xl p-6 md:p-8 text-white">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold">Conference Day</h2>
                        <p class="text-white/80">24 August 2026</p>
                    </div>
                </div>

                <div class="grid md:grid-cols-3 gap-6 mb-6">
                    <div class="bg-white/10 rounded-xl p-5">
                        <p class="text-xs text-white/70 mb-2">Format</p>
                        <p class="text-lg font-semibold">Hybrid Conference</p>
                        <p class="text-sm text-white/70 mt-1">On-site & Online Participation</p>
                    </div>
                    <div class="bg-white/10 rounded-xl p-5">
                        <p class="text-xs text-white/70 mb-2">Venue</p>
                        <p class="text-lg font-semibold">Lecture Building, Universitas Udayana</p>
                        
                    </div>
                    <div class="bg-white/10 rounded-xl p-5">
                        <p class="text-xs text-white/70 mb-2">Location</p>
                        <p class="text-lg font-semibold">Bali, Indonesia</p>
                        
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('conference.venue') }}" class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-white text-forest font-semibold rounded-xl hover:bg-white/90 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span>View Venue Details</span>
                    </a>
                    <a href="{{ route('conference.schedule') }}" class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-white/20 text-white font-semibold rounded-xl hover:bg-white/30 transition-colors border border-white/30">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span>View Full Schedule</span>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
