@extends('layouts.conference')

@section('title', 'Organizing Committee | GETS 2026')

@section('content')
<div class="min-h-screen bg-white pt-20">

    {{-- Hero Section --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16">
        <div class="text-center">
            <span class="inline-block text-sm font-medium text-earth mb-4">
                Bilateral Leadership
            </span>
            <h1 class="text-2xl md:text-3xl lg:text-4xl font-display font-bold text-forest mb-4">
                Organizing Committee
            </h1>
            <p class="text-lg text-earth max-w-3xl mx-auto leading-relaxed">
                A distinguished bilateral committee ensuring high-level strategic and academic standards across both nations
            </p>
        </div>
    </div>

    {{-- Committee Sections --}}
    @php
        $committee = config('conference.organizing_committee', []);
    @endphp

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

        {{-- Indonesia Committee --}}
        @if(isset($committee['indonesia']))
        <div class="mb-16">
            <h2 class="text-2xl md:text-3xl font-display font-bold text-forest mb-8">{{ $committee['indonesia']['label'] }}</h2>

            <div class="space-y-4">
                @foreach($committee['indonesia']['members'] as $member)
                <div class="border-l-4 border-forest pl-6 py-4 @if($member['role'] === 'Chief Patron') bg-forest/5 @endif">
                    <span class="inline-block text-xs font-semibold text-forest uppercase tracking-wide mb-2">
                        {{ $member['role'] }}
                    </span>
                    <h3 class="text-lg font-display font-semibold text-forest mb-1">{{ $member['name'] }}</h3>
                    <p class="text-sm text-atmosphere font-medium">{{ $member['position'] }}</p>
                    <p class="text-sm text-earth">{{ $member['institution'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
        @endif

        {{-- India Committee --}}
        @if(isset($committee['india']))
        <div class="mb-16">
            <h2 class="text-2xl md:text-3xl font-display font-bold text-forest mb-8">{{ $committee['india']['label'] }}</h2>

            <div class="space-y-4">
                @foreach($committee['india']['members'] as $member)
                <div class="border-l-4 border-atmosphere pl-6 py-4 @if($member['role'] === 'Chief Patron') bg-atmosphere/5 @endif">
                    <span class="inline-block text-xs font-semibold text-atmosphere uppercase tracking-wide mb-2">
                        {{ $member['role'] }}
                    </span>
                    <h3 class="text-lg font-display font-semibold text-forest mb-1">{{ $member['name'] }}</h3>
                    <p class="text-sm text-atmosphere font-medium">{{ $member['position'] }}</p>
                    <p class="text-sm text-earth">{{ $member['institution'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
        @endif

    </div>

    {{-- Organizing Entities Section --}}
    <div class="bg-gradient-to-b from-forest/5 to-transparent py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Section Header --}}
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl font-display font-bold text-forest">
                    Organizing Entities
                </h2>
            </div>

            {{-- Lead Host Card --}}
            <div class="mb-10">
                <div class="inline-flex items-center gap-2 mb-4 px-4 py-2 bg-forest/10 rounded-full">
                    <svg class="w-5 h-5 text-forest" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0z"/>
                    </svg>
                    <span class="text-sm font-semibold text-forest uppercase tracking-wide">Lead Host</span>
                </div>

                <div class="bg-white border border-forest/20 rounded-2xl p-8 shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                        <div class="flex items-center gap-5">
                            <img
                                src="{{ asset('images/logo/univ-udayana.png') }}"
                                alt="Universitas Udayana Logo"
                                class="w-20 h-20 object-contain flex-shrink-0"
                                loading="lazy"
                            >
                            <div>
                                <h3 class="text-xl md:text-2xl font-display font-bold text-forest mb-2">
                                    Universitas Udayana
                                </h3>
                                <p class="text-atmosphere font-medium text-sm mb-3">Lead Host</p>
                                <p class="text-earth">
                                    Indonesia
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3 px-4 py-2 bg-forest/10 rounded-xl">
                            <svg class="w-6 h-6 text-forest" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
                            </svg>
                            <span class="text-sm font-semibold text-forest">Primary Institution</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Co-Host & PMO Card --}}
            <div class="mb-10">
                <div class="inline-flex items-center gap-2 mb-4 px-4 py-2 bg-atmosphere/10 rounded-full">
                    <svg class="w-5 h-5 text-atmosphere" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"/>
                    </svg>
                    <span class="text-sm font-semibold text-atmosphere uppercase tracking-wide">Co-Host & PMO</span>
                </div>

                <div class="bg-white border border-atmosphere/20 rounded-2xl p-8 shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                        <div class="flex items-center gap-5">
                            <img
                                src="{{ asset('images/logo/finder.png') }}"
                                alt="FiNder U-CoE Logo"
                                class="w-20 h-20 object-contain flex-shrink-0"
                                loading="lazy"
                            >
                            <div>
                                <h3 class="text-xl md:text-2xl font-display font-bold text-forest mb-2">
                                    FiNder U-CoE, Universitas Padjadjaran
                                </h3>
                                <p class="text-atmosphere font-medium text-sm mb-3">Co-Host & Project Management Office (PMO)</p>
                                <p class="text-earth">
                                    Indonesia
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3 px-4 py-2 bg-atmosphere/10 rounded-xl">
                            <svg class="w-6 h-6 text-atmosphere" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-sm font-semibold text-atmosphere">Management Partner</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Global Partners Section --}}
            <div>
                <div class="inline-flex items-center gap-2 mb-4 px-4 py-2 bg-earth/20 rounded-full">
                    <svg class="w-5 h-5 text-earth" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"/>
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l2.667-2a1 1 0 000-1.664l-2.667-2z" clip-rule="evenodd"/>
                        <path d="M10 2a1 1 0 011 1v1.323l3.954 1.582 1.599-.8a1 1 0 01.894 1.79l-1.233.616 1.738 5.42a1 1 0 01-.285 1.05A3.989 3.989 0 0115 15a3.989 3.989 0 01-2.667-1.019 1 1 0 01-.633.406l-1 .25a1 1 0 11-.486-1.942l.864-.216A3.989 3.989 0 0110 12c0-.73.196-1.416.538-2.018L10 9.883V8a1 1 0 011-1h.177L10 7.168zM10 12a2 2 0 100-4 2 2 0 000 4z"/>
                        <path d="M15.654 8.354l-1.414-1.414-2.122 2.122 1.414 1.414 2.122-2.122zM15.654 11.646l-1.414 1.414-2.122-2.122 1.414-1.414 2.122 2.122z"/>
                    </svg>
                    <span class="text-sm font-semibold text-earth uppercase tracking-wide">Global Partners</span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    {{-- DMU Card --}}
                    <div class="bg-white border border-earth/20 rounded-2xl p-6 shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex flex-col gap-4">
                            <div class="flex items-center gap-4">
                                <img
                                    src="{{ asset('images/logo/dhanamanjuri-india.png') }}"
                                    alt="Dhanamanjuri University Logo"
                                    class="w-16 h-16 object-contain flex-shrink-0"
                                    loading="lazy"
                                >
                                <div>
                                    <h3 class="text-lg font-display font-bold text-forest mb-2">
                                        Dhanamanjuri University (DMU)
                                    </h3>
                                    <p class="text-atmosphere font-medium text-sm">Global Partner</p>
                                </div>
                            </div>
                            <div class="text-earth">
                                <span class="text-sm">India</span>
                            </div>
                            <div class="inline-flex items-center gap-2 px-3 py-1.5 bg-earth/10 rounded-lg w-fit">
                                <svg class="w-4 h-4 text-earth" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"/>
                                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"/>
                                </svg>
                                <span class="text-xs font-semibold text-earth">Strategic Alliance</span>
                            </div>
                        </div>
                    </div>

                    {{-- NEMA Card --}}
                    <div class="bg-white border border-earth/20 rounded-2xl p-6 shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex flex-col gap-4">
                            <div class="flex items-center gap-4">
                                <img
                                    src="{{ asset('images/logo/nema-india.png') }}"
                                    alt="NEMA Logo"
                                    class="w-16 h-16 object-contain flex-shrink-0"
                                    loading="lazy"
                                >
                                <div>
                                    <h3 class="text-lg font-display font-bold text-forest mb-2">
                                        North Eastern Management Association (NEMA)
                                    </h3>
                                    <p class="text-atmosphere font-medium text-sm">Global Partner</p>
                                </div>
                            </div>
                            <div class="text-earth">
                                <span class="text-sm">India</span>
                            </div>
                            <div class="inline-flex items-center gap-2 px-3 py-1.5 bg-earth/10 rounded-lg w-fit">
                                <svg class="w-4 h-4 text-earth" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0116 16a22.952 22.952 0 01-6 2.57A22.952 22.952 0 014 16a22.952 22.952 0 01-2-4.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm5 4a1 1 0 00-1 1v1a1 1 0 102 0v-1a1 1 0 00-1-1zM6 8a1 1 0 00-1 1v1a1 1 0 102 0V9a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-xs font-semibold text-earth">Professional Partner</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- Governance Statement --}}
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center py-12">
        <h4 class="text-xl font-display font-bold text-forest mb-4">Bilateral Governance Structure</h4>
        <p class="text-earth leading-relaxed mb-4">
            This conference is governed by a distinguished bilateral committee ensuring high-level strategic and academic standards across both nations. The organizing structure reflects equal partnership between Indonesian and Indian institutions.
        </p>
        <p class="text-forest/90 font-medium">
            "Strengthening Indonesia-India Academic Diplomacy for Climate Resilience"
        </p>
    </div>

</div>
@endsection
