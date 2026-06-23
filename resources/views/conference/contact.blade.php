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
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid lg:grid-cols-2 gap-12">

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
            </div>

            {{-- Contact Form --}}
            <div>
                <h2 class="text-2xl font-display font-bold text-forest mb-6">Send us a Message</h2>

                <form action="mailto:{{ $conference['support_email'] }}" method="post" enctype="text/plain" class="space-y-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-earth mb-2">Full Name</label>
                        <input type="text" id="name" name="name" required
                            class="w-full px-4 py-3 border border-forest/20 rounded-xl focus:ring-2 focus:ring-forest/50 focus:border-forest outline-none transition-all"
                            placeholder="Your name">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-earth mb-2">Email Address</label>
                        <input type="email" id="email" name="email" required
                            class="w-full px-4 py-3 border border-forest/20 rounded-xl focus:ring-2 focus:ring-forest/50 focus:border-forest outline-none transition-all"
                            placeholder="your@email.com">
                    </div>

                    <div>
                        <label for="subject" class="block text-sm font-medium text-earth mb-2">Subject</label>
                        <select id="subject" name="subject" required
                            class="w-full px-4 py-3 border border-forest/20 rounded-xl focus:ring-2 focus:ring-forest/50 focus:border-forest outline-none transition-all bg-white">
                            <option value="">Select a topic</option>
                            <option value="registration">Registration Inquiry</option>
                            <option value="speakers">Speaker Information</option>
                            <option value="venue">Venue & Accommodation</option>
                            <option value="sponsorship">Sponsorship & Partnership</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-earth mb-2">Message</label>
                        <textarea id="message" name="message" rows="5" required
                            class="w-full px-4 py-3 border border-forest/20 rounded-xl focus:ring-2 focus:ring-forest/50 focus:border-forest outline-none transition-all resize-none"
                            placeholder="How can we help you?"></textarea>
                    </div>

                    <button type="submit"
                        class="w-full inline-flex items-center justify-center gap-2 px-8 py-4 bg-forest text-white font-display font-semibold rounded-xl hover:bg-sage transition-all duration-300 hover:shadow-lg hover:shadow-sage/25 hover:-translate-y-0.5">
                        <span>Send Message</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                        </svg>
                    </button>
                </form>

                <p class="text-sm text-earth/60 mt-4 text-center">
                    Alternatively, email us directly at <a href="mailto:{{ $conference['support_email'] }}" class="text-forest hover:underline">{{ $conference['support_email'] }}</a>
                </p>
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
