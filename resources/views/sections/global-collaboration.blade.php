{{--
    SECTION: CONNECTING INDIA AND INDONESIA THROUGH SUSTAINABILITY
    Professional Conference Style
--}}
@props(['institutions' => null])

<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-gray-900 mb-4">Connecting India and Indonesia Through Sustainability</h2>

        <p class="text-gray-600 max-w-3xl mx-auto mb-12">
            This conference strengthens intellectual and institutional collaboration between Indian and Indonesian scholars, researchers, professionals, and organizations.
        </p>

        {{-- Partner Institutions --}}
        <h3 class="text-xl font-semibold text-gray-900 mb-8">Partner Institutions</h3>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-8 max-w-6xl mx-auto mb-12">
            {{-- Universitas Udayana --}}
            <div class="p-6 bg-white border border-gray-200 rounded-lg flex flex-col items-center">
                <div class="w-32 h-20 mb-4 flex items-center justify-center">
                    <img src="{{ asset('images/logo/univ-udayana.png') }}" alt="Universitas Udayana Bali" class="max-w-full max-h-full object-contain">
                </div>
                <p class="text-sm font-medium text-gray-900">Universitas Udayana</p>
                <p class="text-xs text-gray-500">Bali, Indonesia</p>
            </div>

            {{-- Universitas Padjadjaran --}}
            <div class="p-6 bg-white border border-gray-200 rounded-lg flex flex-col items-center">
                <div class="w-32 h-20 mb-4 flex items-center justify-center">
                    <img src="{{ asset('images/logo/logo-unpad.png') }}" alt="Universitas Padjadjaran" class="max-w-full max-h-full object-contain">
                </div>
                <p class="text-sm font-medium text-gray-900">Universitas Padjadjaran</p>
                <p class="text-xs text-gray-500">Indonesia</p>
            </div>

            {{-- FiNder --}}
            <div class="p-6 bg-white border border-gray-200 rounded-lg flex flex-col items-center">
                <div class="w-32 h-20 mb-4 flex items-center justify-center">
                    <img src="{{ asset('images/logo/finder.png') }}" alt="FiNder Research Organization" class="max-w-full max-h-full object-contain">
                </div>
                <p class="text-sm font-medium text-gray-900">FiNder</p>
                <p class="text-xs text-gray-500">Research Organization</p>
            </div>

            {{-- Dhanamanjuri University --}}
            <div class="p-6 bg-white border border-gray-200 rounded-lg flex flex-col items-center">
                <div class="w-32 h-20 mb-4 flex items-center justify-center">
                    <img src="{{ asset('images/logo/dhanamanjuri-india.png') }}" alt="Dhanamanjuri University" class="max-w-full max-h-full object-contain">
                </div>
                <p class="text-sm font-medium text-gray-900">Dhanamanjuri University</p>
                <p class="text-xs text-gray-500">India</p>
            </div>

            {{-- NEMA India --}}
            <div class="p-6 bg-white border border-gray-200 rounded-lg flex flex-col items-center">
                <div class="w-32 h-20 mb-4 flex items-center justify-center">
                    <img src="{{ asset('images/logo/nema-india.png') }}" alt="NEMA India" class="max-w-full max-h-full object-contain">
                </div>
                <p class="text-sm font-medium text-gray-900">NEMA India</p>
                <p class="text-xs text-gray-500">India</p>
            </div>

            {{-- JP Global Transtech --}}
            <div class="p-6 bg-white border border-gray-200 rounded-lg flex flex-col items-center">
                <div class="w-32 h-20 mb-4 flex items-center justify-center">
                    <img src="{{ asset('images/logo/jp-transtech-logo.png') }}" alt="JP Global Transtech" class="max-w-full max-h-full object-contain">
                </div>
                <p class="text-sm font-medium text-gray-900">JP Global Transtech</p>
                <p class="text-xs text-gray-500">Indonesia</p>
            </div>
        </div>

    </div>
</section>
