{{--
    INVITATION LETTER SECTION
    Experience: Clear path to official documentation
    Emotional Goal: Professional Support, Documentation Ease
--}}
<section class="section-cinematic bg-white relative">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="inline-block px-4 py-1.5 bg-atmosphere/10 text-atmosphere font-medium text-sm rounded-full mb-6 font-sans">Documentation</span>

        <h2 class="text-cinematic text-4xl sm:text-5xl text-forest mb-6 leading-tight">
            Invitation Letters
        </h2>

        <p class="font-sans text-xl text-earth max-w-3xl mx-auto editorial-relaxed mb-12">
            Official invitation letters are available for registered attendees who require documentation for visa applications or employer approval.
        </p>

        {{-- Letter Options --}}
        <div class="grid sm:grid-cols-2 gap-6 mb-12">

            {{-- Standard Letter --}}
            <div class="bg-ivory rounded-2xl p-8 border border-forest/10 text-left">
                <div class="w-12 h-12 bg-gradient-to-br from-sage/20 to-atmosphere/20 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <h4 class="text-lg font-display font-semibold text-forest mb-2">Standard Invitation Letter</h4>
                <p class="font-sans text-earth/70 text-sm mb-4">
                    Conference participation confirmation with event details suitable for most visa applications.
                </p>
                <span class="text-xs font-sans text-sage font-semibold">Available after registration</span>
            </div>

            {{-- Supporting Letter --}}
            <div class="bg-ivory rounded-2xl p-8 border border-forest/10 text-left">
                <div class="w-12 h-12 bg-gradient-to-br from-sage/20 to-atmosphere/20 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <h4 class="text-lg font-display font-semibold text-forest mb-2">Detailed Support Letter</h4>
                <p class="font-sans text-earth/70 text-sm mb-4">
                    Extended letter with presenter details (if applicable) and additional conference background information.
                </p>
                <span class="text-xs font-sans text-sage font-semibold">For presenters & special cases</span>
            </div>

        </div>

        {{-- Request Process --}}
        <div class="bg-gradient-to-br from-forest/5 to-sage/5 rounded-2xl p-8 border border-forest/10 text-left max-w-3xl mx-auto">
            <h4 class="text-lg font-display font-semibold text-forest mb-4 text-center">How to Request</h4>
            <ol class="space-y-3 text-sm font-sans text-earth">
                <li class="flex items-start gap-3">
                    <span class="w-6 h-6 bg-sage text-white rounded-full flex items-center justify-center flex-shrink-0 text-xs font-bold">1</span>
                    <span>Complete your conference registration</span>
                </li>
                <li class="flex items-start gap-3">
                    <span class="w-6 h-6 bg-sage text-white rounded-full flex items-center justify-center flex-shrink-0 text-xs font-bold">2</span>
                    <span>Email your request to <a href="mailto:{{ config('conference.support_email') }}" class="text-atmosphere hover:underline">{{ config('conference.support_email') }}</a></span>
                </li>
                <li class="flex items-start gap-3">
                    <span class="w-6 h-6 bg-sage text-white rounded-full flex items-center justify-center flex-shrink-0 text-xs font-bold">3</span>
                    <span>Include your full name, registration number, and embassy requirements (if specific)</span>
                </li>
                <li class="flex items-start gap-3">
                    <span class="w-6 h-6 bg-sage text-white rounded-full flex items-center justify-center flex-shrink-0 text-xs font-bold">4</span>
                    <span>Receive letter within 3-5 business days via email</span>
                </li>
            </ol>
        </div>
    </div>
</section>
