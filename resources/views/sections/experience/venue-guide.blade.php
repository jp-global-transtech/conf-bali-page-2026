{{--
    VENUE GUIDE SECTION
    Experience: Curated participant experience guide - NOT OTA-style
    Emotional Goal: Anticipation, Comfort, Location Excitement
--}}
@props(['venue' => null])

<section class="section-cinematic relative py-12 md:py-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">

            {{-- Venue Image Carousel --}}
            <div class="relative order-2 lg:order-1">
                <x-image-carousel
                    :images="[
                        'images/venue/lecture-building-2.jpg',
                        'images/venue/lecture-building-aerial.jpg',
                        'images/venue/theater-rear.jpg',
                        'images/venue/theater-front.jpg'
                    ]"
                    :alts="[
                        'Lecture Building Universitas Udayana - Front View',
                        'Lecture Building Universitas Udayana - Aerial View',
                        'Theater Room - Rear View',
                        'Theater Room - Front View'
                    ]"
                />
                {{-- Floating accent --}}
                <div class="absolute -bottom-6 -right-6 w-40 h-40 bg-sage/30 rounded-3xl -z-10 blur-2xl"></div>
            </div>

            {{-- Venue Content --}}
            <div class="order-1 lg:order-2">
                <span class="inline-block px-4 py-1.5 bg-forest/10 text-forest font-medium text-sm rounded-full mb-6 font-sans">Conference Venue</span>

                <h2 class="text-cinematic text-4xl sm:text-5xl text-forest mb-6 leading-tight">
                    {{ $venue['name'] ?? 'Universitas Udayana, Bali' }}
                </h2>

                <p class="font-sans text-lg text-earth leading-relaxed mb-8 editorial-relaxed">
                    {{ $venue['description'] ?? 'Premier state university in Bali offering world-class conference facilities with stunning views of Bali\'s natural beauty and cultural heritage.' }}
                </p>

                {{-- Venue Features --}}
                <div class="grid grid-cols-2 gap-4 mb-8">
                    @foreach($venue['features'] ?? [
                        'Modern lecture halls with AV equipment',
                        'High-speed WiFi throughout',
                        'Catering services available',
                        'Prayer rooms',
                        'Accessibility features',
                    ] as $feature)
                    <div class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-sage flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span class="font-sans text-earth text-sm">{{ $feature }}</span>
                    </div>
                    @endforeach
                </div>

                {{-- Address --}}
                <div class="flex items-center gap-3 text-earth/70 font-sans mb-6">
                    <svg class="w-5 h-5 text-atmosphere" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span>{{ $venue['address'] ?? 'Bali, Indonesia' }}</span>
                </div>

                {{-- Udayana Gallery Link --}}
                <a href="https://www.unud.ac.id/galleries/gedung-lecture-building/"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="inline-flex items-center gap-2 px-4 py-2.5 bg-forest text-white font-sans text-sm font-medium rounded-lg hover:bg-sage transition-colors shadow-md hover:shadow-lg">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span>View Photo Gallery</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                </a>
            </div>

        </div>

        {{-- Google Maps --}}
        <div class="mt-12">
            <div class="rounded-2xl overflow-hidden shadow-lg border border-gray-200">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.867366789986!2d115.1645!3d-8.7902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2408a9b6c4f17%3A0x6c5e6e4e4e4e4e4e!2sLecture%20Building%2C%20Universitas%20Udayana%2C%20Jimbaran!5e0!3m2!1sid!2sid!4v1715980000000!5m2!1sid!2sid"
                    width="100%"
                    height="350"
                    style="border: 0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    class="w-full">
                </iframe>
            </div>
            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-2 mt-3">
                <p class="text-sm text-earth/70">
                    <span class="font-medium text-forest">Lecture Building</span>
                    — Jl. Prabu Udayana, Jimbaran, Bali
                </p>
                <a href="https://www.google.com/maps/search/?api=1&query=Universitas+Udayana+Lecture+Building+Jimbaran"
                   target="_blank" rel="noopener noreferrer"
                   class="text-sm text-forest font-medium hover:underline inline-flex items-center gap-1 flex-shrink-0">
                    <span>Open in Google Maps</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
