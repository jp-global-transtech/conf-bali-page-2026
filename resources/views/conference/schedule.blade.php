@extends('layouts.conference')

@section('title', 'Program Schedule | GETS 2026')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-forest/5 to-white pt-20">

    {{-- Hero Section --}}
    <div class="relative overflow-hidden bg-gradient-to-br from-forest via-sage to-forest/90">
        <div class="absolute inset-0 opacity-20" style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.4\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-20">
            <div class="text-center">
                <span class="inline-block px-4 py-1.5 bg-amber-400/20 backdrop-blur-sm rounded-full text-amber-300 text-sm font-medium mb-4">
                    Tentative Rundown
                </span>
                <h1 class="text-2xl md:text-3xl lg:text-4xl font-display font-bold text-white mb-4">
                    Conference Program
                </h1>
                <p class="text-lg text-white/90 max-w-3xl mx-auto leading-relaxed">
                    24 August 2026 | Lecture Building, Universitas Udayana, Bali
                </p>
            </div>
        </div>
    </div>

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

        {{-- Tentative Notice Banner --}}
        <div class="mb-10">
            <div class="bg-amber-50 border-2 border-amber-300 rounded-2xl p-5 md:p-6">
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 bg-amber-500 rounded-xl flex items-center justify-center flex-shrink-0 mt-0.5">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h2 class="text-lg font-bold text-amber-800 mb-1">Tentative Program</h2>
                        <p class="text-sm text-amber-700 leading-relaxed">
                            This rundown is <strong>tentative</strong> and subject to change. Times remain as originally scheduled; speaker assignments to each plenary/oral-presentation slot (KS-1–KS-8 and Sessions 1–6) are to be finalized.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Schedule Table --}}
        <div class="bg-white rounded-2xl shadow-lg border border-gray-200 overflow-hidden">
            {{-- Table Header --}}
            <div class="bg-gradient-to-r from-forest to-sage px-6 py-5 text-center">
                <h2 class="text-xl font-bold text-white">GETS 2026 — Tentative Rundown</h2>
                <p class="text-white/80 text-sm mt-1">International Conference · Lecture Building, Universitas Udayana</p>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    {{-- Column Headers --}}
                    <thead>
                        <tr class="bg-gray-50 border-b border-gray-200">
                            <th class="text-left px-6 py-3 font-semibold text-gray-700 w-44">Time</th>
                            <th class="text-left px-6 py-3 font-semibold text-gray-700">Program</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">

                        {{-- ═════════════════════════════════════════════════
                             VENUE HEADER
                             ═════════════════════════════════════════════════ --}}
                        <tr class="bg-forest/5">
                            <td colspan="2" class="px-6 py-3">
                                <span class="inline-flex items-center gap-2 text-xs font-bold text-forest uppercase tracking-wider">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    Venue: Lecture Building, Universitas Udayana
                                </span>
                            </td>
                        </tr>

                        {{-- Registration --}}
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-6 py-3.5"><span class="font-semibold text-gray-800">07:30 – 08:00</span></td>
                            <td class="px-6 py-3.5 text-gray-700">Registration</td>
                        </tr>

                        {{-- Conference Opening --}}
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-6 py-3.5"><span class="font-semibold text-gray-800">08:00 – 08:05</span></td>
                            <td class="px-6 py-3.5 text-gray-700">Conference Opening</td>
                        </tr>

                        {{-- Indonesia National Anthem --}}
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-6 py-3.5"><span class="font-semibold text-gray-800">08:05 – 08:10</span></td>
                            <td class="px-6 py-3.5 text-gray-700">Indonesia National Anthem</td>
                        </tr>

                        {{-- Moment of Reflection --}}
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-6 py-3.5"><span class="font-semibold text-gray-800">08:10 – 08:15</span></td>
                            <td class="px-6 py-3.5 text-gray-700">Moment of Reflection / Invocation (Praying)</td>
                        </tr>

                        {{-- Welcome Remarks --}}
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-6 py-3.5"><span class="font-semibold text-gray-800">08:15 – 08:20</span></td>
                            <td class="px-6 py-3.5">
                                <span class="text-gray-700">Welcome Remarks by Conference Chair:</span>
                                <span class="font-medium text-gray-900 block sm:inline"> Prof. Dra. Ni Luh Watiniasih, M.Sc., Ph.D.</span>
                            </td>
                        </tr>

                        {{-- Remarks NEMA India --}}
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-6 py-3.5"><span class="font-semibold text-gray-800">08:20 – 08:25</span></td>
                            <td class="px-6 py-3.5">
                                <span class="text-gray-700">Remarks by International Partner Institution, NEMA India:</span>
                                <span class="font-medium text-gray-900 block sm:inline"> Prof. W. Chandbabu Singh</span>
                            </td>
                        </tr>

                        {{-- Remarks FiNder --}}
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-6 py-3.5"><span class="font-semibold text-gray-800">08:25 – 08:30</span></td>
                            <td class="px-6 py-3.5">
                                <span class="text-gray-700">Remarks by Co-Organizing Partner, FiNder Universitas Padjadjaran:</span>
                                <span class="font-medium text-gray-900 block sm:inline"> Prof. I Made Joni</span>
                            </td>
                        </tr>

                        {{-- Opening Address --}}
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-6 py-3.5"><span class="font-semibold text-gray-800">08:30 – 08:35</span></td>
                            <td class="px-6 py-3.5 text-gray-700">Opening Address by Rector of Universitas Udayana</td>
                        </tr>

                        {{-- Symbolic Opening --}}
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-6 py-3.5"><span class="font-semibold text-gray-800">08:35 – 08:40</span></td>
                            <td class="px-6 py-3.5 text-gray-700">Symbolic Official Opening of the Conference (Gong Striking)</td>
                        </tr>

                        {{-- Group Photo --}}
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-6 py-3.5"><span class="font-semibold text-gray-800">08:40 – 08:45</span></td>
                            <td class="px-6 py-3.5 text-gray-700">Group Photo</td>
                        </tr>

                        {{-- Welcome Performance --}}
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-6 py-3.5"><span class="font-semibold text-gray-800">08:45 – 09:00</span></td>
                            <td class="px-6 py-3.5 text-gray-700">Welcome Performance: Traditional Balinese Dance</td>
                        </tr>

                        {{-- ═════════════════════════════════════════════════
                             PLENARY SESSION 1
                             ═════════════════════════════════════════════════ --}}
                        <tr class="bg-sage/10">
                            <td colspan="2" class="px-6 py-3">
                                <div class="flex items-center gap-2">
                                    <span class="w-1.5 h-6 bg-forest rounded-full"></span>
                                    <span class="text-xs font-bold text-forest uppercase tracking-wider">Plenary Session 1 — Moderator: TBD</span>
                                </div>
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-6 py-3.5"><span class="font-semibold text-gray-800">09:05 – 09:30</span></td>
                            <td class="px-6 py-3.5 text-gray-700">Plenary Speech 1: KS-1</td>
                        </tr>

                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-6 py-3.5"><span class="font-semibold text-gray-800">09:30 – 09:55</span></td>
                            <td class="px-6 py-3.5 text-gray-700">Plenary Speech 2: KS-2</td>
                        </tr>

                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-6 py-3.5"><span class="font-semibold text-gray-800">09:55 – 10:20</span></td>
                            <td class="px-6 py-3.5 text-gray-700">Plenary Speech 3: KS-3</td>
                        </tr>

                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-6 py-3.5"><span class="font-semibold text-gray-800">10:20 – 10:40</span></td>
                            <td class="px-6 py-3.5 text-gray-700">Q&A Session</td>
                        </tr>

                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-6 py-3.5"><span class="font-semibold text-gray-800">10:40 – 10:45</span></td>
                            <td class="px-6 py-3.5 text-gray-700">Plaque Awarding Ceremony and Group Photo</td>
                        </tr>

                        <tr class="bg-ivory/70">
                            <td class="px-6 py-3.5"><span class="font-semibold text-earth">10:45 – 11:00</span></td>
                            <td class="px-6 py-3.5">
                                <span class="inline-flex items-center gap-1.5 text-earth font-medium">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Coffee Break 1
                                </span>
                            </td>
                        </tr>

                        {{-- ═════════════════════════════════════════════════
                             PLENARY SESSION 2
                             ═════════════════════════════════════════════════ --}}
                        <tr class="bg-sage/10">
                            <td colspan="2" class="px-6 py-3">
                                <div class="flex items-center gap-2">
                                    <span class="w-1.5 h-6 bg-forest rounded-full"></span>
                                    <span class="text-xs font-bold text-forest uppercase tracking-wider">Plenary Session 2 — Moderator: TBD</span>
                                </div>
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-6 py-3.5"><span class="font-semibold text-gray-800">11:05 – 11:30</span></td>
                            <td class="px-6 py-3.5 text-gray-700">Plenary Speech 4: KS-4</td>
                        </tr>

                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-6 py-3.5"><span class="font-semibold text-gray-800">11:30 – 11:55</span></td>
                            <td class="px-6 py-3.5 text-gray-700">Plenary Speech 5: KS-5</td>
                        </tr>

                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-6 py-3.5"><span class="font-semibold text-gray-800">11:55 – 12:20</span></td>
                            <td class="px-6 py-3.5 text-gray-700">Plenary Speech 6: KS-6</td>
                        </tr>

                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-6 py-3.5"><span class="font-semibold text-gray-800">12:20 – 12:40</span></td>
                            <td class="px-6 py-3.5 text-gray-700">Q&A Session</td>
                        </tr>

                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-6 py-3.5"><span class="font-semibold text-gray-800">12:40 – 12:45</span></td>
                            <td class="px-6 py-3.5 text-gray-700">Plaque Awarding Ceremony and Group Photo</td>
                        </tr>

                        <tr class="bg-ivory/70">
                            <td class="px-6 py-3.5"><span class="font-semibold text-earth">12:45 – 13:45</span></td>
                            <td class="px-6 py-3.5">
                                <span class="inline-flex items-center gap-1.5 text-earth font-medium">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Lunch Break
                                </span>
                            </td>
                        </tr>

                        {{-- ═════════════════════════════════════════════════
                             PLENARY SESSION 3
                             ═════════════════════════════════════════════════ --}}
                        <tr class="bg-sage/10">
                            <td colspan="2" class="px-6 py-3">
                                <div class="flex items-center gap-2">
                                    <span class="w-1.5 h-6 bg-forest rounded-full"></span>
                                    <span class="text-xs font-bold text-forest uppercase tracking-wider">Plenary Session 3 — Moderator: TBD</span>
                                </div>
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-6 py-3.5"><span class="font-semibold text-gray-800">13:50 – 14:15</span></td>
                            <td class="px-6 py-3.5 text-gray-700">Plenary Speech 7: KS-7</td>
                        </tr>

                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-6 py-3.5"><span class="font-semibold text-gray-800">14:15 – 14:40</span></td>
                            <td class="px-6 py-3.5 text-gray-700">Plenary Speech 8: KS-8</td>
                        </tr>

                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-6 py-3.5"><span class="font-semibold text-gray-800">14:40 – 15:00</span></td>
                            <td class="px-6 py-3.5 text-gray-700">Q&A Session</td>
                        </tr>

                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-6 py-3.5"><span class="font-semibold text-gray-800">15:00 – 15:05</span></td>
                            <td class="px-6 py-3.5 text-gray-700">Plaque Awarding Ceremony and Group Photo</td>
                        </tr>

                        <tr class="bg-ivory/70">
                            <td class="px-6 py-3.5"><span class="font-semibold text-earth">15:05 – 15:20</span></td>
                            <td class="px-6 py-3.5">
                                <span class="inline-flex items-center gap-1.5 text-earth font-medium">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Coffee Break 2
                                </span>
                            </td>
                        </tr>

                        {{-- ═════════════════════════════════════════════════
                             VENUE: HYBRID VIA ZOOM
                             ═════════════════════════════════════════════════ --}}
                        <tr class="bg-atmosphere/5">
                            <td colspan="2" class="px-6 py-3">
                                <span class="inline-flex items-center gap-2 text-xs font-bold text-atmosphere uppercase tracking-wider">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                    </svg>
                                    Venue: Lecture Building, Hybrid via Zoom
                                </span>
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-6 py-3.5"><span class="font-semibold text-gray-800">15:20 – 15:35</span></td>
                            <td class="px-6 py-3.5 text-gray-700">Forum Group Discussion: India – Indonesia / Oral Presentation from Invited &amp; Contributed Speakers (Session 1)</td>
                        </tr>

                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-6 py-3.5"><span class="font-semibold text-gray-800">15:35 – 15:50</span></td>
                            <td class="px-6 py-3.5 text-gray-700">Oral Presentation from Invited &amp; Contributed Speakers (Session 2)</td>
                        </tr>

                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-6 py-3.5"><span class="font-semibold text-gray-800">15:50 – 16:05</span></td>
                            <td class="px-6 py-3.5 text-gray-700">Oral Presentation from Invited &amp; Contributed Speakers (Session 3)</td>
                        </tr>

                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-6 py-3.5"><span class="font-semibold text-gray-800">16:05 – 16:20</span></td>
                            <td class="px-6 py-3.5 text-gray-700">Oral Presentation from Invited &amp; Contributed Speakers (Session 4)</td>
                        </tr>

                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-6 py-3.5"><span class="font-semibold text-gray-800">16:20 – 16:35</span></td>
                            <td class="px-6 py-3.5 text-gray-700">Oral Presentation from Invited &amp; Contributed Speakers (Session 5)</td>
                        </tr>

                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-6 py-3.5"><span class="font-semibold text-gray-800">16:35 – 16:50</span></td>
                            <td class="px-6 py-3.5 text-gray-700">Oral Presentation from Invited &amp; Contributed Speakers (Session 6)</td>
                        </tr>

                        {{-- Closing --}}
                        <tr class="bg-forest/5 font-medium">
                            <td class="px-6 py-3.5"><span class="font-semibold text-forest">16:50 – 17:10</span></td>
                            <td class="px-6 py-3.5">
                                <span class="inline-flex items-center gap-1.5 text-forest">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    Closing – Commitment Indonesia – India
                                </span>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

            {{-- Table Footer Note --}}
            <div class="bg-gray-50 border-t border-gray-200 px-6 py-4">
                <div class="flex items-start gap-2 text-xs text-gray-500">
                    <svg class="w-4 h-4 text-gray-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>
                        <strong>Note:</strong> This rundown is tentative and subject to change. Times remain as originally scheduled; speaker assignments to each plenary/oral-presentation slot (KS-1–KS-8 and Sessions 1–6) are to be finalized from the speaker list.
                    </span>
                </div>
            </div>
        </div>

        {{-- CTA --}}
        <div class="text-center mt-10">
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
