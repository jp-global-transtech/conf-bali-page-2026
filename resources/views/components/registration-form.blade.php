<form action="mailto:{{ config('conference.support_email', 'info@jptranstech.org') }}" method="post" enctype="text/plain" class="bg-white rounded-2xl shadow-2xl p-8 md:p-10">

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
                <label class="block text-sm font-medium text-earth mb-2">Full Name <span class="text-red-500">*</span></label>
                <input type="text" name="full_name" required
                    class="w-full px-4 py-3 border border-forest/20 rounded-xl focus:ring-2 focus:ring-forest/50 focus:border-forest outline-none transition-all"
                    placeholder="Dr. John Doe">
            </div>
            <div>
                <label class="block text-sm font-medium text-earth mb-2">Email Address <span class="text-red-500">*</span></label>
                <input type="email" name="email" required
                    class="w-full px-4 py-3 border border-forest/20 rounded-xl focus:ring-2 focus:ring-forest/50 focus:border-forest outline-none transition-all"
                    placeholder="john@example.com">
            </div>
            <div>
                <label class="block text-sm font-medium text-earth mb-2">Phone Number <span class="text-red-500">*</span></label>
                <input type="tel" name="phone" required
                    class="w-full px-4 py-3 border border-forest/20 rounded-xl focus:ring-2 focus:ring-forest/50 focus:border-forest outline-none transition-all"
                    placeholder="+62 812 3456 7890">
            </div>
            <div>
                <label class="block text-sm font-medium text-earth mb-2">Country <span class="text-red-500">*</span></label>
                <select name="country" required
                    class="w-full px-4 py-3 border border-forest/20 rounded-xl focus:ring-2 focus:ring-forest/50 focus:border-forest outline-none transition-all bg-white">
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
                <input type="text" name="institution" required
                    class="w-full px-4 py-3 border border-forest/20 rounded-xl focus:ring-2 focus:ring-forest/50 focus:border-forest outline-none transition-all"
                    placeholder="Universitas Udayana">
            </div>
            <div>
                <label class="block text-sm font-medium text-earth mb-2">Position / Title <span class="text-red-500">*</span></label>
                <input type="text" name="position" required
                    class="w-full px-4 py-3 border border-forest/20 rounded-xl focus:ring-2 focus:ring-forest/50 focus:border-forest outline-none transition-all"
                    placeholder="Professor / Lecturer / Researcher">
            </div>
        </div>
    </div>

    {{-- Attendance Mode (Online/Offline) --}}
    <div class="mb-8">
        <h4 class="text-lg font-display font-semibold text-forest mb-4 flex items-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            Attendance Mode <span class="text-red-500">*</span>
        </h4>
        <p class="text-sm text-earth/70 mb-4">Select how you plan to attend the conference</p>
        <div class="grid md:grid-cols-2 gap-4">
            <label class="flex items-center gap-3 p-4 border-2 border-forest/20 rounded-xl cursor-pointer hover:border-forest/40 transition-all has-[:checked]:border-forest has-[:checked]:bg-forest/5">
                <input type="radio" name="attendance_mode" value="offline" required class="w-5 h-5 text-forest border-forest/30 focus:ring-forest focus:ring-2">
                <div class="flex-1">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <p class="font-display font-semibold text-forest">In-Person (Offline)</p>
                    </div>
                    <p class="text-xs text-earth/60 mt-1">Attend at Universitas Udayana, Bali</p>
                </div>
            </label>
            <label class="flex items-center gap-3 p-4 border-2 border-forest/20 rounded-xl cursor-pointer hover:border-forest/40 transition-all has-[:checked]:border-forest has-[:checked]:bg-forest/5">
                <input type="radio" name="attendance_mode" value="online" class="w-5 h-5 text-forest border-forest/30 focus:ring-forest focus:ring-2">
                <div class="flex-1">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                        <p class="font-display font-semibold text-forest">Online (Virtual)</p>
                    </div>
                    <p class="text-xs text-earth/60 mt-1">Join via Zoom / Virtual Platform</p>
                </div>
            </label>
        </div>
    </div>

    {{-- Paper Submission (Optional) --}}
    <div class="mb-8">
        <label class="flex items-center gap-3 cursor-pointer mb-4">
            <input type="checkbox" id="has-paper" class="w-5 h-5 text-forest border-forest/20 rounded focus:ring-forest">
            <span class="text-sm text-earth font-medium">I would like to submit a paper/presentation</span>
        </label>
        <div id="paper-details" class="hidden">
            <h4 class="text-lg font-display font-semibold text-forest mb-4 flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                Paper / Presentation Details
            </h4>
        <div class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-earth mb-2">Paper Title</label>
                <input type="text" name="paper_title"
                    class="w-full px-4 py-3 border border-forest/20 rounded-xl focus:ring-2 focus:ring-forest/50 focus:border-forest outline-none transition-all"
                    placeholder="Enter your paper title">
            </div>
            <div>
                <label class="block text-sm font-medium text-earth mb-2">Abstract</label>
                <textarea name="abstract" rows="3"
                    class="w-full px-4 py-3 border border-forest/20 rounded-xl focus:ring-2 focus:ring-forest/50 focus:border-forest outline-none transition-all resize-none"
                    placeholder="Brief abstract of your presentation (max 250 words)"></textarea>
            </div>
        </div>
    </div>

    {{-- Dietary & Special Requirements --}}
    <div class="mb-8">
        <h4 class="text-lg font-display font-semibold text-forest mb-4 flex items-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
            Additional Information
        </h4>
        <div class="grid md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-earth mb-2">Dietary Requirements</label>
                <select name="dietary"
                    class="w-full px-4 py-3 border border-forest/20 rounded-xl focus:ring-2 focus:ring-forest/50 focus:border-forest outline-none transition-all bg-white">
                    <option value="none">No special requirements</option>
                    <option value="halal">Halal Food</option>
                    <option value="vegan">Vegan</option>
                    <option value="vegetarian">Vegetarian</option>
                    <option value="other">Others</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-earth mb-2">Special Assistance</label>
                <select name="assistance"
                    class="w-full px-4 py-3 border border-forest/20 rounded-xl focus:ring-2 focus:ring-forest/50 focus:border-forest outline-none transition-all bg-white">
                    <option value="none">No assistance needed</option>
                    <option value="wheelchair">Wheelchair access</option>
                    <option value="visual">Visual assistance</option>
                    <option value="hearing">Hearing assistance</option>
                    <option value="other">Other requirements</option>
                </select>
            </div>
        </div>
        <div class="mt-4">
            <label class="block text-sm font-medium text-earth mb-2">Additional Comments / Questions</label>
            <textarea name="comments" rows="2"
                class="w-full px-4 py-3 border border-forest/20 rounded-xl focus:ring-2 focus:ring-forest/50 focus:border-forest outline-none transition-all resize-none"
                placeholder="Any additional information or questions..."></textarea>
        </div>
    </div>

    {{-- Payment Information --}}
    <div class="mb-8">
        <h4 class="text-lg font-display font-semibold text-forest mb-4 flex items-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
            </svg>
            Payment Information
        </h4>

        {{-- Payment Method Selection --}}
        <p class="text-sm text-earth/70 mb-4">Select your preferred payment method</p>

        {{-- Xendit Payment Options (Indonesia & International) --}}
        <div id="payment-xendit" class="space-y-3 mb-4">
            {{-- Virtual Account --}}
            <label class="flex items-center gap-3 p-4 border-2 border-forest/20 rounded-xl cursor-pointer hover:border-forest/40 transition-all has-[:checked]:border-forest has-[:checked]:bg-forest/5">
                <input type="radio" name="payment_method" value="xendit_va" class="w-5 h-5 text-forest border-forest/30 focus:ring-forest focus:ring-2">
                <div class="flex-1">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                        </svg>
                        <p class="font-display font-semibold text-forest">Virtual Account</p>
                        <span class="text-xs bg-forest/10 text-forest px-2 py-0.5 rounded">BCA, Mandiri, BNI, BRI</span>
                    </div>
                    <p class="text-xs text-earth/60 mt-1">Pay via ATM, Mobile Banking, or Internet Banking</p>
                </div>
            </label>

            {{-- QRIS --}}
            <label class="flex items-center gap-3 p-4 border-2 border-forest/20 rounded-xl cursor-pointer hover:border-forest/40 transition-all has-[:checked]:border-forest has-[:checked]:bg-forest/5">
                <input type="radio" name="payment_method" value="xendit_qris" class="w-5 h-5 text-forest border-forest/30 focus:ring-forest focus:ring-2">
                <div class="flex-1">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4h2v-4zM6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <p class="font-display font-semibold text-forest">QRIS</p>
                        <span class="text-xs bg-emerald-100 text-emerald-700 px-2 py-0.5 rounded">Instant</span>
                    </div>
                    <p class="text-xs text-earth/60 mt-1">Scan QR code with GoPay, OVO, Dana, ShopeePay, Mobile Banking</p>
                </div>
            </label>

            {{-- E-Wallet --}}
            <label class="flex items-center gap-3 p-4 border-2 border-forest/20 rounded-xl cursor-pointer hover:border-forest/40 transition-all has-[:checked]:border-forest has-[:checked]:bg-forest/5">
                <input type="radio" name="payment_method" value="xendit_ewallet" class="w-5 h-5 text-forest border-forest/30 focus:ring-forest focus:ring-2">
                <div class="flex-1">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                        <p class="font-display font-semibold text-forest">E-Wallet</p>
                        <span class="text-xs bg-blue-100 text-blue-700 px-2 py-0.5 rounded">GoPay, OVO, Dana, ShopeePay</span>
                    </div>
                    <p class="text-xs text-earth/60 mt-1">Pay directly from your e-wallet app</p>
                </div>
            </label>

            {{-- Manual Transfer Backup --}}
            <label class="flex items-center gap-3 p-4 border-2 border-dashed border-earth/30 rounded-xl cursor-pointer hover:border-earth/50 transition-all has-[:checked]:border-earth has-[:checked]:bg-earth/5">
                <input type="radio" name="payment_method" value="manual_bca" class="w-5 h-5 text-earth border-earth/30 focus:ring-earth focus:ring-2">
                <div class="flex-1">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-earth" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12M8 12h12M8 17h12M4 7h.01M4 12h.01M4 17h.01" />
                        </svg>
                        <p class="font-display font-semibold text-earth">Manual Bank Transfer</p>
                        <span class="text-xs bg-earth/10 text-earth px-2 py-0.5 rounded">Backup</span>
                    </div>
                    <p class="text-xs text-earth/60 mt-1">Transfer directly to BCA account</p>
                </div>
            </label>
        </div>

        {{-- India Manual Payment (Hidden by default) --}}
        <div id="payment-india" class="hidden">
            <label class="flex items-center gap-3 p-4 border-2 border-atmosphere/20 rounded-xl cursor-pointer hover:border-atmosphere/40 transition-all has-[:checked]:border-atmosphere has-[:checked]:bg-atmosphere/5">
                <input type="radio" name="payment_method" value="manual_sbi" class="w-5 h-5 text-atmosphere border-atmosphere/30 focus:ring-atmosphere focus:ring-2" checked>
                <div class="flex-1">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-atmosphere" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                        </svg>
                        <p class="font-display font-semibold text-atmosphere">Bank Transfer (SBI)</p>
                        <span class="text-xs bg-atmosphere/10 text-atmosphere px-2 py-0.5 rounded">For India Delegates</span>
                    </div>
                    <p class="text-xs text-earth/60 mt-1">Transfer to NEMA account via State Bank of India</p>
                </div>
            </label>

            {{-- India Bank Details --}}
            <div class="mt-4 bg-gradient-to-r from-atmosphere/5 to-orange-50 rounded-xl p-4 border border-atmosphere/10">
                <p class="text-sm text-atmosphere/80 mb-3">Please complete your registration fee payment to:</p>
                <div class="bg-white rounded-lg p-4 border border-atmosphere/10">
                    <p class="text-sm text-gray-600 mb-1">Bank: <span class="font-semibold text-atmosphere">State Bank of India (SBI)</span></p>
                    <p class="text-sm text-gray-600 mb-1">Account Name: <span class="font-semibold text-atmosphere">North Eastern Management Association (NEMA)</span></p>
                    <p class="text-lg font-bold text-atmosphere">Account Number: <span class="text-xl">20512944868</span></p>
                    <p class="text-sm text-gray-600 mb-1">Branch: <span class="font-semibold text-atmosphere">Manipur University</span></p>
                    <p class="text-sm text-gray-600">IFSC Code: <span class="font-mono text-atmosphere">SBIN0005320</span></p>
                </div>
                <p class="text-xs text-earth/60 mt-3">Please include your name in the transfer reference and email proof to <a href="mailto:info@jptranstech.org" class="text-atmosphere hover:underline">info@jptranstech.org</a></p>
            </div>
        </div>

        {{-- Manual BCA Details (Shown when manual_bca selected) --}}
        <div id="manual-bca-details" class="hidden mt-4 bg-gradient-to-r from-forest/5 to-sage/5 rounded-xl p-4 border border-forest/10">
            <p class="text-sm text-forest/80 mb-3">Please complete your registration fee payment to:</p>
            <div class="bg-white rounded-lg p-4 border border-forest/10">
                <p class="text-sm text-gray-600 mb-1">Bank: <span class="font-semibold text-forest">Bank BCA</span></p>
                <p class="text-sm text-gray-600 mb-1">Account Name: <span class="font-semibold text-forest">JP Global Transtech</span></p>
                <p class="text-lg font-bold text-forest">Account Number: <span class="text-xl">123-456-7890</span></p>
            </div>
            <p class="text-xs text-earth/60 mt-3">Please include your name in the transfer reference and email proof to <a href="mailto:info@jptranstech.org" class="text-forest hover:underline">info@jptranstech.org</a></p>
        </div>
    </div>

    {{-- Terms & Conditions --}}
    <div class="mb-6">
        <label class="flex items-start gap-3 cursor-pointer">
            <input type="checkbox" name="agreement" required class="mt-1 w-5 h-5 text-forest border-forest/20 rounded focus:ring-forest">
            <span class="text-sm text-earth">
                I agree to the <a href="#" class="text-forest hover:underline">Terms & Conditions</a> and <a href="#" class="text-forest hover:underline">Privacy Policy</a>. I understand that my registration will be confirmed upon payment completion. <span class="text-red-500">*</span>
            </span>
        </label>
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
        Or email your registration directly to <a href="mailto:{{ config('conference.support_email', 'info@jptranstech.org') }}" class="text-forest hover:underline">{{ config('conference.support_email', 'info@jptranstech.org') }}</a>
    </p>

    {{-- Script for presenter details toggle & country-based payment --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const hasPaperCheckbox = document.getElementById('has-paper');
            const paperDetails = document.getElementById('paper-details');
            const countrySelect = document.querySelector('select[name="country"]');
            const paymentXendit = document.getElementById('payment-xendit');
            const paymentIndia = document.getElementById('payment-india');
            const paymentMethodInputs = document.querySelectorAll('input[name="payment_method"]');
            const manualBcaDetails = document.getElementById('manual-bca-details');

            // Toggle paper details
            if (hasPaperCheckbox && paperDetails) {
                hasPaperCheckbox.addEventListener('change', function() {
                    if (this.checked) {
                        paperDetails.classList.remove('hidden');
                    } else {
                        paperDetails.classList.add('hidden');
                    }
                });
            }

            // Toggle payment options based on country
            function updatePaymentOptions() {
                const country = countrySelect ? countrySelect.value : '';

                if (country === 'India') {
                    // Show India-specific payment options
                    if (paymentXendit) paymentXendit.classList.add('hidden');
                    if (paymentIndia) paymentIndia.classList.remove('hidden');
                    if (manualBcaDetails) manualBcaDetails.classList.add('hidden');
                    // Auto-select manual SBI for India
                    const sbiRadio = document.querySelector('input[name="payment_method"][value="manual_sbi"]');
                    if (sbiRadio) sbiRadio.checked = true;
                } else {
                    // Show Xendit payment options
                    if (paymentXendit) paymentXendit.classList.remove('hidden');
                    if (paymentIndia) paymentIndia.classList.add('hidden');
                    if (manualBcaDetails) manualBcaDetails.classList.add('hidden');
                    // Auto-select first Xendit option
                    const firstXenditRadio = document.querySelector('#payment-xendit input[name="payment_method"]');
                    if (firstXenditRadio) firstXenditRadio.checked = true;
                }
            }

            if (countrySelect) {
                countrySelect.addEventListener('change', updatePaymentOptions);
                // Initialize on page load
                updatePaymentOptions();
            }

            // Toggle manual transfer details
            paymentMethodInputs.forEach(function(input) {
                input.addEventListener('change', function() {
                    if (this.value === 'manual_bca') {
                        manualBcaDetails.classList.remove('hidden');
                    } else {
                        manualBcaDetails.classList.add('hidden');
                    }
                });
            });
        });
    </script>

</form>
