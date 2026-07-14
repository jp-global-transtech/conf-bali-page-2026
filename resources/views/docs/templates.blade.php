@extends('layouts.docs-layout')

@section('title', 'Presentation Templates & Guidelines - GETS 2026')
@php
    $page_title = 'Presentation Templates & Guidelines';
    $seo_description = 'Official templates and technical guidelines for preparing your presentations at GETS 2026';
    $seo_keywords = 'presentation templates, oral presentation, digital poster, PowerPoint template, GETS 2026';
    $nav_prev = ['url' => route('docs.abstract'), 'title' => 'Abstract Submission'];
@endphp

@section('content')
<div class="space-y-8">
    {{-- Page Header --}}
    <div class="mb-8">
        <h1 class="text-3xl font-display font-bold text-forest mb-4">Presentation Templates &amp; Guidelines</h1>
        <p class="text-lg text-gray-600 leading-relaxed">
            Official templates and technical guidelines for preparing your presentations at the Global Environment &amp; Transition Summit (GETS 2026).
        </p>
    </div>

    {{-- Table of Contents --}}
    <div class="bg-ivory rounded-xl p-6 mb-10 border border-forest/10">
        <h2 class="text-lg font-display font-semibold text-forest mb-4">On This Page</h2>
        <ul class="space-y-2">
            <li><a href="#oral-presentation-guidelines" class="text-earth hover:text-forest flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span>Oral Presentation Guidelines</a></li>
            <li><a href="#poster-presentation-guidelines" class="text-earth hover:text-forest flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span>Poster Presentation Guidelines</a></li>
            <li><a href="#template-downloads" class="text-earth hover:text-forest flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span>Template Downloads</a></li>
            <li><a href="#technical-submission-notes" class="text-earth hover:text-forest flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span>Technical Submission Notes</a></li>
        </ul>
    </div>

    {{-- Oral Presentation Guidelines --}}
    <section id="oral-presentation-guidelines" class="mb-12 scroll-mt-24">
        <h2 class="text-2xl font-display font-semibold text-forest mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
            </svg>
            Oral Presentation Guidelines
        </h2>

        {{-- Time Allocation --}}
        <div class="bg-white rounded-xl p-6 border border-gray-200 mb-6">
            <h3 class="font-semibold text-forest mb-3">Time Allocation by Speaker Type</h3>
            <div class="grid md:grid-cols-3 gap-4">
                <div class="bg-forest/5 rounded-lg p-4 border border-forest/10">
                    <p class="text-xs text-gray-500 uppercase tracking-wider mb-1">Plenary Talks</p>
                    <p class="text-lg font-bold text-forest">30 min</p>
                    <p class="text-xs text-gray-600">25 min presentation + 5 min Q&amp;A</p>
                </div>
                <div class="bg-forest/5 rounded-lg p-4 border border-forest/10">
                    <p class="text-xs text-gray-500 uppercase tracking-wider mb-1">Invited Talks</p>
                    <p class="text-lg font-bold text-forest">30 min</p>
                    <p class="text-xs text-gray-600">25 min presentation + 5 min Q&amp;A</p>
                </div>
                <div class="bg-sage/10 rounded-lg p-4 border border-sage/20">
                    <p class="text-xs text-gray-500 uppercase tracking-wider mb-1">Contributed Talks</p>
                    <p class="text-lg font-bold text-forest">15 min</p>
                    <p class="text-xs text-gray-600">12 min presentation + 3 min Q&amp;A</p>
                </div>
            </div>
        </div>

        {{-- Technical Requirements --}}
        <div class="bg-white rounded-xl p-6 border border-gray-200 mb-6">
            <h3 class="font-semibold text-forest mb-3">Technical Requirements</h3>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3">
                            <div class="w-8 h-8 rounded-full bg-forest/10 flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-medium text-forest text-sm">Slide Aspect Ratio</p>
                                <p class="text-sm text-gray-600">Standard widescreen <strong>16:9 ratio</strong> is recommended.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="w-8 h-8 rounded-full bg-forest/10 flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-medium text-forest text-sm">Supported Formats</p>
                                <p class="text-sm text-gray-600">Microsoft PowerPoint (PPT, PPTX) or PDF.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="w-8 h-8 rounded-full bg-forest/10 flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-medium text-forest text-sm">Submission Deadline</p>
                                <p class="text-sm text-gray-600">Email final files no later than <strong>August 3, 2026</strong> to <a href="mailto:info@jptranstech.org" class="text-forest font-medium">info@jptranstech.org</a>.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3">
                            <div class="w-8 h-8 rounded-full bg-sage/10 flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-medium text-forest text-sm">On-site Setup</p>
                                <p class="text-sm text-gray-600">Bring a backup on a USB flash drive. On-site Windows PCs with Microsoft Office and Adobe Reader will be available.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="w-8 h-8 rounded-full bg-sage/10 flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M5 3v2m4 8h6m2 5H7a2 2 0 01-2-2V7a2 2 0 012-2h10a2 2 0 012 2v9a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-medium text-forest text-sm">Hardware Restrictions</p>
                                <p class="text-sm text-gray-600"><em>Personal laptops are not encouraged.</em> Rooms are equipped with computer projection system, laser pointer, and microphone.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Tips --}}
        <div class="bg-ivory rounded-xl p-6 border border-gray-200">
            <h3 class="font-semibold text-forest mb-3">Tips for Effective Oral Presentation</h3>
            <div class="grid md:grid-cols-2 gap-3">
                <div class="flex items-start gap-2 text-sm text-gray-700">
                    <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>Practice your talk extensively to fit perfectly within your allocated time slot.</span>
                </div>
                <div class="flex items-start gap-2 text-sm text-gray-700">
                    <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>Start with concise background, state research objectives, end with structured conclusions.</span>
                </div>
                <div class="flex items-start gap-2 text-sm text-gray-700">
                    <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>Engage actively with the audience&mdash;maintain eye contact and speak clearly.</span>
                </div>
                <div class="flex items-start gap-2 text-sm text-gray-700">
                    <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>Use clear fonts, high-contrast colors, and minimal text for readability.</span>
                </div>
            </div>
        </div>
    </section>

    {{-- Poster Presentation Guidelines (Digital Monitor Display) --}}
    <section id="poster-presentation-guidelines" class="mb-12 scroll-mt-24">
        <h2 class="text-2xl font-display font-semibold text-forest mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            Poster Presentation Guidelines (Digital Monitor Display)
        </h2>

        <div class="bg-atmosphere/5 rounded-xl p-4 mb-6 border border-atmosphere/20 flex items-start gap-3">
            <svg class="w-5 h-5 text-atmosphere flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <p class="text-sm text-atmosphere-800">Unlike traditional printed posters, GETS 2026 will utilize digital monitors to showcase posters during dedicated sessions.</p>
        </div>

        <div class="grid md:grid-cols-2 gap-6 mb-6">
            {{-- Specifications --}}
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <h3 class="font-semibold text-forest mb-3">Poster Specifications</h3>
                <div class="space-y-3">
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <span class="text-sm text-gray-600">Orientation</span>
                        <span class="font-semibold text-forest">Landscape (16:9)</span>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <span class="text-sm text-gray-600">Max Pages</span>
                        <span class="font-semibold text-forest">3 pages</span>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <span class="text-sm text-gray-600">Format</span>
                        <span class="font-semibold text-forest">PDF or PPT/PPTX</span>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <span class="text-sm text-gray-600">Min Font Size</span>
                        <span class="font-semibold text-forest">24 pt</span>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-amber-50 rounded-lg">
                        <span class="text-sm text-gray-600">Submission Deadline</span>
                        <span class="font-semibold text-forest">August 3, 2026</span>
                    </div>
                </div>
            </div>

            {{-- Required Content --}}
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <h3 class="font-semibold text-forest mb-3">Required Content Components</h3>
                <ul class="space-y-2 text-sm text-gray-700">
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>Official Conference Logo (placed clearly on the display)</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>Title, Author(s), and Affiliation(s)</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>Introduction, Methods, Results, and Conclusion</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>Acknowledgments and References (if applicable)</span>
                    </li>
                </ul>
            </div>
        </div>

        {{-- Poster Session Details --}}
        <div class="bg-ivory rounded-xl p-5 border border-gray-200">
            <h4 class="font-semibold text-forest mb-2">Poster Session Details</h4>
            <p class="text-sm text-gray-700">Digital posters will be displayed on dedicated screen monitors during the session. Presenters are required to stand by their digital displays during their scheduled times to discuss their work and engage in Q&amp;A with reviewers and attendees.</p>
        </div>
    </section>

    {{-- Template Downloads --}}
    <section id="template-downloads" class="mb-12 scroll-mt-24">
        <h2 class="text-2xl font-display font-semibold text-forest mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
            </svg>
            Template Downloads
        </h2>

        <div class="grid md:grid-cols-3 gap-6">
            {{-- Oral Template --}}
            <div class="bg-white rounded-xl p-6 border border-gray-200 hover:border-forest/30 transition-colors flex flex-col">
                <div class="flex-shrink-0 w-12 h-12 bg-forest/10 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="font-semibold text-forest mb-1">Oral Presentation Template</h3>
                <p class="text-sm text-gray-600 mb-4 flex-1">Official PowerPoint widescreen template with integrated conference layout, color palette, and corporate branding themes.</p>
                <div class="flex items-center justify-between">
                    <span class="text-xs text-gray-500">PPTX &bull; 16:9 &bull; 2.4 MB</span>
                    <button class="inline-flex items-center gap-1.5 px-4 py-2 bg-forest text-white text-sm font-medium rounded-lg hover:bg-sage transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                        </svg>
                        <span>Download</span>
                    </button>
                </div>
            </div>

            {{-- Digital Poster Template --}}
            <div class="bg-white rounded-xl p-6 border border-gray-200 hover:border-forest/30 transition-colors flex flex-col">
                <div class="flex-shrink-0 w-12 h-12 bg-sage/10 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="font-semibold text-forest mb-1">Digital Poster Template</h3>
                <p class="text-sm text-gray-600 mb-4 flex-1">Official multi-page landscape template tailored for monitor displays, complete with font scales and branding elements.</p>
                <div class="flex items-center justify-between">
                    <span class="text-xs text-gray-500">PPTX &bull; Landscape 16:9 &bull; 3.8 MB</span>
                    <button class="inline-flex items-center gap-1.5 px-4 py-2 bg-forest text-white text-sm font-medium rounded-lg hover:bg-sage transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                        </svg>
                        <span>Download</span>
                    </button>
                </div>
            </div>

            {{-- Conference Logo Package --}}
            <div class="bg-white rounded-xl p-6 border border-gray-200 hover:border-forest/30 transition-colors flex flex-col">
                <div class="flex-shrink-0 w-12 h-12 bg-atmosphere/10 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-atmosphere" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                    </svg>
                </div>
                <h3 class="font-semibold text-forest mb-1">Virtual Background for Online Participant</h3>
                <p class="text-sm text-gray-600 mb-4 flex-1">Official virtual background for online participants to use during virtual sessions.</p>
                <div class="flex items-center justify-between">
                    <span class="text-xs text-gray-500">ZIP &bull; PNG &amp; Vector &bull; 3.2 MB</span>
                    <button class="inline-flex items-center gap-1.5 px-4 py-2 bg-forest text-white text-sm font-medium rounded-lg hover:bg-sage transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                        </svg>
                        <span>Download</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    {{-- Technical Submission Notes --}}
    <section id="technical-submission-notes" class="mb-12 scroll-mt-24">
        <h2 class="text-2xl font-display font-semibold text-forest mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
            Technical Submission Notes
        </h2>
        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <div class="flex items-center gap-2 mb-3">
                    <svg class="w-5 h-5 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <h3 class="font-semibold text-forest">File Submission</h3>
                </div>
                <p class="text-sm text-gray-700">All presenters are highly encouraged to upload their finalized files to the conference submission portal backend or send them directly via email to <a href="mailto:info@jptranstech.org" class="text-forest font-medium">info@jptranstech.org</a>.</p>
            </div>
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <div class="flex items-center gap-2 mb-3">
                    <svg class="w-5 h-5 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <h3 class="font-semibold text-forest">Special Requirements</h3>
                </div>
                <p class="text-sm text-gray-700">If you require specific audio-visual adjustments or alternative accessible formats, please notify the organizing committee at least <strong>2 weeks before</strong> the conference date.</p>
            </div>

        </div>
    </section>

    {{-- Contact CTA --}}
    <section class="mt-16">
        <div class="bg-gradient-to-r from-forest to-sage rounded-xl p-8 text-center">
            <h3 class="text-2xl font-display font-bold text-white mb-3">Need Help With Your Presentation?</h3>
            <p class="text-white/90 mb-6">Contact our support team if you have questions about templates or presentation guidelines.</p>
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
