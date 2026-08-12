@extends('layouts.conference')

@section('title', 'Selected Papers | GETS 2026')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-forest/5 to-white pt-20">

    {{-- Hero Section --}}
    <div class="relative overflow-hidden bg-gradient-to-br from-forest via-sage to-forest/90">
        <div class="absolute inset-0 opacity-20" style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.4\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-20">
            <div class="text-center">
                <span class="inline-block px-4 py-1.5 bg-amber-400/20 backdrop-blur-sm rounded-full text-amber-300 text-sm font-medium mb-4">
                    Accepted &amp; Selected
                </span>
                <h1 class="text-2xl md:text-3xl lg:text-4xl font-display font-bold text-white mb-4">
                    Selected Papers
                </h1>
                <p class="text-lg text-white/90 max-w-3xl mx-auto leading-relaxed">
                    List of {{ $stats['total'] }} papers selected for presentation at GETS 2026
                    &middot; 24 August 2026 &middot; Universitas Udayana, Bali &amp; Online
                </p>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12" x-data="{ q: '', mode: 'all', matchesRow(el) { const terms = this.q.toLowerCase().trim(); const okMode = this.mode === 'all' || el.dataset.mode === this.mode; const okText = !terms || el.dataset.search.toLowerCase().includes(terms); return okMode && okText; } }">

        {{-- Stats Cards --}}
        @include('components.selected-papers-stats', ['stats' => $stats])

        {{-- Search & Filter --}}
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">
            {{-- Search --}}
            <div class="relative flex-1 max-w-md">
                <svg class="w-5 h-5 text-gray-400 absolute left-4 top-1/2 -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
                <input
                    type="text"
                    x-model="q"
                    placeholder="Search paper title or author..."
                    class="w-full pl-12 pr-4 py-3 rounded-xl border border-gray-200 bg-white focus:outline-none focus:ring-2 focus:ring-forest/30 focus:border-forest text-sm"
                >
            </div>

            {{-- Mode Filter Tabs --}}
            <div class="flex items-center gap-2">
                <button @click="mode = 'all'" :class="mode === 'all' ? 'bg-forest text-white border-forest' : 'bg-white text-gray-600 border-gray-200 hover:border-forest/40'" class="px-4 py-2 rounded-full border text-sm font-medium transition-colors">All</button>
                <button @click="mode = 'offline'" :class="mode === 'offline' ? 'bg-sage text-white border-sage' : 'bg-white text-gray-600 border-gray-200 hover:border-sage/40'" class="px-4 py-2 rounded-full border text-sm font-medium transition-colors">Offline</button>
                <button @click="mode = 'online'" :class="mode === 'online' ? 'bg-atmosphere text-white border-atmosphere' : 'bg-white text-gray-600 border-gray-200 hover:border-atmosphere/40'" class="px-4 py-2 rounded-full border text-sm font-medium transition-colors">Online</button>
            </div>
        </div>

        {{-- Papers Table --}}
        <div class="bg-white rounded-2xl shadow-lg border border-gray-200 overflow-hidden mb-8">
            <div class="bg-gradient-to-r from-forest to-sage px-6 py-5 text-center">
                <h2 class="text-xl font-bold text-white">List of Selected Papers</h2>
                <p class="text-white/80 text-sm mt-1">International Conference GETS 2026 &middot; 31 papers selected for presentation</p>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="bg-gray-50 border-b border-gray-200">
                            <th class="text-left px-4 py-3 font-semibold text-gray-700 w-12">#</th>
                            <th class="text-left px-4 py-3 font-semibold text-gray-700 w-16">Paper No.</th>
                            <th class="text-left px-4 py-3 font-semibold text-gray-700">Paper Title</th>
                            <th class="text-left px-4 py-3 font-semibold text-gray-700 w-56">Presenter(s)</th>
                            <th class="text-left px-4 py-3 font-semibold text-gray-700 w-64">Institution</th>
                            <th class="text-left px-4 py-3 font-semibold text-gray-700 w-32">Mode</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @foreach ($papers as $index => $paper)
                        @php
                            $presenter = collect($paper['authors'])->firstWhere('is_presenter', true);
                            $coAuthors = collect($paper['authors'])->where('is_presenter', false);
                            $searchText = $paper['title'] . ' ' . collect($paper['authors'])->pluck('name')->implode(' ');
                        @endphp
                        <tr
                            x-show="matchesRow($el)"
                            data-mode="{{ $paper['mode'] }}"
                            data-search="{{ $searchText }}"
                            class="hover:bg-gray-50/50 transition-colors align-top"
                        >
                            <td class="px-4 py-4 text-gray-500">{{ $index + 1 }}</td>
                            <td class="px-4 py-4"><span class="inline-flex items-center justify-center min-w-8 px-2 py-1 rounded-md bg-forest/10 text-forest text-xs font-bold">{{ $paper['paper_no'] }}</span></td>
                            <td class="px-4 py-4">
                                <p class="font-medium text-gray-900 leading-snug">{{ $paper['title'] }}</p>
                            </td>
                            <td class="px-4 py-4">
                                @if ($presenter)
                                <div class="flex items-center gap-1.5">
                                    <span class="font-semibold text-gray-900">{{ $presenter['name'] }}</span>
                                    @if ($coAuthors->isNotEmpty())
                                        <span class="px-1.5 py-0.5 bg-forest/10 text-forest text-[10px] font-bold rounded">Presenter</span>
                                    @endif
                                </div>
                                <p class="text-xs text-gray-500">{{ $presenter['designation'] }}</p>
                                @endif
                                @foreach ($coAuthors as $coAuthor)
                                <div class="mt-2 pt-2 border-t border-dashed border-gray-200">
                                    <p class="text-gray-800">{{ $coAuthor['name'] }}</p>
                                    <p class="text-xs text-gray-500">{{ $coAuthor['designation'] }}</p>
                                </div>
                                @endforeach
                            </td>
                            <td class="px-4 py-4">
                                @if ($presenter)
                                <p class="text-gray-800">{{ $presenter['institution'] }}</p>
                                @endif
                                @foreach ($coAuthors as $coAuthor)
                                <div class="mt-2 pt-2 border-t border-dashed border-gray-200">
                                    <p class="text-gray-800">{{ $coAuthor['institution'] }}</p>
                                </div>
                                @endforeach
                            </td>
                            <td class="px-4 py-4">
                                @if ($paper['mode'] === 'offline')
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-sage/10 text-sage font-semibold text-xs">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                    </svg>
                                    Offline
                                </span>
                                @else
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-atmosphere/10 text-atmosphere font-semibold text-xs">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                    </svg>
                                    Online
                                </span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="bg-gray-50 border-t border-gray-200 px-6 py-4">
                <div class="flex items-start gap-2 text-xs text-gray-500">
                    <svg class="w-4 h-4 text-gray-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>
                        <strong>Note:</strong> Co-authors are listed under the same paper. Papers marked <span class="font-semibold text-sage">Offline</span> are presented in person at Universitas Udayana, while <span class="font-semibold text-atmosphere">Online</span> papers are presented via Zoom.
                    </span>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection