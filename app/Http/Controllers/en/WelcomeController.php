<?php

namespace App\Http\Controllers\en;

use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('en/welcome');
    }
}
