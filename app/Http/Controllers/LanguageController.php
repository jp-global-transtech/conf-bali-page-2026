<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class LanguageController extends Controller
{
    /**
     * Switch application language
     */
    public function switch(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'lang' => 'required|in:en,hi,id,ja'
        ]);

        session(['language' => $validated['lang']]);
        app()->setLocale($validated['lang']);

        return back();
    }
}
