<?php

namespace App\Http\Controllers\en;

use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function index()
    {
        return view('en/event');
    }
}
