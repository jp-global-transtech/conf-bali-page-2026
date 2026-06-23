{{--
    WHO SHOULD ATTEND SECTION - Participant Criteria
    Premium International Conference Style for GETS 2026
--}}
@php
    $participants = [
        [
            'title' => 'Researchers & Academics',
            'description' => 'Researchers, lecturers, and scholars exploring sustainability, climate resilience, and environmental transition.',
            'icon' => 'academic-cap',
        ],
        [
            'title' => 'Students & Young Professionals',
            'description' => 'Undergraduate, graduate, and early-career professionals interested in sustainable innovation and global collaboration.',
            'icon' => 'users',
        ],
        [
            'title' => 'Industry & Business Leaders',
            'description' => 'Organizations and professionals developing sustainable solutions, green technologies, and responsible business practices.',
            'icon' => 'building',
        ],
        [
            'title' => 'Government & Policy Makers',
            'description' => 'Public sector representatives involved in climate policy, governance, and sustainable development.',
            'icon' => 'globe',
        ],
        [
            'title' => 'NGOs & Community Organizations',
            'description' => 'Civil society organizations working on environmental action and community resilience.',
            'icon' => 'leaf',
        ],
        [
            'title' => 'Innovators & Technology Experts',
            'description' => 'Professionals applying digital transformation and technology for environmental solutions.',
            'icon' => 'light-bulb',
        ],
    ];
@endphp

<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Section Header --}}
        <div class="text-center mb-12">
            <h2 class="text-3xl font-display font-bold text-gray-900 mb-4">Who Should Attend GETS 2026?</h2>
            <p class="text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Bringing together diverse perspectives from science, society, industry, and policy to accelerate sustainable transition.
            </p>
        </div>

        {{-- Participant Cards --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($participants as $item)
            <div class="bg-white rounded-3xl border border-gray-200 p-8
                        hover:-translate-y-1 hover:shadow-xl hover:border-green-300
                        transition-all duration-300">

                {{-- Icon --}}
                <div class="w-14 h-14 rounded-2xl bg-green-50 flex items-center justify-center mb-6">
                    @if($item['icon'] === 'academic-cap')
                        <svg class="w-7 h-7 text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l1.268-2.506 1.324 2.506" />
                        </svg>
                    @elseif($item['icon'] === 'users')
                        <svg class="w-7 h-7 text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    @elseif($item['icon'] === 'building')
                        <svg class="w-7 h-7 text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    @elseif($item['icon'] === 'globe')
                        <svg class="w-7 h-7 text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    @elseif($item['icon'] === 'leaf')
                        <svg class="w-7 h-7 text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    @elseif($item['icon'] === 'light-bulb')
                        <svg class="w-7 h-7 text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                    @endif
                </div>

                <h3 class="font-semibold text-gray-900 mb-3 text-lg">{{ $item['title'] }}</h3>
                <p class="text-gray-600 text-sm leading-relaxed">{{ $item['description'] }}</p>
            </div>
            @endforeach
        </div>

    </div>
</section>
