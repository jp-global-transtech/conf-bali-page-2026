@extends('layouts.docs-layout')

@section('title', 'Presentation Templates - Bali 2026')
@php
    $page_title = 'Presentation Templates';
    $seo_description = 'Download official presentation templates for oral and poster presentations at the Bali 2026 International Conference';
    $seo_keywords = 'presentation templates, poster template, PowerPoint template, Bali 2026 conference';
    $nav_prev = ['url' => route('docs.abstract'), 'title' => 'Abstract Submission'];
@endphp

@section('content')
<div class="space-y-8">
    {{-- Page Header --}}
    <div class="mb-8">
        <h1 class="text-3xl font-display font-bold text-forest mb-4">Presentation Templates</h1>
        <p class="text-xl text-gray-600 leading-relaxed">
            Official templates and guidelines for preparing your presentations at the Bali 2026 International Conference.
        </p>
    </div>

    {{-- Table of Contents --}}
    <div class="bg-ivory rounded-xl p-6 mb-10 border border-forest/10">
        <h2 class="text-lg font-display font-semibold text-forest mb-4">On This Page</h2>
        <ul class="space-y-2">
            <li><a href="#oral-presentations" class="text-earth hover:text-forest flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span>Oral Presentation Guidelines</a></li>
            <li><a href="#poster-presentations" class="text-earth hover:text-forest flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span>Poster Presentation Guidelines</a></li>
            <li><a href="#downloads" class="text-earth hover:text-forest flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span>Template Downloads</a></li>
            <li><a href="#brand-guidelines" class="text-earth hover:text-forest flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span>Brand Guidelines</a></li>
        </ul>
    </div>

    {{-- Oral Presentation Guidelines --}}
    <section id="oral-presentations" class="mb-12">
        <h2 class="text-2xl font-display font-semibold text-forest mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
            </svg>
            Oral Presentation Guidelines
        </h2>
        <div class="bg-white rounded-xl p-6 border border-gray-200">
            <div class="grid md:grid-cols-2 gap-6 mb-6">
                <div>
                    <h3 class="font-semibold text-forest mb-3">Time Allocation</h3>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-600">Presentation</span>
                            <span class="font-semibold text-forest">15 minutes</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-forest h-2 rounded-full" style="width: 75%"></div>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-600">Q&A Session</span>
                            <span class="font-semibold text-sage">5 minutes</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-sage h-2 rounded-full" style="width: 25%"></div>
                        </div>
                        <div class="flex items-center justify-between pt-2 border-t">
                            <span class="text-sm text-gray-600">Total Slot</span>
                            <span class="font-bold text-forest">20 minutes</span>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="font-semibold text-forest mb-3">Technical Requirements</h3>
                    <ul class="space-y-2 text-sm text-gray-700">
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Aspect ratio: 16:9</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Format: PowerPoint or PDF</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Bring on USB drive as backup</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Laptop & projector provided</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Test equipment during break</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="bg-atmosphere/5 rounded-lg p-4">
                <h4 class="font-semibold text-forest mb-2">Presentation Tips</h4>
                <ul class="text-sm text-gray-700 space-y-1">
                    <li>• Aim for 1 slide per minute maximum</li>
                    <li>• Use high-quality images and diagrams</li>
                    <li>• Keep text minimal and readable (24pt minimum)</li>
                    <li>• Include conference branding on title and closing slides</li>
                    <li>• Practice your timing beforehand</li>
                </ul>
            </div>
        </div>
    </section>

    {{-- Poster Presentation Guidelines --}}
    <section id="poster-presentations" class="mb-12">
        <h2 class="text-2xl font-display font-semibold text-forest mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
            Poster Presentation Guidelines
        </h2>
        <div class="bg-white rounded-xl p-6 border border-gray-200">
            <div class="grid md:grid-cols-2 gap-6 mb-6">
                <div>
                    <h3 class="font-semibold text-forest mb-3">Poster Specifications</h3>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                            <span class="text-sm text-gray-600">Size</span>
                            <span class="font-semibold text-forest">A0 (841 × 1189 mm)</span>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                            <span class="text-sm text-gray-600">Orientation</span>
                            <span class="font-semibold text-forest">Portrait (recommended)</span>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                            <span class="text-sm text-gray-600">Resolution</span>
                            <span class="font-semibold text-forest">150 DPI minimum</span>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                            <span class="text-sm text-gray-600">Format</span>
                            <span class="font-semibold text-forest">PDF or high-res image</span>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="font-semibold text-forest mb-3">Required Content</h3>
                    <ul class="space-y-2 text-sm text-gray-700">
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Conference logo (top banner)</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Title, authors & affiliations</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Introduction/Background</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Methods & Results</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Conclusions & References</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="bg-sage/10 rounded-lg p-4">
                <h4 class="font-semibold text-forest mb-2">Poster Session Details</h4>
                <p class="text-sm text-gray-700">Posters will be displayed during dedicated poster sessions. Presenters are expected to be present at their posters for discussion and Q&A. Thumb tacks and mounting materials will be provided.</p>
            </div>
        </div>
    </section>

    {{-- Template Downloads --}}
    <section id="downloads" class="mb-12">
        <h2 class="text-2xl font-display font-semibold text-forest mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
            </svg>
            Template Downloads
        </h2>
        <div class="grid md:grid-cols-2 gap-6">
            {{-- PowerPoint Template --}}
            <div class="bg-white rounded-xl p-6 border border-gray-200 hover:border-forest/30 transition-colors">
                <div class="flex items-start gap-4">
                    <div class="flex-shrink-0 w-12 h-12 bg-forest/10 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-semibold text-forest mb-1">Oral Presentation Template</h3>
                        <p class="text-sm text-gray-600 mb-3">Official PowerPoint template with conference branding (16:9)</p>
                        <div class="flex items-center gap-2">
                            <button class="inline-flex items-center gap-2 px-4 py-2 bg-forest text-white text-sm font-medium rounded-lg hover:bg-sage transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                </svg>
                                <span>Download PPTX</span>
                            </button>
                            <span class="text-xs text-gray-500">2.4 MB</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Poster Template --}}
            <div class="bg-white rounded-xl p-6 border border-gray-200 hover:border-forest/30 transition-colors">
                <div class="flex items-start gap-4">
                    <div class="flex-shrink-0 w-12 h-12 bg-sage/10 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-semibold text-forest mb-1">Poster Template</h3>
                        <p class="text-sm text-gray-600 mb-3">A0 poster template with conference branding and layout guide</p>
                        <div class="flex items-center gap-2">
                            <button class="inline-flex items-center gap-2 px-4 py-2 bg-forest text-white text-sm font-medium rounded-lg hover:bg-sage transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                </svg>
                                <span>Download PPTX</span>
                            </button>
                            <span class="text-xs text-gray-500">5.1 MB</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @*
        {{-- PDF Versions --}}
        <div class="mt-6 p-4 bg-atmosphere/5 rounded-lg border border-atmosphere/20">
            <p class="text-sm text-gray-700"><strong>Note:</strong> PDF versions are available upon request. Contact {{ config('conference.support_email') }} for alternative formats.</p>
        </div>
        *@
    </section>

    {{-- Brand Guidelines --}}
    <section id="brand-guidelines" class="mb-12">
        <h2 class="text-2xl font-display font-semibold text-forest mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
            </svg>
            Brand Guidelines
        </h2>
        <div class="bg-white rounded-xl p-6 border border-gray-200">
            <div class="mb-6">
                <h3 class="font-semibold text-forest mb-3">Conference Colors</h3>
                <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
                    <div class="text-center">
                        <div class="w-full h-20 rounded-lg mb-2" style="background-color: #2D5A27"></div>
                        <p class="text-sm font-medium text-gray-700">Forest</p>
                        <p class="text-xs text-gray-500">#2D5A27</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-20 rounded-lg mb-2" style="background-color: #6B8E23"></div>
                        <p class="text-sm font-medium text-gray-700">Sage</p>
                        <p class="text-xs text-gray-500">#6B8E23</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-20 rounded-lg mb-2" style="background-color: #8B7355"></div>
                        <p class="text-sm font-medium text-gray-700">Earth</p>
                        <p class="text-xs text-gray-500">#8B7355</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-20 rounded-lg mb-2" style="background-color: #87CEEB"></div>
                        <p class="text-sm font-medium text-gray-700">Atmosphere</p>
                        <p class="text-xs text-gray-500">#87CEEB</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-20 rounded-lg mb-2" style="background-color: #D4A574"></div>
                        <p class="text-sm font-medium text-gray-700">Ivory</p>
                        <p class="text-xs text-gray-500">#D4A574</p>
                    </div>
                </div>
            </div>

            <div class="border-t pt-6">
                <h3 class="font-semibold text-forest mb-3">Logo Usage</h3>
                <ul class="space-y-2 text-sm text-gray-700">
                    <li>• Include the conference logo on the title slide/header</li>
                    <li>• Maintain sufficient clear space around the logo</li>
                    <li>• Do not stretch, distort, or modify the logo proportions</li>
                    <li>• Use light logo on dark backgrounds, dark logo on light backgrounds</li>
                    <li>• Contact organizers for high-resolution logo files</li>
                </ul>
            </div>
        </div>
    </section>

    {{-- Support CTA --}}
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
