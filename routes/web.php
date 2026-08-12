<?php

use App\Http\Controllers\Bali2026Controller;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

// Conference landing page
Route::get('/', [Bali2026Controller::class, 'index'])->name('conference.landing');

// Language switcher
Route::post('/language', [LanguageController::class, 'switch'])->name('language.switch');

// Conference pages
Route::prefix('conference')->name('conference.')->group(function () {
    Route::get('/overview', [Bali2026Controller::class, 'overview'])->name('overview');
    Route::get('/schedule', [Bali2026Controller::class, 'schedule'])->name('schedule');
    Route::get('/venue', [Bali2026Controller::class, 'venue'])->name('venue');
    Route::get('/speakers', [Bali2026Controller::class, 'speakers'])->name('speakers');
    Route::get('/invited-speakers', [Bali2026Controller::class, 'invitedSpeakers'])->name('invited-speakers');
    Route::get('/important-dates', [Bali2026Controller::class, 'importantDates'])->name('important-dates');
    Route::get('/committee', [Bali2026Controller::class, 'committee'])->name('committee');
    Route::get('/timeline', [Bali2026Controller::class, 'timeline'])->name('timeline');
    Route::get('/experience', [Bali2026Controller::class, 'experience'])->name('experience');
    Route::get('/participant-support', [Bali2026Controller::class, 'participantSupport'])->name('participant-support');
    Route::get('/insights', [Bali2026Controller::class, 'insights'])->name('insights');
    Route::get('/selected-papers', [Bali2026Controller::class, 'selectedPapers'])->name('selected-papers');
    Route::get('/contact', [Bali2026Controller::class, 'contact'])->name('contact');
    Route::get('/call-for-abstract', [Bali2026Controller::class, 'callForAbstract'])->name('call-for-abstract');
    // Registration routes - Redirect to conf_ms_web
    // NOTE: conf_ms_web routes are defined at root level (e.g. /register, /registration)
    //       NOT under a /conference prefix. These redirects now point to the correct paths.
    Route::get('/registration', function () {
        return view('conference.registration');
    })->name('registration');
    Route::get('/register', function () {
        return redirect(config('conference.conf_ms_web_url') . '/register?conference=gets-conference-2026');
    })->name('register');
    Route::get('/calendar', [Bali2026Controller::class, 'downloadCalendar'])->name('calendar');
});

// Payment routes
Route::prefix('payment')->name('payment.')->group(function () {
    Route::get('/invoice/create', [PaymentController::class, 'createInvoice'])->name('create');
    Route::post('/webhook', [PaymentController::class, 'webhook'])->name('webhook');
    Route::get('/success/{payment}', [PaymentController::class, 'success'])->name('success');
    Route::get('/failed/{payment}', [PaymentController::class, 'failed'])->name('failed');
    Route::get('/mock/{payment}', [PaymentController::class, 'mock'])->name('mock');
    Route::post('/mock/{payment}/process', [PaymentController::class, 'processMock'])->name('mock.process');
    Route::get('/callback', [PaymentController::class, 'webhook'])->name('callback');
});

// Documentation pages
Route::prefix('docs')->name('docs.')->group(function () {
    Route::get('/guidelines', [Bali2026Controller::class, 'docsGuidelines'])->name('guidelines');
    Route::get('/abstract', [Bali2026Controller::class, 'docsAbstract'])->name('abstract');
    Route::get('/templates', [Bali2026Controller::class, 'docsTemplates'])->name('templates');
    Route::get('/registration', [Bali2026Controller::class, 'docsRegistration'])->name('registration');
    Route::get('/payment', [Bali2026Controller::class, 'docsPayment'])->name('payment');
    Route::get('/faq', [Bali2026Controller::class, 'docsFaq'])->name('faq');
});

// Health check
Route::get('/up', function () {
    return response()->noContent();
});
