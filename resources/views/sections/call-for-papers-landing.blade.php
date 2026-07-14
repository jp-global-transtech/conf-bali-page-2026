@php
    $subThemes = config('conference.call_for_papers_subthemes', []);
    $keyDates = [
        ['event' => 'Abstract Submission', 'date' => '15 July 2026'],
        ['event' => 'Registration Deadline', 'date' => '25 July 2026'],
    ];
@endphp

<section id="call-for-abstract" class="py-16 bg-white">

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Call for Abstract</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                We welcome abstract submissions across 13 interdisciplinary sub-themes on sustainable business and environmental management
            </p>
        </div>

        <div class="max-w-4xl mx-auto mb-12">
            <div class="bg-gradient-to-br from-forest/5 to-sage/5 rounded-2xl p-6 md:p-8 border border-forest/15">
                <div class="flex items-start gap-5">
                    <div class="flex-shrink-0 w-14 h-14 rounded-2xl bg-gradient-to-br from-forest to-sage flex items-center justify-center shadow-sm">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Online Conference</h3>
                        <p class="text-gray-600 leading-relaxed mb-4">
                            The Call for Abstract will be hosted as an <strong class="text-gray-900">Online Conference</strong> running parallel to the main event.
                        </p>
                        <div class="inline-flex items-center gap-2 px-4 py-2 bg-forest/10 border border-forest/20 rounded-full">
                            <svg class="w-4 h-4 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-sm font-medium text-forest">All accepted abstracts eligible for publication</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-3xl mx-auto mb-12">
            <div class="space-y-3">
                @foreach($subThemes as $index => $subTheme)
                <div class="bg-white rounded-xl px-5 py-4 border border-gray-100 hover:border-forest/20 hover:shadow-sm transition-all duration-200">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 w-8 h-8 rounded-lg bg-gradient-to-br from-forest to-sage flex items-center justify-center shadow-sm">
                            <span class="text-white font-bold text-xs">{{ str_pad($loop->index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                        </div>
                        <p class="text-gray-700 leading-relaxed pt-1">
                            {{ $subTheme['title'] ?? $subTheme }}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="max-w-4xl mx-auto">
            <div class="grid md:grid-cols-2 gap-8 items-center bg-gradient-to-br from-forest/[0.03] to-sage/[0.03] rounded-2xl p-8 border border-forest/10">
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-5">Important Dates</h3>
                    <div class="space-y-4">
                        @foreach($keyDates as $date)
                        <div class="flex items-center gap-4 bg-white rounded-xl px-5 py-4 border border-gray-100 shadow-sm">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-forest/10 to-sage/10 flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-medium text-gray-900">{{ $date['event'] }}</p>
                                <p class="text-sm text-gray-500">{{ $date['date'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="text-center md:text-left">
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Ready to Submit?</h3>
                    <p class="text-gray-600 mb-6">Share your research and contribute to the global dialogue on climate resilience.</p>
                    <div class="flex flex-col sm:flex-row gap-3">
                        <a href="/templates/GETS2026_Abstract_Template.docx" download="GETS2026_Abstract_Template.docx" class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-white text-forest font-semibold rounded-lg border-2 border-forest hover:bg-forest/5 transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                            </svg>
                            <span>Download Template</span>
                        </a>
                        <a href="{{ route('conference.call-for-abstract') }}" class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-forest text-white font-semibold rounded-lg hover:bg-forest-700 transition-colors shadow-md hover:shadow-lg">
                            <span>Submit Your Abstract</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
