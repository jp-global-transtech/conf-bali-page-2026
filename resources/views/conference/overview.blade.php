@extends('layouts.conference')

@section('title', 'About GETS 2026 - Global Environment & Transition Summit')
@section('meta-description', 'GETS 2026 is an action-driven ecosystem connecting academia, government, industry, and civil society to accelerate the global green transition through interdisciplinary collaboration.')

@section('content')
<div x-data>
    <div x-show="!$store.loading.isLoading" x-cloak x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">

        {{-- 1. HERO SECTION --}}
        <section class="relative bg-forest py-24 md:py-36">
            <div class="absolute inset-0 overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-forest via-forest to-sage opacity-90"></div>
                <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.4\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
            </div>
            <div class="relative max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <span class="inline-block px-4 py-1.5 bg-sage/20 text-sage rounded-full text-sm font-medium mb-6">
                    GETS 2026 — Inaugural Summit
                </span>
                <h1 class="font-display text-4xl md:text-5xl lg:text-6xl text-white font-bold mb-6 leading-tight">
                    Leading the Green Transition:<br>
                    <span class="text-sage">Strategies for a Climate-Resilient Future</span>
                </h1>
                <p class="text-xl md:text-2xl text-ivory-200 max-w-4xl mx-auto mb-4 leading-relaxed">
                    GETS 2026 is not a conventional academic conference — it is an action-driven ecosystem where knowledge, technology, policy, and industry converge to accelerate the global green transition.
                </p>
                <p class="text-lg text-ivory-200/80 max-w-3xl mx-auto mb-10 leading-relaxed">
                    Connect with top researchers, government leaders, corporate executives, and civil society to co-create lasting solutions for a climate-resilient future.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('conference.register') }}" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-sage text-forest font-display font-semibold rounded-full hover:bg-white transition-all duration-300 shadow-lg hover:shadow-xl text-lg">
                        <span>Register Now — Secure Your Seat</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                    <a href="{{ route('conference.call-for-abstract') }}" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-transparent border-2 border-white text-white font-display font-semibold rounded-full hover:bg-white hover:text-forest transition-all duration-300 text-lg">
                        <span>Submit Abstract</span>
                    </a>
                </div>
            </div>
        </section>

        {{-- 2. ABOUT THE SUMMIT / THE WHY --}}
        <section class="py-20 md:py-28 bg-white">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-14">
                    <span class="inline-block px-3 py-1 bg-forest/10 text-forest rounded-full text-sm font-medium mb-4">
                        The "Why"
                    </span>
                    <h2 class="font-display text-3xl md:text-4xl text-forest font-bold mb-6">
                        Why GETS 2026 Exists
                    </h2>
                    <p class="text-lg text-earth leading-relaxed">
                        Climate change is the most complex challenge of our time — it disrupts economies, ecosystems, public health, infrastructure, and communities simultaneously. No single discipline, institution, or nation can address it alone.
                    </p>
                    <p class="text-lg text-earth leading-relaxed mt-4">
                        GETS 2026 is built on a simple conviction: <strong>meaningful climate action emerges when diverse expertise converges</strong>. We bring together researchers, policymakers, industry leaders, and communities to turn knowledge into implementation, innovation into impact, and dialogue into lasting partnerships.
                    </p>
                </div>

                <h3 class="text-center text-xl font-display font-semibold text-forest mb-8">
                    The Green Transition — Six Interconnected Dimensions
                </h3>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <div class="bg-emerald-50 rounded-xl p-5 border border-emerald-200">
                        <h4 class="font-bold text-forest text-sm mb-1">Environmental Transition</h4>
                        <p class="text-earth text-sm leading-relaxed">Ecosystem conservation, climate adaptation, renewable energy, and circular economy practices for long-term ecological sustainability.</p>
                    </div>
                    <div class="bg-blue-50 rounded-xl p-5 border border-blue-200">
                        <h4 class="font-bold text-forest text-sm mb-1">Economic Transformation</h4>
                        <p class="text-earth text-sm leading-relaxed">Sustainable economic systems, green investment, ESG frameworks, and innovation-driven growth that balances prosperity with responsibility.</p>
                    </div>
                    <div class="bg-slate-50 rounded-xl p-5 border border-slate-200">
                        <h4 class="font-bold text-forest text-sm mb-1">Industrial &amp; Technological Transformation</h4>
                        <p class="text-earth text-sm leading-relaxed">Green technologies, digital innovation, renewable energy systems, and climate-resilient infrastructure for low-carbon industry.</p>
                    </div>
                    <div class="bg-purple-50 rounded-xl p-5 border border-purple-200">
                        <h4 class="font-bold text-forest text-sm mb-1">Institutional Transformation</h4>
                        <p class="text-earth text-sm leading-relaxed">Governance strengthening, cross-sector collaboration, and adaptive leadership capable of driving sustainable development.</p>
                    </div>
                    <div class="bg-orange-50 rounded-xl p-5 border border-orange-200">
                        <h4 class="font-bold text-forest text-sm mb-1">Social Transformation</h4>
                        <p class="text-earth text-sm leading-relaxed">Inclusive participation, behavioural change, education, and community-led action that empowers society to build a sustainable future.</p>
                    </div>
                    <div class="bg-teal-50 rounded-xl p-5 border border-teal-200">
                        <h4 class="font-bold text-forest text-sm mb-1">Knowledge Transformation</h4>
                        <p class="text-earth text-sm leading-relaxed">Integration of research, technology, policy, and practice into actionable knowledge that generates real-world climate solutions.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- 3. G•E•T•S PILLARS --}}
        <section class="py-20 md:py-28 bg-ivory">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-14">
                    <span class="inline-block px-3 py-1 bg-sage/10 text-sage rounded-full text-sm font-medium mb-4">
                        Our Strategic Framework
                    </span>
                    <h2 class="font-display text-3xl md:text-4xl text-forest font-bold mb-4">
                        The G•E•T•S Pillars
                    </h2>
                    <p class="text-lg text-earth">
                        Four interconnected pillars that define our identity and drive every session, speaker, and initiative.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <div class="bg-white rounded-xl p-7 border-l-4 border-forest shadow-sm hover:shadow-md transition-shadow">
                        <span class="text-2xl font-bold text-forest">G</span>
                        <h3 class="text-lg font-bold text-forest mt-1 mb-2">Global Synergy</h3>
                        <p class="text-earth text-sm leading-relaxed">Connecting nations, institutions, and knowledge across borders. As an Indonesia–India bilateral platform, GETS creates an inclusive space where global perspectives converge to address shared environmental challenges — and builds partnerships that endure beyond the summit.</p>
                    </div>
                    <div class="bg-white rounded-xl p-7 border-l-4 border-sage shadow-sm hover:shadow-md transition-shadow">
                        <span class="text-2xl font-bold text-sage">E</span>
                        <h3 class="text-lg font-bold text-forest mt-1 mb-2">Environmental Stewardship</h3>
                        <p class="text-earth text-sm leading-relaxed">Leading responsible environmental transformation. Beyond ethics, we treat stewardship as a strategic driver for decarbonisation, renewable energy adoption, circular economies, and innovation that regenerates rather than depletes.</p>
                    </div>
                    <div class="bg-white rounded-xl p-7 border-l-4 border-atmosphere shadow-sm hover:shadow-md transition-shadow">
                        <span class="text-2xl font-bold text-atmosphere">T</span>
                        <h3 class="text-lg font-bold text-forest mt-1 mb-2">Transdisciplinary Integration</h3>
                        <p class="text-earth text-sm leading-relaxed">Integrating knowledge beyond academic boundaries. Science needs policy, policy needs business, business needs community — we weave environmental science, engineering, economics, policy, and local wisdom into a unified knowledge ecosystem.</p>
                    </div>
                    <div class="bg-white rounded-xl p-7 border-l-4 border-earth shadow-sm hover:shadow-md transition-shadow">
                        <span class="text-2xl font-bold text-earth">S</span>
                        <h3 class="text-lg font-bold text-forest mt-1 mb-2">Strategic Resilience</h3>
                        <p class="text-earth text-sm leading-relaxed">Building long-term capacity through collaboration. Our success is measured not just by the quality of conference discussions, but by the institutional partnerships, policy dialogues, and innovation networks that continue growing long after the summit ends.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- 4. CONFERENCE TRACKS (KNOWLEDGE DOMAINS) --}}
        <section class="py-20 md:py-28 bg-white">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-14">
                    <span class="inline-block px-3 py-1 bg-forest/10 text-forest rounded-full text-sm font-medium mb-4">
                        Program Tracks
                    </span>
                    <h2 class="font-display text-3xl md:text-4xl text-forest font-bold mb-4">
                        Three Knowledge Domains
                    </h2>
                    <p class="text-lg text-earth">
                        Choose the track that matches your expertise — or cross-pollinate across all three.
                    </p>
                </div>

                <div class="space-y-6">
                    <div class="bg-white rounded-2xl shadow-md overflow-hidden border border-forest/10">
                        <div class="bg-gradient-to-r from-forest to-sage px-6 py-4">
                            <span class="text-xs text-white/70 font-medium uppercase tracking-wider">Track 1</span>
                            <h3 class="text-xl font-bold text-white">Sustainable Business, Economics &amp; Organizational Transformation</h3>
                        </div>
                        <div class="p-6">
                            <p class="text-earth text-sm mb-4">How organisations, industries, and markets transform to lead the green transition.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-forest/5 text-forest text-sm rounded-full">Green Marketing &amp; Conscious Consumption</span>
                                <span class="px-3 py-1 bg-forest/5 text-forest text-sm rounded-full">Green HRM Practices</span>
                                <span class="px-3 py-1 bg-forest/5 text-forest text-sm rounded-full">CSR &amp; ESG Management</span>
                                <span class="px-3 py-1 bg-forest/5 text-forest text-sm rounded-full">AI &amp; Sustainable Business Models</span>
                                <span class="px-3 py-1 bg-forest/5 text-forest text-sm rounded-full">Sustainable Strategic Management</span>
                                <span class="px-3 py-1 bg-forest/5 text-forest text-sm rounded-full">Green Entrepreneurship &amp; Startups</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl shadow-md overflow-hidden border border-forest/10">
                        <div class="bg-gradient-to-r from-sage to-atmosphere px-6 py-4">
                            <span class="text-xs text-white/70 font-medium uppercase tracking-wider">Track 2</span>
                            <h3 class="text-xl font-bold text-white">Green Technology, Engineering &amp; Industrial Innovation</h3>
                        </div>
                        <div class="p-6">
                            <p class="text-earth text-sm mb-4">Technological breakthroughs and engineering solutions accelerating low-carbon industry.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-forest/5 text-forest text-sm rounded-full">Green Technology &amp; Sustainable Innovation</span>
                                <span class="px-3 py-1 bg-forest/5 text-forest text-sm rounded-full">Renewable Energy &amp; Climate-Resilient Infrastructure</span>
                                <span class="px-3 py-1 bg-forest/5 text-forest text-sm rounded-full">Sustainable Materials &amp; Circular Engineering</span>
                                <span class="px-3 py-1 bg-forest/5 text-forest text-sm rounded-full">Energy Efficiency &amp; Sustainable Industrial Practices</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl shadow-md overflow-hidden border border-forest/10">
                        <div class="bg-gradient-to-r from-atmosphere to-teal-600 px-6 py-4">
                            <span class="text-xs text-white/70 font-medium uppercase tracking-wider">Track 3</span>
                            <h3 class="text-xl font-bold text-white">Climate Resilience, Environmental Systems &amp; Community Adaptation</h3>
                        </div>
                        <div class="p-6">
                            <p class="text-earth text-sm mb-4">Adaptive systems and community-centred approaches that strengthen environmental resilience.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-forest/5 text-forest text-sm rounded-full">Circular Economy &amp; Waste Reduction Management</span>
                                <span class="px-3 py-1 bg-forest/5 text-forest text-sm rounded-full">Climate Adaptation Technology &amp; Community Resilience</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- 5. EXPECTED OUTCOMES / LEGACY --}}
        <section class="py-20 md:py-28 bg-gradient-to-br from-forest/5 to-sage/10">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-14">
                    <span class="inline-block px-3 py-1 bg-sage/20 text-sage rounded-full text-sm font-medium mb-4">
                        Beyond the Summit
                    </span>
                    <h2 class="font-display text-3xl md:text-4xl text-forest font-bold mb-4">
                        More Than a Paper-Reading Event
                    </h2>
                    <p class="text-lg text-earth leading-relaxed">
                        GETS 2026 is designed to generate outcomes that outlast the conference itself. We measure success not by the number of presentations, but by the collaborations, policies, and innovations that emerge.
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-6 max-w-4xl mx-auto">
                    <div class="bg-white rounded-xl p-7 shadow-sm border border-forest/10 text-center hover:shadow-md transition-shadow">
                        <div class="w-14 h-14 bg-forest/10 rounded-xl flex items-center justify-center mx-auto mb-4">
                            <svg class="w-7 h-7 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-forest mb-2">Knowledge Outcomes</h3>
                        <p class="text-earth text-sm leading-relaxed">New interdisciplinary research partnerships, emerging collaborative projects, and a lasting knowledge network that continues exchanging ideas long after the summit.</p>
                    </div>
                    <div class="bg-white rounded-xl p-7 shadow-sm border border-forest/10 text-center hover:shadow-md transition-shadow">
                        <div class="w-14 h-14 bg-sage/10 rounded-xl flex items-center justify-center mx-auto mb-4">
                            <svg class="w-7 h-7 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-forest mb-2">Institutional Outcomes</h3>
                        <p class="text-earth text-sm leading-relaxed">Stronger institutional ties between universities, governments, industries, and international organisations — enabling joint research, academic exchange, and future co-hosted initiatives.</p>
                    </div>
                    <div class="bg-white rounded-xl p-7 shadow-sm border border-forest/10 text-center hover:shadow-md transition-shadow">
                        <div class="w-14 h-14 bg-atmosphere/10 rounded-xl flex items-center justify-center mx-auto mb-4">
                            <svg class="w-7 h-7 text-atmosphere" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-forest mb-2">Strategic Outcomes</h3>
                        <p class="text-earth text-sm leading-relaxed">Actionable policy recommendations, cross-border innovation pipelines, and a shared strategic roadmap for accelerating the green transition across sectors and nations.</p>
                    </div>
                </div>

                <div class="text-center mt-10 max-w-2xl mx-auto">
                    <p class="text-earth leading-relaxed">
                        <strong>This is not a passive conference.</strong> Every session is designed to move from dialogue to action — from "what we know" to "what we will do together."
                    </p>
                </div>
            </div>
        </section>

        {{-- 6. CLOSING CTA --}}
        <section class="py-20 md:py-28 bg-forest">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <span class="inline-block px-4 py-1.5 bg-sage/20 text-sage rounded-full text-sm font-medium mb-6">
                    Join the Inaugural Edition
                </span>
                <h2 class="font-display text-3xl md:text-4xl text-white font-bold mb-6 leading-tight">
                    Shape the Blueprint<br>
                    <span class="text-sage">of Global Sustainability</span>
                </h2>
                <p class="text-lg text-ivory-200 max-w-2xl mx-auto mb-10 leading-relaxed">
                    The first edition of GETS sets the foundation for an enduring international network. Your expertise, voice, and leadership are essential to building a future where science, policy, industry, and community move forward — together.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('conference.register') }}" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-sage text-forest font-display font-semibold rounded-full hover:bg-white transition-all duration-300 shadow-lg hover:shadow-xl text-lg">
                        <span>Register Now — Secure Your Seat</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                    <a href="{{ route('conference.call-for-abstract') }}" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-transparent border-2 border-white text-white font-display font-semibold rounded-full hover:bg-white hover:text-forest transition-all duration-300 text-lg">
                        <span>Submit Abstract</span>
                    </a>
                </div>
            </div>
        </section>

    </div>
</div>
@endsection

@section('footer')
<x-footer />
@endsection
