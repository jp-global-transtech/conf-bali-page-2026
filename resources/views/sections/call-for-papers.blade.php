{{--
    SECTION: CALL FOR PAPERS - ONLINE CONFERENCE
    Displays the 8 sub-themes for the Call for Abstract

    Emotional Goal: Academic Opportunity, Participation, Contribution
--}}
@section('content')
<section id="call-for-abstract" class="section-cinematic bg-gradient-to-b from-atmosphere/5 to-ivory relative">

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div x-data="scrollReveal" :class="{ 'is-visible': visible }" class="scroll-reveal-group text-center mb-12">
            <span style="--stagger-index: 0" class="inline-block px-4 py-1.5 bg-atmosphere/10 text-atmosphere font-medium text-sm rounded-full mb-4 font-sans">Call for Abstract</span>
            <h2 style="--stagger-index: 1" class="text-cinematic text-4xl sm:text-5xl lg:text-6xl text-forest mb-4 leading-tight">
                Online Conference
            </h2>
            <p style="--stagger-index: 2" class="font-sans text-lg text-earth max-w-3xl mx-auto editorial-relaxed">
                Cannot join us in Bali? Present your research globally through our parallel Online Conference. We welcome original research abstracts across interdisciplinary sub-themes.
            </p>
        </div>

        @php
            $subthemes = config('conference.call_for_papers_subthemes', []);
        @endphp

        {{-- Sub-themes Grid --}}
        <div x-data="scrollReveal" :class="{ 'is-visible': visible }" class="scroll-reveal-group grid md:grid-cols-2 lg:grid-cols-3 gap-4 mb-12">
            @foreach($subthemes as $index => $subtheme)
            <div style="--stagger-index: {{ $index }}"
                 class="bg-white rounded-xl p-5 border border-forest/10 hover:border-forest/30 hover:shadow-lg transition-all duration-300 group">
                <div class="flex items-start gap-3">
                    <div class="w-8 h-8 rounded-full bg-gradient-to-br from-forest/10 to-sage/10 flex items-center justify-center flex-shrink-0 group-hover:from-forest group-hover:to-sage transition-all">
                        <span class="text-sm font-bold text-forest group-hover:text-white transition-colors">{{ $index + 1 }}</span>
                    </div>
                    <p class="text-sm text-earth leading-relaxed">{{ $subtheme }}</p>
                </div>
            </div>
            @endforeach
        </div>

        {{-- Publication Opportunity --}}
        <div class="bg-gradient-to-br from-forest to-sage rounded-2xl p-8 md:p-12 text-white text-center">
            <h4 class="text-2xl font-display font-bold mb-4">Publication Opportunity</h4>
            <p class="text-ivory/90 mb-6 max-w-2xl mx-auto">
                All accepted abstracts presented in the Online Conference will be eligible for publication in the official conference proceedings or an edited volume, advancing the collective literature on climate resilience.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('conference.landing') }}#register" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-white text-forest font-display font-semibold rounded-full hover:bg-ivory transition-all duration-300 hover:shadow-lg">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    <span>Submit Abstract</span>
                </a>
                <a href="{{ route('docs.abstract') }}" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-transparent border-2 border-white text-white font-display font-semibold rounded-full hover:bg-white hover:text-forest transition-all duration-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    <span>Download Guidelines</span>
                </a>
            </div>
        </div>

    </div>

</section>
@endsection
