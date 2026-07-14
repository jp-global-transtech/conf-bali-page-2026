{{--
    TRANSPORTATION SECTION
    Experience: Practical guidance for getting to/from venue
    Emotional Goal: Ease, Preparedness, No-Stress Travel
--}}
@props(['transportation' => null])

<section class="section-cinematic bg-white relative py-12 md:py-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-1.5 bg-atmosphere/10 text-atmosphere font-medium text-sm rounded-full mb-6 font-sans">Getting There</span>

            <h2 class="text-cinematic text-4xl sm:text-5xl text-forest mb-6 leading-tight">
                Transportation Guide
            </h2>

            <p class="font-sans text-xl text-earth max-w-3xl mx-auto editorial-relaxed">
                Everything you need to know about getting to Bali and reaching the conference venue
            </p>
        </div>

        {{-- From Airport --}}
        <div class="max-w-4xl mx-auto mb-16">
            <div class="bg-ivory rounded-3xl p-8 sm:p-12 border border-forest/10">
                <div class="flex items-start gap-6 mb-6">
                    <div class="w-16 h-16 bg-gradient-to-br from-atmosphere/20 to-sage/20 rounded-2xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-8 h-8 text-atmosphere" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-display font-semibold text-forest mb-2">From Ngurah Rai International Airport (DPS)</h3>
                        <p class="font-sans text-earth leading-relaxed">The airport is approximately 20 minutes from the conference venue.</p>
                    </div>
                </div>

                <div class="grid sm:grid-cols-3 gap-6">
                    {{-- Taxi --}}
                    <div class="bg-white rounded-xl p-6">
                        <div class="w-10 h-10 bg-forest/10 rounded-lg flex items-center justify-center mb-3">
                            <svg class="w-5 h-5 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                            </svg>
                        </div>
                        <h4 class="font-display font-semibold text-forest mb-2">Taxi</h4>
                        <p class="font-sans text-earth/70 text-sm">Official airport taxi available outside arrivals</p>
                    </div>

                    {{-- Ride-hailing --}}
                    <div class="bg-white rounded-xl p-6">
                        <div class="w-10 h-10 bg-forest/10 rounded-lg flex items-center justify-center mb-3">
                            <svg class="w-5 h-5 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h4 class="font-display font-semibold text-forest mb-2">Ride-Hailing</h4>
                        <p class="font-sans text-earth/70 text-sm">Grab, Gojek, or Bluebird apps available</p>
                    </div>

                    {{-- Hotel Shuttle --}}
                    <div class="bg-white rounded-xl p-6">
                        <div class="w-10 h-10 bg-forest/10 rounded-lg flex items-center justify-center mb-3">
                            <svg class="w-5 h-5 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <h4 class="font-display font-semibold text-forest mb-2">Hotel Shuttle</h4>
                        <p class="font-sans text-earth/70 text-sm">Check with your hotel for shuttle services</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Local Transportation Tips --}}
        <div class="max-w-4xl mx-auto">
            <h3 class="text-xl font-display font-semibold text-forest mb-6 text-center">Getting Around Bali</h3>

            <div class="grid sm:grid-cols-2 gap-6">
                <div class="flex items-start gap-4 p-6 bg-ivory/50 rounded-xl border border-forest/5">
                    <svg class="w-6 h-6 text-sage flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div>
                        <h4 class="font-display font-semibold text-forest mb-1">Ride-Hailing Apps</h4>
                        <p class="font-sans text-earth/70 text-sm">Grab and Gojek are most reliable for daily transportation</p>
                    </div>
                </div>

                <div class="flex items-start gap-4 p-6 bg-ivory/50 rounded-xl border border-forest/5">
                    <svg class="w-6 h-6 text-sage flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div>
                        <h4 class="font-display font-semibold text-forest mb-1">Car Rental</h4>
                        <p class="font-sans text-earth/70 text-sm">Available at airport and through hotels (International license required)</p>
                    </div>
                </div>

                <div class="flex items-start gap-4 p-6 bg-ivory/50 rounded-xl border border-forest/5">
                    <svg class="w-6 h-6 text-sage flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div>
                        <h4 class="font-display font-semibold text-forest mb-1">Traditional Transport</h4>
                        <p class="font-sans text-earth/70 text-sm">Ojek (motorcycle taxi) and Becak (pedicab) for short distances</p>
                    </div>
                </div>

                <div class="flex items-start gap-4 p-6 bg-ivory/50 rounded-xl border border-forest/5">
                    <svg class="w-6 h-6 text-sage flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div>
                        <h4 class="font-display font-semibold text-forest mb-1">Conference Shuttle</h4>
                        <p class="font-sans text-earth/70 text-sm">Complimentary shuttle from partner hotels during conference days</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
