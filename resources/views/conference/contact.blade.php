@extends('layouts.conference')

@section('title', 'Contact Us | Bali 2026 Conference')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-forest/5 to-white pt-20">

    {{-- Hero Section --}}
    <div class="relative overflow-hidden py-20">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-br from-white via-[#F8FBF9] to-[#F5F9F6]"></div>
            <div class="absolute inset-0 opacity-[0.015]" style="background-image: radial-gradient(circle at 1px 1px, #166534 1px, transparent 0); background-size: 60px 60px;"></div>
            <div class="absolute top-[-5%] right-[-5%] w-[500px] h-[500px] bg-emerald-500/5 rounded-full blur-3xl"></div>
            <div class="absolute bottom-[-5%] left-[-5%] w-[400px] h-[400px] bg-teal-500/3 rounded-full blur-3xl"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-display font-bold text-gray-900 mb-6">Contact Us</h1>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Have questions about the conference? We'd love to hear from you. Get in touch with our team.
                </p>
            </div>
        </div>
    </div>

    {{-- Contact Content --}}
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

        {{-- Contact Information --}}
        <div>
                <h2 class="text-2xl font-display font-bold text-forest mb-6">Get in Touch</h2>

                <div class="space-y-6">
                    {{-- Email --}}
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-forest/10 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-display font-semibold text-forest mb-1">Email</h3>
                            <a href="mailto:{{ $conference['support_email'] }}" class="text-earth hover:text-forest transition-colors">
                                {{ $conference['support_email'] }}
                            </a>
                        </div>
                    </div>

                    {{-- WhatsApp --}}
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-display font-semibold text-forest mb-1">WhatsApp</h3>
                            <a href="https://wa.me/6281287674791" target="_blank" rel="noopener noreferrer" class="text-earth hover:text-forest transition-colors">
                                Reina Widianti
                            </a>
                            <p class="text-earth/70 text-sm">+62-812-8767-4791</p>
                        </div>
                    </div>

                    {{-- Conference Info --}}
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-sage/10 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-display font-semibold text-forest mb-1">Conference Date</h3>
                            <p class="text-earth">August 24, 2026</p>
                            <p class="text-earth/70 text-sm">Bali, Indonesia</p>
                        </div>
                    </div>

                    {{-- Quick Links --}}
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-atmosphere/10 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-atmosphere" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-display font-semibold text-forest mb-2">Quick Links</h3>
                            <div class="space-y-1">
                                <a href="{{ route('conference.landing') }}#register" class="block text-earth hover:text-forest transition-colors text-sm">Register for Conference</a>
                                <a href="{{ route('conference.speakers') }}" class="block text-earth hover:text-forest transition-colors text-sm">View Speakers</a>
                                <a href="{{ route('conference.venue') }}" class="block text-earth hover:text-forest transition-colors text-sm">Conference Venue</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Regional Contact Persons --}}
                <div class="mt-8 pt-8 border-t border-forest/10">
                    <h3 class="font-display font-semibold text-forest mb-4 flex items-center gap-2">
                        <svg class="w-5 h-5 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Regional Contact Persons
                    </h3>

                    {{-- India Contact --}}
                    <div class="bg-orange-50/50 rounded-xl p-4 border border-orange-100">
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center flex-shrink-0 text-xl">🇮🇳</div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-forest text-sm">Dr. Sunildro L.S. Akoijam</h4>
                                <p class="text-xs text-earth mb-2">Secretary, North Eastern Management Association (NEMA), India</p>
                                <div class="space-y-1">
                                    <a href="mailto:secretarynema2016@gmail.com" class="block text-sm text-forest hover:text-sage transition-colors">
                                        <span class="inline-flex items-center gap-1">
                                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                            </svg>
                                            secretarynema2016@gmail.com
                                        </span>
                                    </a>
                                    <a href="mailto:drsunildroakoijam@gmail.com" class="block text-sm text-forest hover:text-sage transition-colors">
                                        <span class="inline-flex items-center gap-1">
                                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                            </svg>
                                            drsunildroakoijam@gmail.com
                                        </span>
                                    </a>
                                    <a href="tel:+918414025532" class="block text-sm text-earth hover:text-forest transition-colors">
                                        <span class="inline-flex items-center gap-1">
                                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                            </svg>
                                            +91-8414025532
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Indonesia Contact (Existing) --}}
                    <div class="bg-green-50/50 rounded-xl p-4 border border-green-100 mt-3">
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0 text-xl">🇮🇩</div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-forest text-sm">Reina Widianti</h4>
                                <p class="text-xs text-earth mb-2">Conference Secretariat, Indonesia</p>
                                <a href="https://wa.me/6281287674791" target="_blank" rel="noopener noreferrer" class="block text-sm text-forest hover:text-sage transition-colors">
                                    <span class="inline-flex items-center gap-1">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                                        </svg>
                                        WhatsApp: +62-812-8767-4791
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- CTA Section --}}
    <div class="bg-ivory py-12">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h3 class="text-2xl font-display font-bold text-forest mb-4">Ready to Join Us?</h3>
            <p class="text-earth mb-6">Register now for the Global Environment & Transition Summit 2026 (GETS 2026).</p>
            <a href="{{ route('conference.landing') }}#register" class="inline-flex items-center justify-center gap-2 px-8 py-3 bg-forest text-white font-display font-semibold rounded-full hover:bg-sage transition-colors">
                <span>Register Now</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </div>

</div>
@endsection
