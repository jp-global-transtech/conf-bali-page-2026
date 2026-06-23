@extends('layouts.conference')

@section('title', 'Speaker Topic Submission | GETS 2026')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-forest/5 to-white pt-20">

    {{-- Hero Section --}}
    <div class="relative overflow-hidden bg-gradient-to-br from-forest via-sage to-forest/90">
        <div class="absolute inset-0 opacity-20" style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.4\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-20">
            <div class="text-center">
                <span class="inline-block px-4 py-1.5 bg-white/20 backdrop-blur-sm rounded-full text-white/90 text-sm font-medium mb-4">
                    For Speakers
                </span>
                <h1 class="text-2xl md:text-3xl lg:text-4xl font-display font-bold text-white mb-4">
                    Submit Your Topic
                </h1>
                <p class="text-xl text-white/90 max-w-3xl mx-auto leading-relaxed">
                    Share your expertise with the global community. Propose a topic based on your area of specialization.
                </p>
            </div>
        </div>
    </div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

        {{-- Info Banner --}}
        <div class="bg-gradient-to-r from-forest/5 to-sage/5 rounded-xl p-6 mb-8 border border-forest/10">
            <div class="flex items-start gap-4">
                <div class="w-12 h-12 rounded-full bg-forest/10 flex items-center justify-center flex-shrink-0">
                    <svg class="w-6 h-6 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div>
                    <h4 class="font-display font-semibold text-forest mb-2">About Topic Submission</h4>
                    <p class="text-sm text-earth/80 leading-relaxed">
                        We welcome speakers to propose topics based on their expertise and research focus. All submitted topics will be reviewed by the scientific committee. Approved topics will be included in the conference program.
                    </p>
                </div>
            </div>
        </div>

        {{-- Submission Form --}}
        <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12 border border-forest/10">
            <h2 class="text-2xl font-display font-bold text-forest mb-6">Topic Submission Form</h2>

            <form x-data="{
                submitting: false,
                submitted: false,
                submitForm() {
                    this.submitting = true;
                    // Simulate API call
                    setTimeout(() => {
                        this.submitting = false;
                        this.submitted = true;
                    }, 1500);
                }
            }" @submit.prevent="submitForm" class="space-y-6">

                {{-- Personal Information --}}
                <div>
                    <h3 class="text-lg font-semibold text-forest mb-4">Personal Information</h3>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-earth mb-2">Full Name *</label>
                            <input type="text" required
                                   class="w-full px-4 py-3 border border-earth/20 rounded-lg focus:ring-2 focus:ring-forest focus:border-transparent outline-none transition-all"
                                   placeholder="Dr. John Doe">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-earth mb-2">Email Address *</label>
                            <input type="email" required
                                   class="w-full px-4 py-3 border border-earth/20 rounded-lg focus:ring-2 focus:ring-forest focus:border-transparent outline-none transition-all"
                                   placeholder="john@university.edu">
                        </div>
                    </div>
                </div>

                {{-- Institutional Information --}}
                <div>
                    <h3 class="text-lg font-semibold text-forest mb-4">Institutional Information</h3>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-earth mb-2">Institution *</label>
                            <input type="text" required
                                   class="w-full px-4 py-3 border border-earth/20 rounded-lg focus:ring-2 focus:ring-forest focus:border-transparent outline-none transition-all"
                                   placeholder="University Name">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-earth mb-2">Department/Position</label>
                            <input type="text"
                                   class="w-full px-4 py-3 border border-earth/20 rounded-lg focus:ring-2 focus:ring-forest focus:border-transparent outline-none transition-all"
                                   placeholder="Department of Physics">
                        </div>
                    </div>
                </div>

                {{-- Country --}}
                <div>
                    <label class="block text-sm font-medium text-earth mb-2">Country *</label>
                    <select required
                            class="w-full px-4 py-3 border border-earth/20 rounded-lg focus:ring-2 focus:ring-forest focus:border-transparent outline-none transition-all">
                        <option value="">Select your country</option>
                        <option value="indonesia">🇮🇩 Indonesia</option>
                        <option value="india">🇮🇳 India</option>
                        <option value="other">🌍 Other</option>
                    </select>
                </div>

                {{-- Topic Details --}}
                <div>
                    <h3 class="text-lg font-semibold text-forest mb-4">Topic Details</h3>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-earth mb-2">Topic Category *</label>
                        <select required
                                class="w-full px-4 py-3 border border-earth/20 rounded-lg focus:ring-2 focus:ring-forest focus:border-transparent outline-none transition-all">
                            <option value="">Select a category</option>
                            <option value="future-tech">Future Tech & Applied Sciences</option>
                            <option value="business-society">Business & Society of Sustainability</option>
                            <option value="cultural-heritage">Cultural Heritage & Traditional Wisdom</option>
                            <option value="policy-governance">Policy, Regulation & Global Cooperation</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-earth mb-2">Proposed Topic Title *</label>
                        <input type="text" required
                               class="w-full px-4 py-3 border border-earth/20 rounded-lg focus:ring-2 focus:ring-forest focus:border-transparent outline-none transition-all"
                               placeholder="e.g., The Role of AI in Climate Monitoring">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-earth mb-2">Abstract/Description (200-300 words) *</label>
                        <textarea required rows="5"
                                  class="w-full px-4 py-3 border border-earth/20 rounded-lg focus:ring-2 focus:ring-forest focus:border-transparent outline-none transition-all resize-none"
                                  placeholder="Describe your topic, its relevance to climate resilience, and key takeaways for attendees..."></textarea>
                        <p class="text-xs text-earth/60 mt-1">Provide a brief overview of your proposed topic and its relevance to the conference theme.</p>
                    </div>
                </div>

                {{-- Keywords --}}
                <div>
                    <label class="block text-sm font-medium text-earth mb-2">Keywords (comma-separated)</label>
                    <input type="text"
                           class="w-full px-4 py-3 border border-earth/20 rounded-lg focus:ring-2 focus:ring-forest focus:border-transparent outline-none transition-all"
                           placeholder="climate, sustainability, innovation">
                </div>

                {{-- Additional Comments --}}
                <div>
                    <label class="block text-sm font-medium text-earth mb-2">Additional Comments (Optional)</label>
                    <textarea rows="3"
                              class="w-full px-4 py-3 border border-earth/20 rounded-lg focus:ring-2 focus:ring-forest focus:border-transparent outline-none transition-all resize-none"
                              placeholder="Any additional information for the review committee..."></textarea>
                </div>

                {{-- Submit Button --}}
                <div class="pt-4">
                    <button type="submit"
                            :disabled="submitting || submitted"
                            class="w-full sm:w-auto px-8 py-4 bg-gradient-to-r from-forest to-sage text-white font-display font-semibold rounded-full hover:shadow-lg hover:shadow-sage/25 transition-all disabled:opacity-50 disabled:cursor-not-allowed">
                        <span x-show="!submitting && !submitted">Submit Topic Proposal</span>
                        <span x-show="submitting" class="flex items-center justify-center gap-2">
                            <svg class="animate-spin h-5 w-5" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            Submitting...
                        </span>
                        <span x-show="submitted" class="flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Submitted Successfully!
                        </span>
                    </button>
                </div>

                {{-- Success Message --}}
                <div x-show="submitted" x-transition
                     class="bg-green-50 border border-green-200 rounded-lg p-4 text-green-800">
                    <p class="font-semibold mb-1">Thank you for your submission!</p>
                    <p class="text-sm">Your topic proposal has been received and will be reviewed by the scientific committee. You will be notified of the decision within 7-10 business days.</p>
                </div>

            </form>
        </div>

        {{-- Review Process Info --}}
        <div class="mt-8 bg-ivory rounded-xl p-6 border border-earth/20">
            <h4 class="font-display font-semibold text-forest mb-4">Review Process</h4>
            <div class="space-y-3">
                <div class="flex items-start gap-3">
                    <div class="w-6 h-6 rounded-full bg-forest/10 flex items-center justify-center flex-shrink-0 text-xs font-bold text-forest">1</div>
                    <p class="text-sm text-earth/80">Submission is received and logged in our system</p>
                </div>
                <div class="flex items-start gap-3">
                    <div class="w-6 h-6 rounded-full bg-forest/10 flex items-center justify-center flex-shrink-0 text-xs font-bold text-forest">2</div>
                    <p class="text-sm text-earth/80">Scientific committee reviews for relevance and quality</p>
                </div>
                <div class="flex items-start gap-3">
                    <div class="w-6 h-6 rounded-full bg-forest/10 flex items-center justify-center flex-shrink-0 text-xs font-bold text-forest">3</div>
                    <p class="text-sm text-earth/80">You will be notified of acceptance or feedback</p>
                </div>
                <div class="flex items-start gap-3">
                    <div class="w-6 h-6 rounded-full bg-forest/10 flex items-center justify-center flex-shrink-0 text-xs font-bold text-forest">4</div>
                    <p class="text-sm text-earth/80">Approved topics are added to the conference program</p>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
