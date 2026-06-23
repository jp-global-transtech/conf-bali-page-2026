<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class Bali2026Controller extends Controller
{
    /**
     * Show the conference landing page
     */
    public function index(): View
    {
        return view('conference.landing');
    }

    /**
     * Show the conference overview page
     */
    public function overview(): View
    {
        return view('conference.overview');
    }

    /**
     * Show the conference schedule page
     */
    public function schedule(): View
    {
        return view('conference.schedule');
    }

    /**
     * Show the conference venue page
     */
    public function venue(): View
    {
        $conference = [
            'location' => config('conference.location', 'Bali, Indonesia'),
        ];

        return view('conference.venue', compact('conference'));
    }

    /**
     * Show the speakers page
     */
    public function speakers(): View
    {
        return view('conference.speakers');
    }

    /**
     * Show the invited speakers page
     */
    public function invitedSpeakers(): View
    {
        return view('conference.invited-speakers');
    }

    /**
     * Show the important dates page
     */
    public function importantDates(): View
    {
        return view('conference.important-dates');
    }

    /**
     * Show the committee page
     */
    public function committee(): View
    {
        return view('conference.committee');
    }

    /**
     * Show the timeline page
     */
    public function timeline(): View
    {
        return view('conference.timeline');
    }

    /**
     * Show the experience page
     */
    public function experience(): View
    {
        return view('conference.experience');
    }

    /**
     * Show the participant support page
     */
    public function participantSupport(): View
    {
        return view('conference.participant-support');
    }

    /**
     * Show the insights page
     */
    public function insights(): View
    {
        return view('conference.insights');
    }

    /**
     * Show the contact page
     */
    public function contact(): View
    {
        $conference = [
            'support_email' => config('conference.support_email'),
            'whatsapp_number' => config('conference.whatsapp_number'),
        ];

        return view('conference.contact', compact('conference'));
    }

    /**
     * Show the call for abstract page
     */
    public function callForAbstract(): View
    {
        $subthemes = config('conference.call_for_papers_subthemes', []);
        return view('conference.call-for-papers', compact('subthemes'));
    }

    /**
     * Download calendar file
     */
    public function downloadCalendar(): BinaryFileResponse
    {
        $filePath = public_path('downloads/calendar.ics');

        if (!file_exists($filePath)) {
            abort(404, 'Calendar file not found');
        }

        return response()->download($filePath, 'calendar.ics');
    }

    /**
     * Show the guidelines documentation page
     */
    public function docsGuidelines(): View
    {
        return view('docs.guidelines');
    }

    /**
     * Show the abstract documentation page
     */
    public function docsAbstract(): View
    {
        return view('docs.abstract');
    }

    /**
     * Show the templates documentation page
     */
    public function docsTemplates(): View
    {
        return view('docs.templates');
    }

    /**
     * Show the registration documentation page
     */
    public function docsRegistration(): View
    {
        return view('docs.registration');
    }

    /**
     * Show the payment documentation page
     */
    public function docsPayment(): View
    {
        return view('docs.payment');
    }

    /**
     * Show the FAQ documentation page
     */
    public function docsFaq(): View
    {
        return view('docs.faq');
    }
}
