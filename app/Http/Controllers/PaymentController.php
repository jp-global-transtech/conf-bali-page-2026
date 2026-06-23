<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;

class PaymentController extends Controller
{
    /**
     * Show create invoice page
     */
    public function createInvoice(): View
    {
        return view('payment.create-invoice');
    }

    /**
     * Handle payment webhook
     */
    public function webhook(Request $request): JsonResponse
    {
        // Process webhook from payment gateway
        // This is a placeholder implementation
        
        return response()->json([
            'status' => 'received',
            'message' => 'Webhook received successfully'
        ]);
    }

    /**
     * Show payment success page
     */
    public function success($payment): View
    {
        return view('payment.success', ['payment' => $payment]);
    }

    /**
     * Show payment failed page
     */
    public function failed($payment): View
    {
        return view('payment.failed', ['payment' => $payment]);
    }

    /**
     * Show mock payment page
     */
    public function mock($payment): View
    {
        return view('payment.mock', ['payment' => $payment]);
    }

    /**
     * Process mock payment
     */
    public function processMock(Request $request, $payment): RedirectResponse
    {
        // Process mock payment
        return redirect()->route('payment.success', ['payment' => $payment]);
    }
}
