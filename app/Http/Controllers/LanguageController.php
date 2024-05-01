<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

class LanguageController extends Controller
{
    /**
     * @param $lang
     *
     * @return RedirectResponse
     */
    public function swap($lang): RedirectResponse
    {
        session()->put('locale', $lang);
        return redirect()->back();
    }
}
