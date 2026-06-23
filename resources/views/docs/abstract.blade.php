@extends('layouts.docs-layout')

@section('title', 'Abstract Submission - GETS 2026')
@php
    $page_title = 'Abstract Submission';
    $seo_description = 'Guidelines and requirements for submitting abstracts to the Global Environment & Transition Summit 2026 (GETS 2026)';
    $seo_keywords = 'abstract submission, call for papers, GETS 2026 conference, research themes';
    $nav_prev = ['url' => route('docs.guidelines'), 'title' => 'Conference Guidelines'];
    $nav_next = ['url' => route('docs.templates'), 'title' => 'Presentation Templates'];
@endphp

@section('content')
<div class="space-y-8">
    {{-- Page Header --}}
    <div class="mb-8">
        <h1 class="text-3xl font-display font-bold text-forest mb-4">Abstract Submission</h1>
        <p class="text-xl text-gray-600 leading-relaxed">
            Submit your abstract for consideration at the Global Environment & Transition Summit 2026 (GETS 2026).
        </p>
    </div>

    {{-- Submission Timeline --}}
    <div class="bg-gradient-to-r from-forest/5 to-sage/5 rounded-xl p-6 mb-10 border border-forest/10">
        <h2 class="text-lg font-display font-semibold text-forest mb-4">Important Dates</h2>
        <div class="grid md:grid-cols-3 gap-4">
            <div class="bg-white rounded-lg p-4">
                <div class="flex items-center gap-2 mb-2">
                    <div class="w-2 h-2 bg-forest rounded-full"></div>
                    <span class="text-sm text-gray-500">Abstract Deadline</span>
                </div>
                <p class="font-semibold text-forest">July 15, 2026</p>
                <p class="text-xs text-gray-500 mt-1">23:59 WIB (UTC+7)</p>
            </div>
            <div class="bg-white rounded-lg p-4">
                <div class="flex items-center gap-2 mb-2">
                    <div class="w-2 h-2 bg-sage rounded-full"></div>
                    <span class="text-sm text-gray-500">Notification</span>
                </div>
                <p class="font-semibold text-forest">July 30, 2026</p>
                <p class="text-xs text-gray-500 mt-1">Via email</p>
            </div>
            <div class="bg-white rounded-lg p-4">
                <div class="flex items-center gap-2 mb-2">
                    <div class="w-2 h-2 bg-atmosphere rounded-full"></div>
                    <span class="text-sm text-gray-500">Registration</span>
                </div>
                <p class="font-semibold text-forest">By August 15, 2026</p>
                <p class="text-xs text-gray-500 mt-1">For presenters</p>
            </div>
        </div>
    </div>

    {{-- Table of Contents --}}
    <div class="bg-ivory rounded-xl p-6 mb-10 border border-forest/10">
        <h2 class="text-lg font-display font-semibold text-forest mb-4">On This Page</h2>
        <ul class="space-y-2">
            <li><a href="#themes" class="text-earth hover:text-forest flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span>Conference Themes</a></li>
            <li><a href="#requirements" class="text-earth hover:text-forest flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span>Submission Requirements</a></li>
            <li><a href="#format" class="text-earth hover:text-forest flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span>Abstract Format</a></li>
            <li><a href="#process" class="text-earth hover:text-forest flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span>Submission Process</a></li>
            <li><a href="#review" class="text-earth hover:text-forest flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span>Review Process</a></li>
            <li><a href="#faqs" class="text-earth hover:text-forest flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span>Frequently Asked Questions</a></li>
        </ul>
    </div>

    {{-- Conference Themes --}}
    <section id="themes" class="mb-12">
        <h2 class="text-2xl font-display font-semibold text-forest mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
            </svg>
            Conference Themes
        </h2>
        <div class="bg-white rounded-xl p-6 border border-gray-200">
            <p class="text-gray-700 mb-6">We welcome submissions addressing the following conference themes within the context of climate resilience and green technology:</p>
            <div class="grid md:grid-cols-2 gap-4">
                <div class="border border-forest/20 rounded-lg p-4 hover:border-forest/40 transition-colors">
                    <h3 class="font-semibold text-forest mb-2">Climate Resilience</h3>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• Climate adaptation strategies</li>
                        <li>• Disaster risk reduction</li>
                        <li>• Coastal and urban resilience</li>
                        <li>• Community-based adaptation</li>
                    </ul>
                </div>
                <div class="border border-forest/20 rounded-lg p-4 hover:border-forest/40 transition-colors">
                    <h3 class="font-semibold text-forest mb-2">Green Technology</h3>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• Renewable energy systems</li>
                        <li>• Sustainable transportation</li>
                        <li>• Waste management solutions</li>
                        <li>• Green building technologies</li>
                    </ul>
                </div>
                <div class="border border-forest/20 rounded-lg p-4 hover:border-forest/40 transition-colors">
                    <h3 class="font-semibold text-forest mb-2">Environmental Science</h3>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• Biodiversity conservation</li>
                        <li>• Ecosystem management</li>
                        <li>• Pollution control</li>
                        <li>• Sustainable agriculture</li>
                    </ul>
                </div>
                <div class="border border-forest/20 rounded-lg p-4 hover:border-forest/40 transition-colors">
                    <h3 class="font-semibold text-forest mb-2">Policy & Governance</h3>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• Climate policy frameworks</li>
                        <li>• International cooperation</li>
                        <li>• Sustainable development goals</li>
                        <li>• Environmental governance</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- Submission Requirements --}}
    <section id="requirements" class="mb-12">
        <h2 class="text-2xl font-display font-semibold text-forest mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            Submission Requirements
        </h2>
        <div class="bg-white rounded-xl p-6 border border-gray-200">
            <div class="space-y-6">
                <div>
                    <h3 class="font-semibold text-forest mb-3">Eligibility</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Open to researchers, academics, practitioners, and graduate students</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Original, unpublished work only</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Work must be relevant to conference themes</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold text-forest mb-3">Presentation Types</h3>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="bg-forest/5 rounded-lg p-4">
                            <h4 class="font-medium text-forest mb-2">Oral Presentation</h4>
                            <p class="text-sm text-gray-600">15-minute presentation followed by 5-minute Q&A session</p>
                        </div>
                        <div class="bg-sage/10 rounded-lg p-4">
                            <h4 class="font-medium text-forest mb-2">Poster Presentation</h4>
                            <p class="text-sm text-gray-600">Visual display scheduled in dedicated poster sessions</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Abstract Format --}}
    <section id="format" class="mb-12">
        <h2 class="text-2xl font-display font-semibold text-forest mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
            </svg>
            Abstract Format
        </h2>
        <div class="bg-white rounded-xl p-6 border border-gray-200">
            <div class="space-y-4">
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <h3 class="font-semibold text-forest mb-2">Content Requirements</h3>
                        <ul class="space-y-2 text-sm text-gray-700">
                            <li><strong>Length:</strong> Maximum 250 words</li>
                            <li><strong>Title:</strong> Concise and descriptive</li>
                            <li><strong>Authors:</strong> All contributors listed</li>
                            <li><strong>Affiliations:</strong> Institution for each author</li>
                            <li><strong>Keywords:</strong> 3-5 relevant keywords</li>
                            <li><strong>Theme:</strong> Select from conference themes</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-semibold text-forest mb-2">Structure</h3>
                        <ul class="space-y-2 text-sm text-gray-700">
                            <li><strong>Background:</strong> Brief context</li>
                            <li><strong>Objective:</strong> Clear research question</li>
                            <li><strong>Methods:</strong> Approach used</li>
                            <li><strong>Results:</strong> Key findings</li>
                            <li><strong>Conclusion:</strong> Implications</li>
                        </ul>
                    </div>
                </div>

                <div class="bg-sage/10 rounded-lg p-4">
                    <h4 class="font-semibold text-forest mb-2">Writing Guidelines</h4>
                    <ul class="space-y-1 text-sm text-gray-700">
                        <li>• Use clear, concise language</li>
                        <li>• Avoid technical jargon where possible</li>
                        <li>• Define abbreviations on first use</li>
                        <li>• Include no more than 5 references (optional)</li>
                        <li>• Proofread carefully before submission</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- Submission Process --}}
    <section id="process" class="mb-12">
        <h2 class="text-2xl font-display font-semibold text-forest mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
            </svg>
            Submission Process
        </h2>
        <div class="bg-white rounded-xl p-6 border border-gray-200">
            <div class="space-y-4">
                <ol class="space-y-4">
                    <li class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 rounded-full bg-forest text-white flex items-center justify-center font-semibold">1</div>
                        <div>
                            <h4 class="font-semibold text-forest">Prepare Your Abstract</h4>
                            <p class="text-sm text-gray-600">Write your abstract following the format guidelines above. Keep it under 250 words.</p>
                        </div>
                    </li>
                    <li class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 rounded-full bg-forest text-white flex items-center justify-center font-semibold">2</div>
                        <div>
                            <h4 class="font-semibold text-forest">Complete Online Form</h4>
                            <p class="text-sm text-gray-600">Fill out the submission form with your details, co-authors, and abstract information.</p>
                        </div>
                    </li>
                    <li class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 rounded-full bg-forest text-white flex items-center justify-center font-semibold">3</div>
                        <div>
                            <h4 class="font-semibold text-forest">Select Presentation Preference</h4>
                            <p class="text-sm text-gray-600">Indicate your preference for oral or poster presentation. We'll try to accommodate.</p>
                        </div>
                    </li>
                    <li class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 rounded-full bg-forest text-white flex items-center justify-center font-semibold">4</div>
                        <div>
                            <h4 class="font-semibold text-forest">Submit Before Deadline</h4>
                            <p class="text-sm text-gray-600">Complete your submission by July 15, 2026. Late submissions will not be accepted.</p>
                        </div>
                    </li>
                    <li class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 rounded-full bg-sage text-white flex items-center justify-center font-semibold">5</div>
                        <div>
                            <h4 class="font-semibold text-forest">Await Notification</h4>
                            <p class="text-sm text-gray-600">You'll receive acceptance notification via email by July 30, 2026.</p>
                        </div>
                    </li>
                </ol>
            </div>
        </div>
    </section>

    {{-- Review Process --}}
    <section id="review" class="mb-12">
        <h2 class="text-2xl font-display font-semibold text-forest mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
            </svg>
            Review Process
        </h2>
        <div class="bg-white rounded-xl p-6 border border-gray-200">
            <div class="space-y-4 text-gray-700">
                <p>All submitted abstracts undergo a blind peer review process by the scientific committee. Reviewers evaluate submissions based on:</p>
                <div class="grid md:grid-cols-2 gap-4 mt-4">
                    <div class="bg-gray-50 rounded-lg p-4">
                        <h4 class="font-medium text-forest mb-2">Evaluation Criteria</h4>
                        <ul class="text-sm space-y-1">
                            <li>• Relevance to conference themes</li>
                            <li>• Scientific rigor and methodology</li>
                            <li>• Originality and innovation</li>
                            <li>• Clarity of presentation</li>
                            <li>• Potential impact</li>
                        </ul>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-4">
                        <h4 class="font-medium text-forest mb-2">Possible Outcomes</h4>
                        <ul class="text-sm space-y-1">
                            <li>• Accept as oral presentation</li>
                            <li>• Accept as poster presentation</li>
                            <li>• Accept with revisions</li>
                            <li>• Decline</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQs --}}
    <section id="faqs" class="mb-12">
        <h2 class="text-2xl font-display font-semibold text-forest mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            Frequently Asked Questions
        </h2>
        <div class="space-y-4">
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <h3 class="font-semibold text-forest mb-2">Can I submit multiple abstracts?</h3>
                <p class="text-gray-700 text-sm">Yes, you may submit up to two abstracts as presenting author. Additional submissions must have a different presenting author.</p>
            </div>
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <h3 class="font-semibold text-forest mb-2">What if I need to withdraw my abstract?</h3>
                <p class="text-gray-700 text-sm">Please notify us immediately if you need to withdraw. Withdrawals after July 30, 2026 may affect future participation.</p>
            </div>
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <h3 class="font-semibold text-forest mb-2">Will abstracts be published?</h3>
                <p class="text-gray-700 text-sm">Yes, all accepted abstracts will be published in the conference proceedings with ISBN, available online after the conference.</p>
            </div>
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <h3 class="font-semibold text-forest mb-2">Can I submit after the deadline?</h3>
                <p class="text-gray-700 text-sm">Late submissions cannot be accepted due to the review process timeline. Please ensure you submit before July 15, 2026.</p>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="mt-16">
        <div class="bg-gradient-to-r from-forest to-sage rounded-xl p-8 text-center">
            <h3 class="text-2xl font-display font-bold text-white mb-3">Ready to Submit?</h3>
            <p class="text-white/90 mb-6">Join researchers from around the world sharing their work on climate resilience and green technology.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('conference.register') }}" class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-white text-forest font-display font-semibold rounded-full hover:bg-ivory transition-colors">
                    <span>Submit Abstract</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
                <a href="{{ route('docs.templates') }}" class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-forest/20 text-white font-display font-semibold rounded-full hover:bg-forest/30 transition-colors border border-white/30">
                    <span>View Templates</span>
                </a>
            </div>
        </div>
    </section>
</div>
@endsection
