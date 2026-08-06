<section id="important-dates" class="py-16 md:py-20 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-emerald-50 text-emerald-800 text-sm font-medium rounded-full mb-5">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                Key Dates
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Important Dates</h2>
            <p class="text-lg text-gray-600">
                Key dates you shouldn't miss for GETS 2026.
            </p>
        </div>

        <div class="relative">
            {{-- Timeline Line --}}
            <div class="absolute left-8 top-0 bottom-0 w-0.5 bg-emerald-200"></div>

            @php
                $timeline = [
                    [
                        'icon'   => 'calendar',
                        'date'   => '7 Aug',
                        'title'  => 'Registration Opens',
                        'desc'   => 'Call for Abstracts',
                    ],
                    [
                        'icon'   => 'document',
                        'date'   => '15 Aug',
                        'title'  => 'Submission Deadline',
                        'desc'   => '',
                    ],
                    [
                        'icon'   => 'check',
                        'date'   => '19 Aug',
                        'title'  => 'Acceptance Notification',
                        'desc'   => '',
                    ],
                    [
                        'icon'   => 'card',
                        'date'   => '20 Aug',
                        'title'  => 'Presenter Confirmation & Payment Deadline',
                        'desc'   => '',
                    ],
                    [
                        'icon'   => 'book',
                        'date'   => '21 Aug',
                        'title'  => 'Final Program Released',
                        'desc'   => '',
                    ],
                    [
                        'icon'   => 'mic',
                        'date'   => '24 Aug',
                        'title'  => 'GETS 2026 Conference',
                        'desc'   => '',
                    ],
                ];
            @endphp

            @foreach ($timeline as $item)
                <div class="relative flex items-start gap-6 mb-10 last:mb-0">
                    {{-- Icon Marker --}}
                    <div class="relative z-10 flex-shrink-0">
                        <div class="w-16 h-16 rounded-full bg-white border-2 border-emerald-200 shadow-sm flex items-center justify-center">
                            @if ($item['icon'] === 'calendar')
                                <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            @elseif ($item['icon'] === 'document')
                                <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            @elseif ($item['icon'] === 'check')
                                <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            @elseif ($item['icon'] === 'card')
                                <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h.01M11 15h2M5 6h14a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2z" />
                                </svg>
                            @elseif ($item['icon'] === 'book')
                                <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            @elseif ($item['icon'] === 'mic')
                                <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-14 0m7 7v4m-4 0h8m-4-11a3 3 0 100-6 3 3 0 000 6z" />
                                </svg>
                            @endif
                        </div>
                    </div>

                    {{-- Content --}}
                    <div class="flex-1 pt-3">
                        <span class="inline-block px-3 py-1 text-xs font-semibold rounded-full mb-2 bg-emerald-50 text-emerald-700 border border-emerald-200">
                            {{ $item['date'] }}
                        </span>
                        <h3 class="text-lg font-semibold text-gray-900 mb-1">{{ $item['title'] }}</h3>
                        @if (!empty($item['desc']))
                            <p class="text-gray-600 text-sm">{{ $item['desc'] }}</p>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
