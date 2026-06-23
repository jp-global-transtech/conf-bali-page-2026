@extends('layouts.conference')

@section('title', 'Conference Schedule | GETS 2026')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-forest/5 to-white pt-20">

    {{-- Hero Section --}}
    <div class="relative overflow-hidden bg-gradient-to-br from-forest via-sage to-forest/90">
        <div class="absolute inset-0 opacity-20" style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.4\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-20">
            <div class="text-center">
                <span class="inline-block px-4 py-1.5 bg-white/20 backdrop-blur-sm rounded-full text-white/90 text-sm font-medium mb-4">
                    Program Schedule
                </span>
                <h1 class="text-2xl md:text-3xl lg:text-4xl font-display font-bold text-white mb-4">
                    Conference Schedule
                </h1>
                <p class="text-xl text-white/90 max-w-3xl mx-auto leading-relaxed">
                    24 August 2026 | Faculty of Mathematics and Natural Sciences (FMIPA), Udayana University, Bali
                </p>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

        {{-- Morning Sessions --}}
        <div class="mb-12">
            <h2 class="text-2xl font-display font-bold text-forest mb-6 flex items-center gap-3">
                <span class="w-10 h-10 rounded-full bg-gradient-to-br from-forest to-sage flex items-center justify-center text-white text-lg">🌅</span>
                Morning Sessions
            </h2>

            <div class="space-y-4">
                {{-- Registration --}}
                <div class="bg-white rounded-xl border border-forest/10 p-6 border-l-4 border-l-forest hover:shadow-lg transition-shadow">
                    <div class="flex flex-col sm:flex-row sm:items-center gap-4">
                        <div class="flex-shrink-0 w-32 text-sm font-semibold text-atmosphere">08:00 - 09:00</div>
                        <div class="flex-1">
                            <span class="inline-block px-2 py-1 text-xs uppercase rounded-full bg-forest/10 text-forest mb-2">Registration</span>
                            <h3 class="text-lg font-semibold text-forest">Registration & Welcome Coffee</h3>
                            <p class="text-sm text-earth/70">Participant registration and networking over welcome coffee</p>
                        </div>
                    </div>
                </div>

                {{-- Opening Ceremony --}}
                <div class="bg-white rounded-xl border border-forest/10 p-6 border-l-4 border-l-forest hover:shadow-lg transition-shadow">
                    <div class="flex flex-col sm:flex-row sm:items-center gap-4">
                        <div class="flex-shrink-0 w-32 text-sm font-semibold text-atmosphere">09:00 - 09:30</div>
                        <div class="flex-1">
                            <span class="inline-block px-2 py-1 text-xs uppercase rounded-full bg-forest/10 text-forest mb-2">Opening</span>
                            <h3 class="text-lg font-semibold text-forest">Opening Ceremony</h3>
                            <p class="text-sm text-earth/70">Welcome remarks by Chief Patrons and distinguished guests</p>
                        </div>
                    </div>
                </div>

                {{-- Keynote Sessions - Indonesia Delegation --}}
                <div class="bg-gradient-to-r from-forest/5 to-sage/5 rounded-xl border border-forest/10 p-6">
                    <div class="flex items-center gap-2 mb-4">
                        <span class="text-2xl">🇮🇩</span>
                        <h4 class="font-display font-semibold text-forest">Keynote Sessions: Indonesia Delegation</h4>
                        <span class="text-xs text-earth/60">(Future Tech & Applied Sciences)</span>
                    </div>

                    <div class="space-y-3">
                        <div class="bg-white rounded-lg p-4 border-l-2 border-sage">
                            <div class="flex flex-col sm:flex-row sm:items-center gap-3">
                                <div class="flex-shrink-0 text-sm font-semibold text-atmosphere">09:30 - 09:45</div>
                                <div class="flex-1">
                                    <h5 class="font-semibold text-forest text-sm">Prof. Dr. Rupiasih</h5>
                                    <p class="text-xs text-earth/70">The Role of Applied Physics in Advancing Sustainable Development Goals</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white rounded-lg p-4 border-l-2 border-sage">
                            <div class="flex flex-col sm:flex-row sm:items-center gap-3">
                                <div class="flex-shrink-0 text-sm font-semibold text-atmosphere">09:45 - 10:00</div>
                                <div class="flex-1">
                                    <h5 class="font-semibold text-forest text-sm">Prof. Dr.Eng. I Made Joni</h5>
                                    <p class="text-xs text-earth/70">Decarbonizing the Value Chain through Smart Nanotechnology</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white rounded-lg p-4 border-l-2 border-sage">
                            <div class="flex flex-col sm:flex-row sm:items-center gap-3">
                                <div class="flex-shrink-0 text-sm font-semibold text-atmosphere">10:00 - 10:15</div>
                                <div class="flex-1">
                                    <h5 class="font-semibold text-forest text-sm">Prof. Dr.Eng. I Made Sucipta</h5>
                                    <p class="text-xs text-earth/70">Hydrogen Technology as the Backbone for Climate-Resilient Infrastructure</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white rounded-lg p-4 border-l-2 border-sage">
                            <div class="flex flex-col sm:flex-row sm:items-center gap-3">
                                <div class="flex-shrink-0 text-sm font-semibold text-atmosphere">10:15 - 10:30</div>
                                <div class="flex-1">
                                    <h5 class="font-semibold text-forest text-sm">Dr. Wayan Nata</h5>
                                    <p class="text-xs text-earth/70">Innovative Heat Management Systems for Sustainable Industrial Practices</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Morning Tea Break --}}
                <div class="bg-ivory rounded-xl border border-earth/20 p-6 border-l-4 border-l-earth/30">
                    <div class="flex flex-col sm:flex-row sm:items-center gap-4">
                        <div class="flex-shrink-0 w-32 text-sm font-semibold text-atmosphere">10:30 - 11:00</div>
                        <div class="flex-1">
                            <span class="inline-block px-2 py-1 text-xs uppercase rounded-full bg-earth/10 text-earth mb-2">Break</span>
                            <h3 class="text-lg font-semibold text-forest">Morning Tea Break</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Keynote Sessions - India Delegation --}}
        <div class="mb-12">
            <h2 class="text-2xl font-display font-bold text-forest mb-6 flex items-center gap-3">
                <span class="w-10 h-10 rounded-full bg-gradient-to-br from-atmosphere to-sage flex items-center justify-center text-white text-lg">☀️</span>
                Mid-Day Sessions
            </h2>

            <div class="bg-gradient-to-r from-atmosphere/5 to-sage/5 rounded-xl border border-atmosphere/10 p-6">
                <div class="flex items-center gap-2 mb-4">
                    <span class="text-2xl">🇮🇳</span>
                    <h4 class="font-display font-semibold text-forest">Keynote Sessions: India Delegation</h4>
                    <span class="text-xs text-earth/60">(Business, Society & Policy)</span>
                </div>

                <div class="space-y-3">
                    <div class="bg-white rounded-lg p-4 border-l-2 border-atmosphere">
                        <div class="flex flex-col sm:flex-row sm:items-center gap-3">
                            <div class="flex-shrink-0 text-sm font-semibold text-atmosphere">11:00 - 11:15</div>
                            <div class="flex-1">
                                <h5 class="font-semibold text-forest text-sm">Prof. J. U. Ahmed</h5>
                                <p class="text-xs text-earth/70">Climate Resilience in Designing Business Models & Corporate Governance</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg p-4 border-l-2 border-atmosphere">
                        <div class="flex flex-col sm:flex-row sm:items-center gap-3">
                            <div class="flex-shrink-0 text-sm font-semibold text-atmosphere">11:15 - 11:30</div>
                            <div class="flex-1">
                                <h5 class="font-semibold text-forest text-sm">Prof. L. S. Sharma</h5>
                                <p class="text-xs text-earth/70">Green Finance, Investment Innovation, and Sustainable Tourism</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg p-4 border-l-2 border-atmosphere">
                        <div class="flex flex-col sm:flex-row sm:items-center gap-3">
                            <div class="flex-shrink-0 text-sm font-semibold text-atmosphere">11:30 - 11:45</div>
                            <div class="flex-1">
                                <h5 class="font-semibold text-forest text-sm">Shri M. Priyananda Sharma</h5>
                                <p class="text-xs text-earth/70">Community-led Climate Resilience in Global South: Integrating Indigenous Knowledge, Innovation and Sustainable Development</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg p-4 border-l-2 border-atmosphere">
                        <div class="flex flex-col sm:flex-row sm:items-center gap-3">
                            <div class="flex-shrink-0 text-sm font-semibold text-atmosphere">11:45 - 12:00</div>
                            <div class="flex-1">
                                <h5 class="font-semibold text-forest text-sm">Dr. Goutam Jha</h5>
                                <p class="text-xs text-earth/70">Policy, Regulation, and Global Cooperation: Cultural Perspectives on Climate Action</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Lunch Break --}}
        <div class="mb-12">
            <div class="bg-ivory rounded-xl border border-earth/20 p-6 border-l-4 border-l-earth/30">
                <div class="flex flex-col sm:flex-row sm:items-center gap-4">
                    <div class="flex-shrink-0 w-32 text-sm font-semibold text-atmosphere">12:00 - 13:00</div>
                    <div class="flex-1">
                        <span class="inline-block px-2 py-1 text-xs uppercase rounded-full bg-earth/10 text-earth mb-2">Break</span>
                        <h3 class="text-lg font-semibold text-forest">Lunch Break & Networking</h3>
                        <p class="text-sm text-earth/70">Catered lunch with networking opportunities</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Afternoon Parallel Sessions (3 Tracks) --}}
        @php
            $parallelTracks = config('conference.parallel_tracks', []);
        @endphp

        <div class="mb-12">
            <h2 class="text-2xl font-display font-bold text-forest mb-6 flex items-center gap-3">
                <span class="w-10 h-10 rounded-full bg-gradient-to-br from-atmosphere to-forest flex items-center justify-center text-white text-lg">🌤️</span>
                Afternoon Parallel Sessions
            </h2>

            <p class="text-earth mb-8">Choose from three dynamic tracks featuring invited industry practitioners, policymakers, and academics.</p>

            <div class="grid lg:grid-cols-3 gap-6">
                @foreach($parallelTracks as $track)
                <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden border border-forest/10">
                    <div class="p-6">
                        {{-- Track Badge --}}
                        <div class="inline-block px-3 py-1 rounded-full text-xs font-semibold mb-4
                            @if($track['focus'] === 'business-society') bg-atmosphere/10 text-atmosphere
                            @elseif($track['focus'] === 'future-tech') bg-forest/10 text-forest
                            @else bg-sage/10 text-sage @endif">
                            {{ $track['id'] }}
                        </div>

                        <h3 class="text-lg font-display font-bold text-forest mb-2">{{ $track['name'] }}</h3>
                        <p class="text-sm text-earth/70 mb-4">{{ $track['description'] }}</p>

                        <ul class="space-y-2">
                            @foreach($track['topics'] as $topic)
                            <li class="flex items-start gap-2 text-sm text-earth">
                                <svg class="w-4 h-4 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>{{ $topic }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="bg-ivory/50 px-6 py-3 border-t border-forest/10">
                        <p class="text-xs text-atmosphere font-semibold">13:00 - 15:30 | Onsite in Bali</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Closing Ceremony --}}
        <div class="mb-12">
            <h2 class="text-2xl font-display font-bold text-forest mb-6 flex items-center gap-3">
                <span class="w-10 h-10 rounded-full bg-gradient-to-br from-forest to-sage flex items-center justify-center text-white text-lg">🎯</span>
                Closing Ceremony
            </h2>

            <div class="bg-gradient-to-r from-forest/5 to-sage/5 rounded-xl border border-forest/10 p-6 border-l-4 border-l-forest">
                <div class="flex flex-col sm:flex-row sm:items-center gap-4">
                    <div class="flex-shrink-0 w-32 text-sm font-semibold text-atmosphere">15:30 - 16:30</div>
                    <div class="flex-1">
                        <span class="inline-block px-2 py-1 text-xs uppercase rounded-full bg-forest/10 text-forest mb-2">Closing</span>
                        <h3 class="text-lg font-semibold text-forest">Closing Ceremony & Awards</h3>
                        <p class="text-sm text-earth/70">Conference summary, awards presentation, and closing remarks by Chief Patrons</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Download Calendar CTA --}}
        <div class="text-center">
            <a href="{{ route('conference.calendar') }}" class="inline-flex items-center gap-2 px-8 py-4 bg-forest text-white font-display font-semibold rounded-full hover:bg-sage transition-all duration-300 hover:shadow-lg hover:shadow-sage/25">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <span>Add to Calendar</span>
            </a>
        </div>

    </div>
</div>
@endsection
