@extends('layouts.docs-layout')

@section('title', 'Conference Guidelines - GETS 2026')
@php
    $page_title = 'Conference Guidelines';
    $seo_description = 'Complete guidelines for the Global Environment & Transition Summit 2026 (GETS 2026)';
    $seo_keywords = 'conference guidelines, participation guidelines, GETS 2026 conference';
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
            <li><a href="#important-dates" class="text-earth hover:text-forest flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span>Important Dates</a></li>
            <li><a href="#submission" class="text-earth hover:text-forest flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span>Submission Guidelines</a></li>
            <li><a href="#presentation" class="text-earth hover:text-forest flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span>Presentation Guidelines</a></li>
            <li><a href="#attendance" class="text-earth hover:text-forest flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span>Attendance Policy</a></li>
            <li><a href="#code-of-conduct" class="text-earth hover:text-forest flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span>Code of Conduct</a></li>
        </ul>
    </div>

    {{-- Conference Overview --}}
    <section id="overview" class="mb-12">
        <h2 class="text-2xl font-display font-semibold text-forest mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            Conference Overview
        </h2>
        <div class="bg-white rounded-xl p-6 border border-gray-200">
            <p class="text-gray-700 mb-4">The <strong>Global Environment & Transition Summit 2026 (GETS 2026)</strong> brings together scholars, policymakers, industry leaders, and environmental experts to address pressing climate challenges through interdisciplinary collaboration.</p>

            <div class="grid md:grid-cols-3 gap-4 mt-6">
                <div class="bg-forest/5 rounded-lg p-4">
                    <p class="text-sm text-gray-500 mb-1">Date</p>
                    <p class="font-semibold text-forest">August 24, 2026</p>
                </div>
                <div class="bg-forest/5 rounded-lg p-4">
                    <p class="text-sm text-gray-500 mb-1">Location</p>
                    <p class="font-semibold text-forest">Universitas Udayana, Bali</p>
                </div>
                <div class="bg-forest/5 rounded-lg p-4">
                    <p class="text-sm text-gray-500 mb-1">Format</p>
                    <p class="font-semibold text-forest">In-Person & Hybrid</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Important Dates --}}
    <section id="important-dates" class="mb-12">
        <h2 class="text-2xl font-display font-semibold text-forest mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            Important Dates
        </h2>
        <div class="bg-white rounded-xl p-6 border border-gray-200">
            <ul class="space-y-3 text-gray-700">
                <li class="flex items-start gap-3">
                    <div class="w-10 h-10 rounded-full bg-forest/10 flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div>
                        <p class="font-semibold text-forest">19th August 2026</p>
                        <p class="text-sm">Call for Abstract Due Date - Deadline for abstract submission from researchers worldwide.</p>
                    </div>
                </li>
                <li class="flex items-start gap-3">
                    <div class="w-10 h-10 rounded-full bg-forest/10 flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </div>
                    <div>
                        <p class="font-semibold text-forest">20th August 2026</p>
                        <p class="text-sm">Notification of Acceptance - Acceptance notification will be sent to corresponding authors.</p>
                    </div>
                </li>
                <li class="flex items-start gap-3">
                    <div class="w-10 h-10 rounded-full bg-forest/10 flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div>
                        <p class="font-semibold text-forest">24th August 2026</p>
                        <p class="text-sm">Conference Day - GETS 2026 Bali International Conference begins.</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    {{-- Submission Guidelines --}}
    <section id="submission" class="mb-12">
        <h2 class="text-2xl font-display font-semibold text-forest mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
            Abstract Submission Guidelines
        </h2>
        <div class="bg-white rounded-xl p-6 border border-gray-200">
            <div class="space-y-4">
                <div>
                    <h3 class="font-semibold text-forest mb-2">Abstract Requirements</h3>
                    <ul class="list-disc list-inside space-y-1 text-gray-700 ml-4">
                        <li>Maximum 250 words</li>
                        <li>Must include: Title, Authors, Affiliations, Keywords (3-5)</li>
                        <li>Indicate preferred presentation type: Oral or Poster</li>
                        <li>Select from conference research themes</li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-semibold text-forest mb-2">Submission Process</h3>
                    <ol class="list-decimal list-inside space-y-1 text-gray-700 ml-4">
                        <li>Create account (if not already registered)</li>
                        <li>Complete abstract submission form</li>
                        <li>Upload presentation template (if applicable)</li>
                        <li>Submit before deadline: July 15, 2026</li>
                        <li>Receive notification by: July 30, 2026</li>
                    </ol>
                </div>
                <div class="bg-sage/10 rounded-lg p-4">
                    <p class="text-sm text-forest"><strong>Note:</strong> All submissions will be peer-reviewed. Accepted abstracts will be published in the conference proceedings with ISBN.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Presentation Guidelines --}}
    <section id="presentation" class="mb-12">
        <h2 class="text-2xl font-display font-semibold text-forest mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
            </svg>
            Presentation Guidelines
        </h2>
        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <h3 class="font-semibold text-forest mb-3">Oral Presentations</h3>
                <ul class="space-y-2 text-sm text-gray-700">
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>15 minutes + 5 minutes Q&A</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>16:9 aspect ratio for slides</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>Bring presentation on USB drive</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>Laptop provided if needed</span>
                    </li>
                </ul>
            </div>
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <h3 class="font-semibold text-forest mb-3">Poster Presentations</h3>
                <ul class="space-y-2 text-sm text-gray-700">
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-atmosphere flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>Size: A0 (841 × 1189 mm)</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-atmosphere flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>Portrait orientation recommended</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-atmosphere flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>Include: Title, Authors, Affiliation</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-atmosphere flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>Poster sessions with Q&A</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    {{-- Attendance Policy --}}
    <section id="attendance" class="mb-12">
        <h2 class="text-2xl font-display font-semibold text-forest mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            Attendance Policy
        </h2>
        <div class="bg-white rounded-xl p-6 border border-gray-200">
            <div class="space-y-4 text-gray-700">
                <p>All registered participants are expected to attend the full conference program. The opening and closing ceremonies are mandatory for all attendees.</p>
                <div class="bg-atmosphere/5 rounded-lg p-4">
                    <h4 class="font-semibold text-forest mb-2">Certificate of Attendance</h4>
                    <p class="text-sm">Certificates will be issued to participants who attend at least 80% of the conference sessions and complete the feedback form.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Code of Conduct --}}
    <section id="code-of-conduct" class="mb-12">
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
                        <ul class="space-y-1 text-sm">
                            <li>• Be respectful and inclusive</li>
                            <li>• Listen actively to different perspectives</li>
                            <li>• Constructive feedback and dialogue</li>
                            <li>• Respect privacy and confidentiality</li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-semibold text-forest mb-2">Unacceptable Behavior</h4>
                        <ul class="space-y-1 text-sm">
                            <li>• Harassment or discrimination</li>
                            <li>• Disruptive behavior during sessions</li>
                            <li>• Unauthorized recording or photography</li>
                            <li>• Violation of intellectual property rights</li>
                        </ul>
                    </div>
                </div>
                <p class="text-sm text-gray-600 mt-4">Reports of misconduct should be directed to the conference organizing committee. All reports will be handled confidentially.</p>
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
@endsection
