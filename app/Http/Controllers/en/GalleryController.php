<?php

namespace App\Http\Controllers\en;

use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function index()
    {
        return view('en/gallery');
    }
}
