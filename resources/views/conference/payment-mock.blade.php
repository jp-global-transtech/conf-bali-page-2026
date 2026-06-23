@extends('layouts.conference')

@section('title', 'Payment - GETS 2026')

@section('content')
<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 bg-ivory">
    <div class="max-w-lg w-full">
        <div class="bg-white rounded-2xl shadow-xl p-8">
            {{-- Header --}}
            <div class="text-center mb-6">
                <h2 class="text-2xl font-display font-bold text-forest mb-2">Complete Your Payment</h2>
                <p class="text-earth">This is a mock payment page for development</p>
            </div>

            {{-- Payment Summary --}}
            <div class="bg-sage/10 rounded-xl p-4 mb-6">
                <div class="space-y-2 text-sm">
                    <div class="flex justify-between">
                        <span class="text-earth">Transaction ID:</span>
                        <span class="font-mono text-forest">{{ $payment->transaction_id }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-earth">Payment Method:</span>
                        <span class="font-semibold text-forest">{{ str_replace('_', ' ', strtoupper($payment->payment_method)) }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-earth">Amount:</span>
                        <span class="font-bold text-emerald-600 text-lg">{{ $payment->formatted_amount }}</span>
                    </div>
                    @if($payment->expires_at)
                    <div class="flex justify-between">
                        <span class="text-earth">Expires:</span>
                        <span class="text-forest">{{ $payment->expires_at->format('M j, Y, g:i A') }}</span>
                    </div>
                    @endif
                </div>
            </div>

            {{-- Registration Info --}}
            @if($payment->registration)
            <div class="bg-forest/5 rounded-xl p-4 mb-6">
                <h3 class="font-display font-semibold text-forest mb-2">Registration Details</h3>
                <div class="space-y-1 text-sm">
                    <p class="text-earth"><span class="font-medium">Name:</span> {{ $payment->registration->first_name }} {{ $payment->registration->last_name }}</p>
                    <p class="text-earth"><span class="font-medium">Email:</span> {{ $payment->registration->email }}</p>
                    <p class="text-earth"><span class="font-medium">Category:</span> {{ $payment->registration->category }}</p>
                </div>
            </div>
            @endif

            {{-- Mock Payment Options --}}
            <div class="space-y-3 mb-6">
                <h3 class="font-display font-semibold text-forest mb-3">Select Action:</h3>

                <form method="POST" action="{{ route('payment.mock.process', ['payment' => $payment->id]) }}">
                    @csrf
                    <button type="submit" class="w-full flex items-center justify-center gap-2 px-4 py-3 bg-emerald-600 text-white font-semibold rounded-xl hover:bg-emerald-700 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        Simulate Successful Payment
                    </button>
                </form>

                <a href="{{ route('payment.failed', ['payment' => $payment->id]) }}" class="w-full flex items-center justify-center gap-2 px-4 py-3 bg-red-600 text-white font-semibold rounded-xl hover:bg-red-700 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    Simulate Failed Payment
                </a>

                <a href="{{ route('conference.landing') }}" class="w-full flex items-center justify-center gap-2 px-4 py-3 bg-white text-forest border-2 border-forest font-semibold rounded-xl hover:bg-forest/5 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 17l-4 4m0 0l-4-4m4 4V3" />
                    </svg>
                    Cancel & Return
                </a>
            </div>

            {{-- Notice --}}
            <div class="bg-blue-50 rounded-lg p-3 text-center">
                <p class="text-xs text-blue-800">
                    <svg class="w-4 h-4 inline-block mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    In production, this will redirect to Xendit payment page
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
