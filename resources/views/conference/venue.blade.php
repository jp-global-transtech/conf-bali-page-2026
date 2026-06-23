@extends('layouts.conference')

@section('content')
<div class="min-h-screen bg-gray-50 pt-20 pb-12">
    <!-- Header -->
    <div class="bg-white border-b border-gray-200">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 py-8">
            <a href="{{ route('conference.landing') }}" class="text-conference-dark hover:text-conference mb-4 inline-block">&larr; Back to Conference Home</a>
            <h1 class="text-3xl sm:text-4xl font-bold text-gray-900">Venue & Accommodation</h1>
            <p class="text-gray-600 mt-2">{{ $conference['location'] ?? 'Bali, Indonesia' }}</p>
        </div>
    </div>

    <!-- Venue Content -->
    <div class="max-w-6xl mx-auto px-4 sm:px-6 py-8">
        <!-- Interactive Map -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-8">
            <div class="p-6 border-b border-gray-200">
                <h2 class="text-2xl font-bold text-gray-900 flex items-center gap-3">
                    <svg class="w-7 h-7 text-conference-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    Interactive Map
                </h2>
                <p class="text-gray-600 mt-1">Lecture Building, Universitas Udayana, Jimbaran</p>
            </div>

            <!-- Map Provider Selector -->
            <div class="p-6 border-b border-gray-200">
                <div class="max-w-xs">
                    <label for="map-provider" class="block text-sm font-medium text-gray-700 mb-2">Select Map Provider</label>
                    <select id="map-provider" onchange="changeMap(this.value)" class="py-3 px-4 pe-9 block w-full bg-white border border-gray-300 rounded-lg text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                        <option value="google" selected>Google Maps</option>
                        <option value="waze">Waze</option>
                        <option value="apple">Apple Maps</option>
                    </select>
                </div>
            </div>

            <!-- Map Embed Container -->
            <div class="relative h-[400px] md:h-[500px]">
                <iframe
                    id="map-iframe"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.867366789986!2d115.1645!3d-8.7902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2408a9b6c4f17%3A0x6c5e6e4e4e4e4e4e!2sLecture%20Building%2C%20Universitas%20Udayana%2C%20Jimbaran!5e0!3m2!1sid!2sid!4v1715980000000!5m2!1sid!2sid"
                    width="100%"
                    height="100%"
                    style="border: 0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    class="absolute inset-0">
                </iframe>
            </div>

            <!-- Address & Action Buttons -->
            <div class="p-6 bg-conference-dark/5">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <div>
                        <h3 class="font-semibold text-conference-dark mb-1">Lecture Building, Universitas Udayana</h3>
                        <p class="text-gray-600 text-sm">654C+PJW, Jl. Prabu Udayana, Jimbaran, Kec. Kuta Sel., Kabupaten Badung, Bali 80361</p>
                    </div>
                    <a href="https://www.google.com/maps/search/?api=1&query=Universitas+Udayana+Lecture+Building+Jimbaran"
                       target="_blank"
                       rel="noopener noreferrer"
                       id="link-map-action"
                       class="inline-flex items-center gap-2 px-6 py-3 bg-conference-dark hover:bg-conference text-white font-semibold rounded-lg transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span>Open in Google Maps</span>
                    </a>
                </div>
            </div>

            <script>
                const mapUrls = {
                    google: {
                        embed: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.867366789986!2d115.1645!3d-8.7902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2408a9b6c4f17%3A0x6c5e6e4e4e4e4e4e!2sLecture%20Building%2C%20Universitas%20Udayana%2C%20Jimbaran!5e0!3m2!1sid!2sid!4v1715980000000!5m2!1sid!2sid',
                        link: 'https://www.google.com/maps/search/?api=1&query=Universitas+Udayana+Lecture+Building+Jimbaran',
                        buttonText: 'Open in Google Maps'
                    },
                    waze: {
                        embed: 'https://embed.waze.com/iframe?zoom=13&lat=-8.7902&lon=115.1645&ct=livemap',
                        link: 'https://waze.com/ul?ll=-8.7902,115.1645&navigate=yes',
                        buttonText: 'Open in Waze'
                    },
                    apple: {
                        embed: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.867366789986!2d115.1645!3d-8.7902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2408a9b6c4f17%3A0x6c5e6e4e4e4e4e4e!2sLecture%20Building%2C%20Universitas%20Udayana%2C%20Jimbaran!5e0!3m2!1sid!2sid!4v1715980000000!5m2!1sid!2sid',
                        link: 'https://maps.apple.com/?q=Universitas+Udayana+Lecture+Building+Jimbaran',
                        buttonText: 'Open in Apple Maps'
                    }
                };

                function changeMap(provider) {
                    // Update iframe
                    document.getElementById('map-iframe').src = mapUrls[provider].embed;

                    // Update action button link and text
                    const activeLink = document.getElementById('link-map-action');
                    activeLink.href = mapUrls[provider].link;
                    activeLink.querySelector('span').textContent = mapUrls[provider].buttonText;
                }
            </script>
        </div>

        <!-- Venue Details -->
        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">{{ $venue['name'] ?? 'Lecture Building, Universitas Udayana' }}</h2>
            <p class="text-gray-600 mb-6">{{ $venue['description'] ?? 'Located at the prestigious Universitas Udayana in Bali, our venue provides world-class academic facilities with a beautiful tropical campus setting, perfect for our international interdisciplinary conference.' }}</p>

            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h3 class="font-semibold text-conference-dark mb-3 flex items-center gap-2">
                        <svg class="w-5 h-5 text-conference-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        </svg>
                        Address
                    </h3>
                    <p class="text-gray-600 mb-4">{{ $venue['address'] ?? '654C+PJW, Jl. Prabu Udayana, Jimbaran, Kec. Kuta Sel., Kabupaten Badung, Bali 80361' }}</p>

                    <h3 class="font-semibold text-conference-dark mb-3 flex items-center gap-2">
                        <svg class="w-5 h-5 text-conference-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                        </svg>
                        Getting There
                    </h3>
                    <ul class="space-y-2">
                        @foreach($venue['getting_there'] ?? [
                            'From Ngurah Rai International Airport (DPS): 45 minutes by car',
                            'Transportation assistance available for registered delegates',
                            'Taxi and ride-hailing services readily available',
                            'Campus parking available'
                        ] as $info)
                        <li class="flex items-start gap-2 text-gray-600">
                            <svg class="w-5 h-5 text-conference flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            {{ $info }}
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold text-conference-dark mb-3 flex items-center gap-2">
                        <svg class="w-5 h-5 text-conference-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                        Venue Facilities
                    </h3>
                    <ul class="space-y-2">
                        @foreach($venue['facilities'] ?? [
                            'Modern lecture halls with AV equipment',
                            'Breakout rooms for parallel sessions',
                            'High-speed WiFi throughout',
                            'Registration and secretariat area',
                            'Exhibition space for posters',
                            'Networking areas',
                            'Campus dining facilities'
                        ] as $facility)
                        <li class="flex items-start gap-2 text-gray-600">
                            <svg class="w-5 h-5 text-conference flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            {{ $facility }}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <!-- Accommodation Options -->
        <div>
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Accommodation Options</h2>

            @if(empty($accommodations) || (isset($accommodations[0]['category']) && $accommodations[0]['category'] === 'info'))
                <div class="bg-conference-dark/10 border border-conference-dark/20 rounded-xl p-8 text-center">
                    <svg class="w-16 h-16 mx-auto mb-4 text-conference-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <h3 class="text-xl font-semibold text-conference-dark mb-2">Accommodation Information Coming Soon</h3>
                    <p class="text-gray-600 max-w-md mx-auto">
                        Our team is currently finalizing accommodation partnerships with special conference rates.
                        Please check back soon for updates.
                    </p>
                </div>
            @else
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($accommodations ?? [] as $acc)
                    <div class="bg-white rounded-xl shadow-lg p-6">
                        <span class="inline-block px-2 py-1 text-xs uppercase rounded-full
                            @if($acc['category'] === 'luxury') bg-purple-100 text-purple-700
                            @elseif($acc['category'] === 'mid-range') bg-conference/10 text-conference
                            @else bg-gray-100 text-gray-700
                            @endif mb-3">
                            {{ $acc['category'] }}
                        </span>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">{{ $acc['name'] }}</h3>
                        @if(isset($acc['rate_from']))
                            <p class="text-conference-dark font-semibold mb-3">from {{ $acc['rate_from'] }}/night</p>
                        @endif
                        @if(isset($acc['description']))
                            <p class="text-gray-600 text-sm mb-3">{{ $acc['description'] }}</p>
                        @endif
                        @if(isset($acc['features']) && is_array($acc['features']))
                            <ul class="space-y-1 text-sm text-gray-600">
                                @foreach($acc['features'] as $feature)
                                <li class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-conference" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    {{ $feature }}
                                </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
