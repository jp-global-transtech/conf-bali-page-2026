{{--
    ACCOMMODATIONS SECTION
    Experience: Curated accommodation guide - NOT OTA booking style
    Emotional Goal: Comfort, Choice, Local Experience
--}}
@props(['accommodations' => null])

<section class="section-cinematic bg-forest-50 relative py-12 md:py-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-1.5 bg-sage/10 text-forest font-medium text-sm rounded-full mb-6 font-sans">Stay in Bali</span>

            <h2 class="text-cinematic text-4xl sm:text-5xl text-forest mb-6 leading-tight">
                Curated Accommodations
            </h2>

            <p class="font-sans text-xl text-earth max-w-3xl mx-auto editorial-relaxed">
                We've carefully selected accommodations that balance comfort, convenience, and authentic Balinese hospitality
            </p>
        </div>

        {{-- Accommodation Tiers --}}
        <div class="space-y-12 max-w-5xl mx-auto">

            {{-- Premium Tier --}}
            <div class="bg-white rounded-3xl p-8 sm:p-10 border border-forest/10 shadow-sm hover:shadow-lg transition-shadow">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-6">
                    <div>
                        <span class="inline-block px-3 py-1 bg-gradient-to-r from-atmosphere/20 to-sage/20 text-forest text-xs font-semibold rounded-full mb-2 font-sans">Premium</span>
                        <h3 class="text-2xl font-display font-semibold text-forest">Luxury Resorts & Villas</h3>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-sans text-earth/60">Starting from</p>
                        <p class="text-xl font-display font-semibold text-forest">$150-300+/night</p>
                    </div>
                </div>
                <p class="font-sans text-earth leading-relaxed mb-6">
                    World-class resorts with stunning ocean views, private pools, spa services, and direct beach access. Experience Balinese luxury at its finest.
                </p>
                <div class="grid sm:grid-cols-3 gap-4">
                    <div class="flex items-center gap-2 text-earth/70 text-sm">
                        <svg class="w-4 h-4 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>5-star amenities</span>
                    </div>
                    <div class="flex items-center gap-2 text-earth/70 text-sm">
                        <svg class="w-4 h-4 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>Conference shuttle</span>
                    </div>
                    <div class="flex items-center gap-2 text-earth/70 text-sm">
                        <svg class="w-4 h-4 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>On-site dining</span>
                    </div>
                </div>
            </div>

            {{-- Mid-Range Tier --}}
            <div class="bg-white rounded-3xl p-8 sm:p-10 border border-sage/20 shadow-sm hover:shadow-lg transition-shadow">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-6">
                    <div>
                        <span class="inline-block px-3 py-1 bg-sage/10 text-sage text-xs font-semibold rounded-full mb-2 font-sans">Recommended</span>
                        <h3 class="text-2xl font-display font-semibold text-forest">Boutique Hotels & Homestays</h3>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-sans text-earth/60">Starting from</p>
                        <p class="text-xl font-display font-semibold text-forest">$50-120/night</p>
                    </div>
                </div>
                <p class="font-sans text-earth leading-relaxed mb-6">
                    Charming properties that blend modern comfort with traditional Balinese architecture. Many family-run options offering personalized service and local insights.
                </p>
                <div class="grid sm:grid-cols-3 gap-4">
                    <div class="flex items-center gap-2 text-earth/70 text-sm">
                        <svg class="w-4 h-4 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>Authentic experience</span>
                    </div>
                    <div class="flex items-center gap-2 text-earth/70 text-sm">
                        <svg class="w-4 h-4 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>Breakfast included</span>
                    </div>
                    <div class="flex items-center gap-2 text-earth/70 text-sm">
                        <svg class="w-4 h-4 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>Walking distance</span>
                    </div>
                </div>
            </div>

            {{-- Budget Tier --}}
            <div class="bg-white rounded-3xl p-8 sm:p-10 border border-forest/10 shadow-sm hover:shadow-lg transition-shadow">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-6">
                    <div>
                        <span class="inline-block px-3 py-1 bg-forest/10 text-earth text-xs font-semibold rounded-full mb-2 font-sans">Budget-Friendly</span>
                        <h3 class="text-2xl font-display font-semibold text-forest">Guesthouses & Hostels</h3>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-sans text-earth/60">Starting from</p>
                        <p class="text-xl font-display font-semibold text-forest">$15-40/night</p>
                    </div>
                </div>
                <p class="font-sans text-earth leading-relaxed mb-6">
                    Clean, comfortable, and socially vibrant options for budget-conscious travelers. Great for connecting with fellow conference attendees from around the world.
                </p>
                <div class="grid sm:grid-cols-3 gap-4">
                    <div class="flex items-center gap-2 text-earth/70 text-sm">
                        <svg class="w-4 h-4 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>WiFi included</span>
                    </div>
                    <div class="flex items-center gap-2 text-earth/70 text-sm">
                        <svg class="w-4 h-4 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>Shared kitchens</span>
                    </div>
                    <div class="flex items-center gap-2 text-earth/70 text-sm">
                        <svg class="w-4 h-4 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>Community spaces</span>
                    </div>
                </div>
            </div>

        </div>

        {{-- Booking Note --}}
        <div class="mt-12 max-w-3xl mx-auto text-center">
            <p class="font-sans text-earth/70 text-sm">
                <svg class="w-4 h-4 inline-block mr-2 text-atmosphere" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Conference attendees receive special rates at partner properties. Contact us for the booking code.
            </p>
        </div>
    </div>
</section>
