{{--
    HERO SECTION - Global Environment & Transition Summit 2026
    Premium International Conference Style

    SEO Keywords: GETS 2026, Climate Summit, Environmental Conference,
    Global Transition Forum, Climate Resilience Summit, Green Technology 2026
--}}
<section class="relative min-h-[85vh] flex items-center justify-center overflow-hidden pt-24 pb-16 lg:pt-32 lg:pb-20">

    {{-- Hero Background - Clean Scientific Theme --}}
    <div class="absolute inset-0">
        {{-- Layer 1: Base gradient (clean white to soft green) --}}
        <div class="absolute inset-0 bg-gradient-to-br from-white via-[#F8FBF9] to-[#F5F9F6]"></div>

        {{-- Layer 2: Very subtle grid pattern --}}
        <div class="absolute inset-0 opacity-[0.015]" style="background-image: radial-gradient(circle at 1px 1px, #166534 1px, transparent 0); background-size: 60px 60px;"></div>

        {{-- Layer 3: Soft gradient glow --}}
        <div class="absolute top-[-5%] right-[-5%] w-[500px] h-[500px] bg-emerald-500/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-[-5%] left-[-5%] w-[400px] h-[400px] bg-teal-500/3 rounded-full blur-3xl"></div>
    </div>

    {{-- Content Container --}}
    <div class="relative z-10 max-w-5xl mx-auto px-6 sm:px-8 lg:px-12 text-center">

        {{-- Main Headline - GETS 2026 Branding --}}
        <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl text-gray-900 mb-4 leading-tight tracking-tight max-w-[900px] mx-auto text-center"
            x-data="{ visible: false }"
            x-transition:enter="transition ease-out duration-1000 delay-200"
            x-transition:enter-start="opacity-0 translate-y-8"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-init="setTimeout(() => visible = true, 100)">
            <span class="block font-semibold text-gray-900">Global Environment &</span>
            <span class="block font-bold text-forest mt-1">Transition Summit 2026</span>
        </h1>

        {{-- Subtitle --}}
        <p class="font-sans text-base sm:text-lg text-gray-600 max-w-[600px] mx-auto mb-8 leading-relaxed text-center"
           x-data="{ visible: false }"
           x-transition:enter="transition ease-out duration-800 delay-400"
           x-transition:enter-start="opacity-0 translate-y-4"
           x-transition:enter-end="opacity-100 translate-y-0"
           x-init="setTimeout(() => visible = true, 100)">
            An international scientific forum advancing climate resilience through research, innovation, and global collaboration.
        </p>

        {{-- Conference Metadata --}}
        <div class="flex flex-wrap items-center justify-center gap-4 mb-8 text-sm text-gray-600"
             x-data="{ visible: false }"
             x-transition:enter="transition ease-out duration-800 delay-600"
             x-transition:enter-start="opacity-0 translate-y-4"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-init="setTimeout(() => visible = true, 100)">
            <div class="flex items-center gap-2">
                <svg class="w-4 h-4 text-forest" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M8 2v4" />
                    <path d="M16 2v4" />
                    <rect width="18" height="18" x="3" y="4" rx="2" />
                    <path d="M3 10h18" />
                </svg>
                <span>August 24, 2026</span>
            </div>
            <span class="text-gray-300">•</span>
            <div class="flex items-center gap-2">
                <svg class="w-4 h-4 text-forest" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                    <circle cx="12" cy="10" r="3" />
                </svg>
                <span>Universitas Udayana, Bali</span>
            </div>
        </div>

        {{-- CTA Buttons --}}
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-4"
             x-data="{ visible: false }"
             x-transition:enter="transition ease-out duration-800 delay-800"
             x-transition:enter-start="opacity-0 translate-y-4"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-init="setTimeout(() => visible = true, 100)">

            {{-- Primary CTA - Join as Participant --}}
            <a href="{{ route('conference.registration') }}" class="inline-flex items-center gap-2 px-8 py-4 bg-forest text-white font-semibold rounded-lg hover:bg-forest-700 transition-all shadow-md hover:shadow-lg">
                <span>Join as Participant</span>
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14" />
                    <path d="m12 5 7 7-7 7" />
                </svg>
            </a>

            {{-- Secondary CTA - Submit Abstract --}}
            <a href="{{ route('conference.call-for-abstract') }}" class="inline-flex items-center gap-2 px-8 py-4 bg-white text-forest font-semibold rounded-lg border-2 border-forest hover:bg-forest-50 transition-all">
                <span>Submit Abstract</span>
            </a>

        </div>

        {{-- CTA Microcopy --}}
        <p class="text-center text-gray-500 text-sm mb-8" x-data="{ visible: false }"
           x-transition:enter="transition ease-out duration-800 delay-900"
           x-transition:enter-start="opacity-0 translate-y-4"
           x-transition:enter-end="opacity-100 translate-y-0"
           x-init="setTimeout(() => visible = true, 100)">
            Submit your abstract or join the global discussion on environmental transition.
        </p>

        {{-- Countdown Timer - Conference Date Countdown --}}
        <div class="max-w-2xl mx-auto"
             x-data="{
                visible: false,
                countdown: {
                    days: 0,
                    hours: 0,
                    minutes: 0,
                    seconds: 0,
                    interval: null,
                    init() {
                        // Target date: August 24, 2026
                        const targetDate = new Date('2026-08-24T00:00:00').getTime();

                        const update = () => {
                            const now = new Date().getTime();
                            const distance = targetDate - now;

                            if (distance > 0) {
                                this.days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                this.hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                this.minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                this.seconds = Math.floor((distance % (1000 * 60)) / 1000);
                            }
                        };

                        update();
                        // Store interval for cleanup
                        this.interval = setInterval(update, 1000);
                    },
                    destroy() {
                        if (this.interval) {
                            clearInterval(this.interval);
                        }
                    }
                }
            }"
             x-init="countdown.init(); setTimeout(() => visible = true, 100)"
             x-transition:enter="transition ease-out duration-800 delay-1000"
             x-transition:enter-start="opacity-0 translate-y-4"
             x-transition:enter-end="opacity-100 translate-y-0">

            <div class="flex items-center justify-center gap-3 sm:gap-4">

                {{-- Days --}}
                <div class="text-center">
                    <div class="bg-white rounded-lg px-4 sm:px-6 py-4 sm:py-5 min-w-[70px] sm:min-w-[80px] shadow-sm border border-gray-200">
                        <h3 class="countdown-element font-display font-bold text-2xl sm:text-3xl lg:text-4xl text-forest" x-text="String(countdown.days).padStart(2, '0')"></h3>
                    </div>
                    <p class="text-xs sm:text-sm font-sans text-gray-600 mt-2 sm:mt-3 uppercase tracking-wide">Days</p>
                </div>

                {{-- Hours --}}
                <div class="text-center">
                    <div class="bg-white rounded-lg px-4 sm:px-6 py-4 sm:py-5 min-w-[70px] sm:min-w-[80px] shadow-sm border border-gray-200">
                        <h3 class="countdown-element font-display font-bold text-2xl sm:text-3xl lg:text-4xl text-forest" x-text="String(countdown.hours).padStart(2, '0')"></h3>
                    </div>
                    <p class="text-xs sm:text-sm font-sans text-gray-600 mt-2 sm:mt-3 uppercase tracking-wide">Hours</p>
                </div>

                {{-- Minutes --}}
                <div class="text-center">
                    <div class="bg-white rounded-lg px-4 sm:px-6 py-4 sm:py-5 min-w-[70px] sm:min-w-[80px] shadow-sm border border-gray-200">
                        <h3 class="countdown-element font-display font-bold text-2xl sm:text-3xl lg:text-4xl text-forest" x-text="String(countdown.minutes).padStart(2, '0')"></h3>
                    </div>
                    <p class="text-xs sm:text-sm font-sans text-gray-600 mt-2 sm:mt-3 uppercase tracking-wide">Minutes</p>
                </div>

                {{-- Seconds --}}
                <div class="text-center">
                    <div class="bg-white rounded-lg px-4 sm:px-6 py-4 sm:py-5 min-w-[70px] sm:min-w-[80px] shadow-sm border border-gray-200">
                        <h3 class="countdown-element font-display font-bold text-2xl sm:text-3xl lg:text-4xl text-forest" x-text="String(countdown.seconds).padStart(2, '0')"></h3>
                    </div>
                    <p class="text-xs sm:text-sm font-sans text-gray-600 mt-2 sm:mt-3 uppercase tracking-wide">Seconds</p>
                </div>

            </div>

            {{-- Countdown Label --}}
            <p class="text-center text-gray-600 text-sm font-sans mt-6 tracking-wide">To GETS 2026 • August 24, 2026</p>

        </div>

    </div>

    {{-- Scroll Indicator --}}
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce">
        <svg class="w-6 h-6 text-forest" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="m6 9 6 6 6-6" />
        </svg>
    </div>

</section>
