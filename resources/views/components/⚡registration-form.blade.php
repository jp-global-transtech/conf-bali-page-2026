<?php

use Livewire\Attributes\Rule;
use Livewire\Component;

new class extends Component
{
    #[Rule('required|string|min:2')]
    public $first_name = '';

    #[Rule('required|string|min:2')]
    public $last_name = '';

    #[Rule('required|email|unique:registrations,email')]
    public $email = '';

    #[Rule('nullable|string|min:10')]
    public $phone = '';

    #[Rule('required|string')]
    public $country = '';

    #[Rule('required|string')]
    public $institution = '';

    #[Rule('required|string')]
    public $position = '';

    #[Rule('required|in:general_early_bird,general_regular,student')]
    public $category = 'general_early_bird';

    #[Rule('required|in:onsite,online')]
    public $attendance_type = 'onsite';

    #[Rule('nullable|string|max:255')]
    public $paper_title = '';

    #[Rule('nullable|string|max:1000')]
    public $abstract = '';

    #[Rule('nullable|file|mimes:pdf,doc,docx|max:5120')] // max 5MB
    public $abstract_file = null;

    #[Rule('required|string|in:none,halal,vegan,vegetarian,other')]
    public $dietary_option = 'none';

    #[Rule('nullable|string|max:255|required_if:dietary_option,other')]
    public $dietary_other = '';

    #[Rule('nullable|string|max:1000')]
    public $comments = '';

    #[Rule('required|accepted')]
    public $agreement = false;

    public function save()
    {
        $this->validate();

        // Generate unique registration ID
        $registrationId = 'REG-' . strtoupper(uniqid());

        // Handle file upload
        $abstractFilePath = null;
        if ($this->abstract_file) {
            $filename = 'abstract_' . $registrationId . '_' . time() . '.' . $this->abstract_file->getClientOriginalExtension();
            $this->abstract_file->storeAs('abstracts', $filename, 'public');
            $abstractFilePath = 'abstracts/' . $filename;
        }

        // Determine amount based on category
        $amount = match($this->category) {
            'general_early_bird' => 150,
            'general_regular' => 200,
            'student' => 75,
            default => 150,
        };

        // Combine dietary requirements
        $dietaryValue = $this->dietary_option === 'other'
            ? $this->dietary_other
            : $this->dietary_option;

        \DB::table('registrations')->insert([
            'registration_id' => $registrationId,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'institution' => $this->institution,
            'country' => $this->country,
            'position' => $this->position,
            'category' => $this->category,
            'attendance_type' => $this->attendance_type,
            'paper_title' => $this->paper_title,
            'abstract' => $this->abstract,
            'abstract_file_path' => $abstractFilePath,
            'dietary_requirements' => $dietaryValue,
            'comments' => $this->comments,
            'agreement' => $this->agreement,
            'payment_status' => 'pending',
            'amount' => $amount,
            'currency' => 'USD',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        session()->flash('success', "Registration submitted successfully! Your registration ID is {$registrationId}. We will contact you shortly.");

        $this->reset();
    }
};
?>

<div class="max-w-3xl mx-auto">
    {{-- Success Message --}}
    @if(session()->has('success'))
        <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 rounded-xl flex items-center gap-3">
            <svg class="w-6 h-6 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <p class="text-emerald-800">{{ session()->get('success') }}</p>
        </div>
    @endif

    <form wire:submit="save" class="bg-white rounded-2xl shadow-2xl p-8 md:p-10">

        {{-- Form Header --}}
        <div class="text-center mb-8">
            <h3 class="text-2xl font-display font-bold text-forest mb-2">Registration Form</h3>
            <p class="text-earth text-sm">Complete the form below to secure your participation</p>
        </div>

        {{-- Personal Information --}}
        <div class="mb-8">
            <h4 class="text-lg font-display font-semibold text-forest mb-4 flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                Personal Information
            </h4>
            <div class="grid md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-earth mb-2">First Name <span class="text-red-500">*</span></label>
                    <input type="text" wire:model="first_name"
                        class="w-full px-4 py-3 border border-forest/20 rounded-xl focus:ring-2 focus:ring-forest/50 focus:border-forest outline-none transition-all @error('first_name') border-red-500 @enderror"
                        placeholder="John">
                    @error('first_name')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-earth mb-2">Last Name <span class="text-red-500">*</span></label>
                    <input type="text" wire:model="last_name"
                        class="w-full px-4 py-3 border border-forest/20 rounded-xl focus:ring-2 focus:ring-forest/50 focus:border-forest outline-none transition-all @error('last_name') border-red-500 @enderror"
                        placeholder="Doe">
                    @error('last_name')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-earth mb-2">Email Address <span class="text-red-500">*</span></label>
                    <input type="email" wire:model="email"
                        class="w-full px-4 py-3 border border-forest/20 rounded-xl focus:ring-2 focus:ring-forest/50 focus:border-forest outline-none transition-all @error('email') border-red-500 @enderror"
                        placeholder="john@example.com">
                    @error('email')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-earth mb-2">Phone Number</label>
                    <input type="tel" wire:model="phone"
                        class="w-full px-4 py-3 border border-forest/20 rounded-xl focus:ring-2 focus:ring-forest/50 focus:border-forest outline-none transition-all @error('phone') border-red-500 @enderror"
                        placeholder="+62 812 3456 7890">
                    @error('phone')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-earth mb-2">Country <span class="text-red-500">*</span></label>
                    <select wire:model="country"
                        class="w-full px-4 py-3 border border-forest/20 rounded-xl focus:ring-2 focus:ring-forest/50 focus:border-forest outline-none transition-all bg-white @error('country') border-red-500 @enderror">
                        <option value="">Select Country</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="India">India</option>
                        <option value="Japan">Japan</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Philippines">Philippines</option>
                        <option value="Vietnam">Vietnam</option>
                        <option value="Australia">Australia</option>
                        <option value="United States">United States</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="Germany">Germany</option>
                        <option value="France">France</option>
                        <option value="Netherlands">Netherlands</option>
                        <option value="Other">Other</option>
                    </select>
                    @error('country')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        {{-- Institution Information --}}
        <div class="mb-8">
            <h4 class="text-lg font-display font-semibold text-forest mb-4 flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                </svg>
                Institution / Affiliation
            </h4>
            <div class="grid md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-earth mb-2">Institution Name <span class="text-red-500">*</span></label>
                    <input type="text" wire:model="institution"
                        class="w-full px-4 py-3 border border-forest/20 rounded-xl focus:ring-2 focus:ring-forest/50 focus:border-forest outline-none transition-all @error('institution') border-red-500 @enderror"
                        placeholder="Universitas Udayana">
                    @error('institution')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-earth mb-2">Position / Title <span class="text-red-500">*</span></label>
                    <input type="text" wire:model="position"
                        class="w-full px-4 py-3 border border-forest/20 rounded-xl focus:ring-2 focus:ring-forest/50 focus:border-forest outline-none transition-all @error('position') border-red-500 @enderror"
                        placeholder="Professor / Lecturer / Researcher">
                    @error('position')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        {{-- Registration Category --}}
        <div class="mb-8">
            <h4 class="text-lg font-display font-semibold text-forest mb-4 flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                Registration Category <span class="text-red-500">*</span>
            </h4>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                <label class="relative cursor-pointer">
                    <input type="radio" wire:model="category" value="general_early_bird" class="peer sr-only">
                    <div class="p-4 border-2 border-forest/20 rounded-xl peer-checked:border-forest peer-checked:bg-forest/5 transition-all text-center">
                        <svg class="w-8 h-8 mx-auto mb-2 text-forest/50 peer-checked:text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <p class="font-display font-semibold text-forest text-sm">Early Bird</p>
                        <p class="text-xs text-earth/60">USD 150 - Until June 15</p>
                    </div>
                </label>
                <label class="relative cursor-pointer">
                    <input type="radio" wire:model="category" value="general_regular" class="peer sr-only">
                    <div class="p-4 border-2 border-forest/20 rounded-xl peer-checked:border-forest peer-checked:bg-forest/5 transition-all text-center">
                        <svg class="w-8 h-8 mx-auto mb-2 text-forest/50 peer-checked:text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <p class="font-display font-semibold text-forest text-sm">Regular</p>
                        <p class="text-xs text-earth/60">USD 200 - After June 15</p>
                    </div>
                </label>
                <label class="relative cursor-pointer">
                    <input type="radio" wire:model="category" value="student" class="peer sr-only">
                    <div class="p-4 border-2 border-forest/20 rounded-xl peer-checked:border-forest peer-checked:bg-forest/5 transition-all text-center">
                        <svg class="w-8 h-8 mx-auto mb-2 text-forest/50 peer-checked:text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                        <p class="font-display font-semibold text-forest text-sm">Student</p>
                        <p class="text-xs text-earth/60">USD 75 - Valid ID Required</p>
                    </div>
                </label>
            </div>
            @error('category')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>

        {{-- Attendance Type --}}
        <div class="mb-8">
            <h4 class="text-lg font-display font-semibold text-forest mb-4 flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                </svg>
                Attendance Type <span class="text-red-500">*</span>
            </h4>
            <div class="grid grid-cols-2 gap-3">
                <label class="relative cursor-pointer">
                    <input type="radio" wire:model="attendance_type" value="onsite" class="peer sr-only">
                    <div class="p-4 border-2 border-forest/20 rounded-xl peer-checked:border-forest peer-checked:bg-forest/5 transition-all text-center">
                        <svg class="w-8 h-8 mx-auto mb-2 text-forest/50 peer-checked:text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <p class="font-display font-semibold text-forest text-sm">Onsite</p>
                        <p class="text-xs text-earth/60">Attend in person</p>
                    </div>
                </label>
                <label class="relative cursor-pointer">
                    <input type="radio" wire:model="attendance_type" value="online" class="peer sr-only">
                    <div class="p-4 border-2 border-forest/20 rounded-xl peer-checked:border-forest peer-checked:bg-forest/5 transition-all text-center">
                        <svg class="w-8 h-8 mx-auto mb-2 text-forest/50 peer-checked:text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <p class="font-display font-semibold text-forest text-sm">Online</p>
                        <p class="text-xs text-earth/60">Join online</p>
                    </div>
                </label>
            </div>
        </div>

        {{-- Paper / Abstract Submission --}}
        <div class="mb-8">
            <h4 class="text-lg font-display font-semibold text-forest mb-4 flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                Paper / Abstract Details <span class="text-sm font-normal text-earth/60">(Optional)</span>
            </h4>
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-earth mb-2">Paper Title</label>
                    <input type="text" wire:model="paper_title"
                        class="w-full px-4 py-3 border border-forest/20 rounded-xl focus:ring-2 focus:ring-forest/50 focus:border-forest outline-none transition-all @error('paper_title') border-red-500 @enderror"
                        placeholder="Enter your paper title">
                    @error('paper_title')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-earth mb-2">Abstract</label>
                    <textarea wire:model="abstract" rows="3"
                        class="w-full px-4 py-3 border border-forest/20 rounded-xl focus:ring-2 focus:ring-forest/50 focus:border-forest outline-none transition-all resize-none @error('abstract') border-red-500 @enderror"
                        placeholder="Brief abstract of your presentation (max 250 words)"></textarea>
                    @error('abstract')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-earth mb-2">Upload Abstract Document (PDF/DOCX, max 5MB)</label>
                    <input type="file" wire:model="abstract_file"
                        class="w-full px-4 py-3 border border-forest/20 rounded-xl focus:ring-2 focus:ring-forest/50 focus:border-forest outline-none transition-all file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-forest/10 file:text-forest hover:file:bg-forest/20 @error('abstract_file') border-red-500 @enderror"
                        accept=".pdf,.doc,.docx">
                    @error('abstract_file')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                    @if($abstract_file)
                        <p class="mt-2 text-sm text-sage flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            File selected: {{ $abstract_file->getClientOriginalName() }}
                        </p>
                    @endif
                </div>
            </div>
        </div>

        {{-- Dietary Requirements --}}
        <div class="mb-8">
            <h4 class="text-lg font-display font-semibold text-forest mb-4 flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                Additional Information
            </h4>
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-earth mb-2">Dietary Requirements <span class="text-red-500">*</span></label>
                    <select wire:model="dietary_option"
                        class="w-full px-4 py-3 border border-forest/20 rounded-xl focus:ring-2 focus:ring-forest/50 focus:border-forest outline-none transition-all bg-white @error('dietary_option') border-red-500 @enderror">
                        <option value="none">No special requirements</option>
                        <option value="halal">Halal Food</option>
                        <option value="vegan">Vegan</option>
                        <option value="vegetarian">Vegetarian</option>
                        <option value="other">Others</option>
                    </select>
                    @error('dietary_option')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Conditional input for Other option --}}
                @if($dietary_option === 'other')
                <div>
                    <label class="block text-sm font-medium text-earth mb-2">Please Specify <span class="text-red-500">*</span></label>
                    <input type="text" wire:model="dietary_other"
                        class="w-full px-4 py-3 border border-forest/20 rounded-xl focus:ring-2 focus:ring-forest/50 focus:border-forest outline-none transition-all @error('dietary_other') border-red-500 @enderror"
                        placeholder="Please specify your dietary requirements">
                    @error('dietary_other')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                @endif
                <div>
                    <label class="block text-sm font-medium text-earth mb-2">Additional Comments / Questions</label>
                    <textarea wire:model="comments" rows="2"
                        class="w-full px-4 py-3 border border-forest/20 rounded-xl focus:ring-2 focus:ring-forest/50 focus:border-forest outline-none transition-all resize-none"
                        placeholder="Any additional information or questions..."></textarea>
                </div>
            </div>
        </div>

        {{-- Terms & Conditions --}}
        <div class="mb-6">
            <label class="flex items-start gap-3 cursor-pointer">
                <input type="checkbox" wire:model="agreement" class="mt-1 w-5 h-5 text-forest border-forest/20 rounded focus:ring-forest">
                <span class="text-sm text-earth">
                    I agree to the Terms & Conditions and Privacy Policy. I understand that my registration will be confirmed upon payment completion. <span class="text-red-500">*</span>
                </span>
            </label>
            @error('agreement')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>

        {{-- Submit Button --}}
        <button type="submit"
            class="w-full flex items-center justify-center gap-3 px-10 py-4 bg-forest text-white font-display font-semibold rounded-xl hover:bg-sage transition-all duration-300 hover:shadow-lg hover:shadow-sage/25 hover:-translate-y-0.5">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
            <span>Submit Registration</span>
        </button>

        <p class="text-center text-xs text-earth/60 mt-4">
            Or email your registration directly to {{ config('conference.support_email', 'info@jptranstech.org') }}
        </p>

    </form>

    {{-- Trust indicators --}}
    <div class="mt-8 flex flex-wrap items-center justify-center gap-8 text-ivory-200 text-sm font-sans">
        <div class="flex items-center gap-2">
            <svg class="w-5 h-5 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
            </svg>
            <span>Secure Registration</span>
        </div>
        <div class="flex items-center gap-2">
            <svg class="w-5 h-5 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>Early Bird Available</span>
        </div>
    </div>
</div>
