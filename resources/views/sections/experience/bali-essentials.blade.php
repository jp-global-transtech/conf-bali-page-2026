{{--
    BALI ESSENTIALS SECTION
    Experience: Cultural preparation and local insights
    Emotional Goal: Cultural Respect, Excitement, Belonging
--}}
@props(['essentials' => null])

<section class="section-cinematic bg-white relative">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-1.5 bg-atmosphere/10 text-atmosphere font-medium text-sm rounded-full mb-6 font-sans">Know Before You Go</span>

            <h2 class="text-cinematic text-4xl sm:text-5xl text-forest mb-6 leading-tight">
                Bali Essentials
            </h2>

            <p class="font-sans text-xl text-earth max-w-3xl mx-auto editorial-relaxed">
                Practical insights to help you make the most of your time in the Island of Gods
            </p>
        </div>

        {{-- Essentials Grid --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">

            {{-- Weather --}}
            <div class="group bg-ivory rounded-2xl p-8 border border-forest/10 hover:border-sage/30 transition-all">
                <div class="w-14 h-14 bg-gradient-to-br from-sage/20 to-atmosphere/20 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-display font-semibold text-forest mb-3">Weather in August</h3>
                <p class="font-sans text-earth leading-relaxed text-sm">
                    Dry season with pleasant temperatures (26-28°C). Light, breathable clothing recommended. Bring a light jacket for air-conditioned venues.
                </p>
            </div>

            {{-- Currency --}}
            <div class="group bg-ivory rounded-2xl p-8 border border-forest/10 hover:border-sage/30 transition-all">
                <div class="w-14 h-14 bg-gradient-to-br from-sage/20 to-atmosphere/20 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-display font-semibold text-forest mb-3">Currency</h3>
                <p class="font-sans text-earth leading-relaxed text-sm">
                    Indonesian Rupiah (IDR). ATMs widely available. Credit cards accepted at most establishments. Cash useful for local markets.
                </p>
            </div>

            {{-- Language --}}
            <div class="group bg-ivory rounded-2xl p-8 border border-forest/10 hover:border-sage/30 transition-all">
                <div class="w-14 h-14 bg-gradient-to-br from-sage/20 to-atmosphere/20 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />
                    </svg>
                </div>
                <h3 class="text-xl font-display font-semibold text-forest mb-3">Language</h3>
                <p class="font-sans text-earth leading-relaxed text-sm">
                    Bahasa Indonesia (official). English widely spoken in tourist areas. Learning a few Balinese phrases warmly appreciated by locals.
                </p>
            </div>

            {{-- Culture --}}
            <div class="group bg-ivory rounded-2xl p-8 border border-forest/10 hover:border-sage/30 transition-all">
                <div class="w-14 h-14 bg-gradient-to-br from-sage/20 to-atmosphere/20 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-display font-semibold text-forest mb-3">Cultural Notes</h3>
                <p class="font-sans text-earth leading-relaxed text-sm">
                    Dress modestly when visiting temples. Use right hand for eating/giving. Respect religious ceremonies. Smile—Bali is the Land of Smiles!
                </p>
            </div>

            {{-- Time Zone --}}
            <div class="group bg-ivory rounded-2xl p-8 border border-forest/10 hover:border-sage/30 transition-all">
                <div class="w-14 h-14 bg-gradient-to-br from-sage/20 to-atmosphere/20 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-display font-semibold text-forest mb-3">Time Zone</h3>
                <p class="font-sans text-earth leading-relaxed text-sm">
                    Central Indonesia Time (WITA), UTC+8. No daylight saving. Plan jet lag recovery if traveling from distant time zones.
                </p>
            </div>

            {{-- Connectivity --}}
            <div class="group bg-ivory rounded-2xl p-8 border border-forest/10 hover:border-sage/30 transition-all">
                <div class="w-14 h-14 bg-gradient-to-br from-sage/20 to-atmosphere/20 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0" />
                    </svg>
                </div>
                <h3 class="text-xl font-display font-semibold text-forest mb-3">Staying Connected</h3>
                <p class="font-sans text-earth leading-relaxed text-sm">
                    Free WiFi at conference venue. Consider local SIM card (Telkomsel/Indosat) for reliable data. Venue WiFi available throughout.
                </p>
            </div>

        </div>

        {{-- Quick Tips --}}
        <div class="mt-16 max-w-4xl mx-auto bg-gradient-to-br from-forest/5 to-sage/5 rounded-2xl p-8 border border-forest/10">
            <h3 class="text-lg font-display font-semibold text-forest mb-4 text-center">Quick Tips for Conference Attendees</h3>
            <div class="grid sm:grid-cols-2 gap-4 text-sm font-sans text-earth">
                <div class="flex items-start gap-3">
                    <svg class="w-5 h-5 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span>Stay hydrated—Bali's tropical climate is warmer than many expect</span>
                </div>
                <div class="flex items-start gap-3">
                    <svg class="w-5 h-5 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span>Bring sunscreen and insect repellent for outdoor activities</span>
                </div>
                <div class="flex items-start gap-3">
                    <svg class="w-5 h-5 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span>Respect prayer times—some venues may pause briefly</span>
                </div>
                <div class="flex items-start gap-3">
                    <svg class="w-5 h-5 text-sage flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span>Try local cuisine—ask vendors about spice levels if sensitive</span>
                </div>
            </div>
        </div>
    </div>
</section>
