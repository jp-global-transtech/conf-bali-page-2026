@extends('layouts.conference')

@section('title', 'Payment Successful - GETS 2026')

@section('content')
<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 bg-ivory">
    <div class="max-w-md w-full">
        <div class="bg-white rounded-2xl shadow-xl p-8 text-center">
            {{-- Success Icon --}}
            <div class="mx-auto flex items-center justify-center h-20 w-20 rounded-full bg-emerald-100 mb-6">
                <svg class="h-12 w-12 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
            </div>

            <h2 class="text-2xl font-display font-bold text-forest mb-2">Payment Successful!</h2>
            <p class="text-earth mb-6">Your registration has been confirmed.</p>

            {{-- Registration Details --}}
            @if($payment->registration)
            <div class="bg-sage/10 rounded-xl p-4 mb-6 text-left">
                <div class="space-y-2 text-sm">
                    <div class="flex justify-between">
                        <span class="text-earth">Registration ID:</span>
                        <span class="font-semibold text-forest">{{ $payment->registration->registration_id ?? 'GETS-2026-' . str_pad($payment->registration->id, 4, '0', STR_PAD_LEFT) }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-earth">Name:</span>
                        <span class="font-semibold text-forest">{{ $payment->registration->first_name }} {{ $payment->registration->last_name }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-earth">Transaction ID:</span>
                        <span class="font-mono text-forest">{{ $payment->transaction_id }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-earth">Amount Paid:</span>
                        <span class="font-bold text-emerald-600">{{ $payment->formatted_amount }}</span>
                    </div>
                </div>
            </div>
            @endif

            {{-- Confirmation Email Notice --}}
            <div class="bg-blue-50 rounded-lg p-4 mb-6">
                <p class="text-sm text-blue-800">
                    <svg class="w-4 h-4 inline-block mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    A confirmation email has been sent to <strong>{{ $payment->registration->email ?? 'your email' }}</strong>
                </p>
            </div>

            {{-- Actions --}}
            <div class="space-y-3">
                <a href="{{ route('conference.landing') }}" class="w-full flex items-center justify-center gap-2 px-4 py-3 bg-forest text-white font-semibold rounded-xl hover:bg-forest-700 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Back to Home
                </a>
                <p class="text-xs text-earth/60">Need help? <a href="mailto:info@jptranstech.org" class="text-forest hover:underline">Contact Support</a></p>
            </div>
        </div>
    </div>
</div>
@endsection
