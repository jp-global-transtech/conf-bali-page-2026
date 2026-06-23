{{--
    LOGO CLOUD SECTION - Partner Institutions
    Premium International Conference Style for GETS 2026
--}}
@php
    $partnerLogos = config('conference.partner_logos', []);
    $managedBy = $partnerLogos['managed_by'] ?? [];
    $organizedBy = $partnerLogos['organized_by'] ?? [];
@endphp

<section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

        {{-- Section Header --}}
        <h2 class="text-3xl font-display font-bold text-gray-900 mb-3">Global Collaboration Network</h2>
        <p class="text-gray-600 max-w-3xl mx-auto mb-12 text-sm leading-relaxed">
            Connecting academic, research, and professional institutions<br>to advance sustainable transition.
        </p>

        {{-- Organized By --}}
        @if(!empty($organizedBy))
        <div class="mb-12">
            <h3 class="text-xs font-semibold text-forest uppercase tracking-wider mb-6">Organized By</h3>
            <div class="flex flex-wrap items-center justify-center gap-8 md:gap-12">
                @foreach($organizedBy as $logo)
                <div class="logo-item flex items-center justify-center">
                    <img src="{{ asset('images/logo/' . $logo['logo']) }}"
                         alt="{{ $logo['name'] }}"
                         class="h-16 md:h-20 w-auto object-contain
                                filter grayscale opacity-55
                                transition-all duration-300 ease
                                hover:filter-none hover:opacity-100">
                </div>
                @endforeach
            </div>
        </div>
        @endif

        {{-- Managed By --}}
        @if(!empty($managedBy))
        <div>
            <h3 class="text-xs font-semibold text-forest uppercase tracking-wider mb-6">Managed By</h3>
            <div class="flex flex-wrap items-center justify-center gap-8 md:gap-12">
                @foreach($managedBy as $logo)
                <div class="logo-item flex items-center justify-center">
                    <img src="{{ asset('images/logo/' . $logo['logo']) }}"
                         alt="{{ $logo['name'] }}"
                         class="h-16 md:h-20 w-auto object-contain
                                filter grayscale opacity-55
                                transition-all duration-300 ease
                                hover:filter-none hover:opacity-100">
                </div>
                @endforeach
            </div>
        </div>
        @endif

    </div>
</section>
