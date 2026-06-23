@extends('layouts.conference')

@section('title', 'Payment Failed - GETS 2026')

@section('content')
<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 bg-ivory">
    <div class="max-w-md w-full">
        <div class="bg-white rounded-2xl shadow-xl p-8 text-center">
            {{-- Failed Icon --}}
            <div class="mx-auto flex items-center justify-center h-20 w-20 rounded-full bg-red-100 mb-6">
                <svg class="h-12 w-12 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </div>

            <h2 class="text-2xl font-display font-bold text-forest mb-2">Payment Failed</h2>
            <p class="text-earth mb-6">Your payment could not be processed. Please try again.</p>

            {{-- Transaction Details --}}
            <div class="bg-sage/10 rounded-xl p-4 mb-6 text-left">
                <div class="space-y-2 text-sm">
                    <div class="flex justify-between">
                        <span class="text-earth">Transaction ID:</span>
                        <span class="font-mono text-forest">{{ $payment->transaction_id }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-earth">Amount:</span>
                        <span class="font-semibold text-forest">{{ $payment->formatted_amount }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-earth">Status:</span>
                        <span class="text-red-600 font-semibold">{{ ucfirst($payment->status) }}</span>
                    </div>
                    @if($payment->failure_reason)
                    <div class="mt-2 pt-2 border-t border-forest/10">
                        <span class="text-earth">Reason: {{ $payment->failure_reason }}</span>
                    </div>
                    @endif
                </div>
            </div>

            {{-- Options --}}
            <div class="space-y-3">
                <a href="{{ route('payment.mock', ['payment' => $payment->id]) }}" class="w-full flex items-center justify-center gap-2 px-4 py-3 bg-forest text-white font-semibold rounded-xl hover:bg-forest-700 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                    </svg>
                    Try Again
                </a>
                <a href="{{ route('conference.landing') }}" class="w-full flex items-center justify-center gap-2 px-4 py-3 bg-white text-forest border-2 border-forest font-semibold rounded-xl hover:bg-forest/5 transition-colors">
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
