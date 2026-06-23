@extends('layouts.conference')

@section('title', 'Conference Insights | GETS 2026')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-forest/5 to-white pt-20">
    {{-- Hero Section --}}
    <div class="relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-forest via-sage to-earth/20 opacity-90"></div>
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.05\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32">
            <div class="text-center">
                <span class="inline-block px-4 py-1.5 bg-white/20 backdrop-blur-sm rounded-full text-white/90 text-sm font-medium mb-6">
                    Conference Insights
                </span>
                <h1 class="text-4xl md:text-6xl font-display font-bold text-white mb-6">
                    Discover the Impact
                </h1>
                <p class="text-xl text-white/90 max-w-2xl mx-auto">
                    Explore the vision, research focus, and expected outcomes of Global Environment & Transition Summit 2026 (GETS 2026).
                </p>
            </div>
        </div>
    </div>

    {{-- Key Statistics --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-16 relative z-10">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6">
            <div class="bg-white rounded-2xl shadow-xl p-6 text-center hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
                <div class="text-3xl md:text-4xl font-bold text-forest mb-2">500+</div>
                <div class="text-earth text-sm md:text-base">Expected Participants</div>
            </div>
            <div class="bg-white rounded-2xl shadow-xl p-6 text-center hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
                <div class="text-3xl md:text-4xl font-bold text-forest mb-2">50+</div>
                <div class="text-earth text-sm md:text-base">Expert Speakers</div>
            </div>
            <div class="bg-white rounded-2xl shadow-xl p-6 text-center hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
                <div class="text-3xl md:text-4xl font-bold text-forest mb-2">30+</div>
                <div class="text-earth text-sm md:text-base">Countries</div>
            </div>
            <div class="bg-white rounded-2xl shadow-xl p-6 text-center hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
                <div class="text-3xl md:text-4xl font-bold text-forest mb-2">6</div>
                <div class="text-earth text-sm md:text-base">Research Tracks</div>
            </div>
        </div>
    </div>

    {{-- Vision & Mission --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="grid md:grid-cols-2 gap-12">
            <div class="bg-white rounded-2xl shadow-lg p-8 border border-forest/10">
                <div class="w-14 h-14 bg-gradient-to-br from-forest to-sage rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </div>
                <h2 class="text-2xl font-display font-bold text-forest mb-4">Our Vision</h2>
                <p class="text-earth leading-relaxed">
                    To foster global collaboration in addressing climate challenges through innovative research, sustainable technologies, and inclusive policies that create lasting positive change for communities worldwide.
                </p>
            </div>
            <div class="bg-white rounded-2xl shadow-lg p-8 border border-forest/10">
                <div class="w-14 h-14 bg-gradient-to-br from-sage to-earth rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h2 class="text-2xl font-display font-bold text-forest mb-4">Our Mission</h2>
                <p class="text-earth leading-relaxed">
                    To provide a platform for researchers, policymakers, and practitioners to share knowledge, build partnerships, and develop actionable solutions for climate resilience and green technology adoption across the Asia-Pacific region and beyond.
                </p>
            </div>
        </div>
    </div>

    {{-- Research Focus Areas --}}
    <div class="bg-forest py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-display font-bold text-white mb-4">Research Focus Areas</h2>
                <p class="text-white/80 max-w-2xl mx-auto">
                    Our conference addresses critical challenges at the intersection of climate science, technology, and policy.
                </p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20 hover:bg-white/20 transition-all duration-300">
                    <div class="text-4xl mb-4">🌍</div>
                    <h3 class="text-xl font-display font-semibold text-white mb-2">Climate Policy & Governance</h3>
                    <p class="text-white/80 text-sm">Frameworks for environmental action and policy implementation strategies.</p>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20 hover:bg-white/20 transition-all duration-300">
                    <div class="text-4xl mb-4">⚡</div>
                    <h3 class="text-xl font-display font-semibold text-white mb-2">Renewable Energy Systems</h3>
                    <p class="text-white/80 text-sm">Technological solutions for clean power generation and distribution.</p>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20 hover:bg-white/20 transition-all duration-300">
                    <div class="text-4xl mb-4">🤝</div>
                    <h3 class="text-xl font-display font-semibold text-white mb-2">Community Resilience</h3>
                    <p class="text-white/80 text-sm">Building adaptive social structures for climate-vulnerable communities.</p>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20 hover:bg-white/20 transition-all duration-300">
                    <div class="text-4xl mb-4">🔬</div>
                    <h3 class="text-xl font-display font-semibold text-white mb-2">Green Technology Innovation</h3>
                    <p class="text-white/80 text-sm">Cutting-edge sustainable tech development and deployment.</p>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20 hover:bg-white/20 transition-all duration-300">
                    <div class="text-4xl mb-4">💰</div>
                    <h3 class="text-xl font-display font-semibold text-white mb-2">Environmental Economics</h3>
                    <p class="text-white/80 text-sm">Financial models and economic incentives for sustainability.</p>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20 hover:bg-white/20 transition-all duration-300">
                    <div class="text-4xl mb-4">🌱</div>
                    <h3 class="text-xl font-display font-semibold text-white mb-2">Ecosystem Restoration</h3>
                    <p class="text-white/80 text-sm">Scientific approaches to healing and restoring natural ecosystems.</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Expected Outcomes --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-display font-bold text-forest mb-4">Expected Outcomes</h2>
            <p class="text-earth max-w-2xl mx-auto">
                The conference aims to deliver tangible results that extend beyond the event.
            </p>
        </div>
        <div class="grid md:grid-cols-2 gap-8">
            <div class="flex gap-4">
                <div class="flex-shrink-0 w-12 h-12 bg-sage/20 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg font-display font-semibold text-forest mb-2">Published Proceedings</h3>
                    <p class="text-earth">All accepted papers will be published in conference proceedings with ISBN, providing lasting academic contribution.</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div class="flex-shrink-0 w-12 h-12 bg-sage/20 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg font-display font-semibold text-forest mb-2">Networking Opportunities</h3>
                    <p class="text-earth">Connect with researchers, policymakers, and industry leaders from around the world for future collaborations.</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div class="flex-shrink-0 w-12 h-12 bg-sage/20 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg font-display font-semibold text-forest mb-2">Policy Recommendations</h3>
                    <p class="text-earth">Collective development of actionable policy recommendations for regional climate initiatives.</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div class="flex-shrink-0 w-12 h-12 bg-sage/20 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg font-display font-semibold text-forest mb-2">Knowledge Sharing</h3>
                    <p class="text-earth">Exchange of best practices, research methodologies, and innovative solutions in climate resilience.</p>
                </div>
            </div>
        </div>
    </div>

    {{-- CTA Section --}}
    <div class="bg-gradient-to-br from-sage to-forest py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-display font-bold text-white mb-4">Be Part of the Change</h2>
            <p class="text-white/90 mb-8">Join us in Bali to contribute to global climate resilience solutions.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('conference.landing') }}#register" class="inline-flex items-center justify-center gap-2 px-8 py-3.5 bg-white text-forest text-sm font-display font-semibold rounded-full hover:shadow-lg transition-all duration-300 hover:-translate-y-0.5">
                    <span>Register Now</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
                <a href="{{ route('conference.speakers') }}" class="inline-flex items-center justify-center gap-2 px-8 py-3.5 bg-transparent border-2 border-white text-white text-sm font-display font-semibold rounded-full hover:bg-white/10 transition-all duration-300">
                    <span>View Speakers</span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
