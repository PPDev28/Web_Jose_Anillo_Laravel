<?php

namespace App\Http\Controllers\en;

use App\Http\Controllers\Controller;

class BiographyController extends Controller
{
    public function index()
    {
        return view('en/biography');
    }
}
