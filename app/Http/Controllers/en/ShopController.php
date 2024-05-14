<?php

namespace App\Http\Controllers\en;

use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    public function index()
    {
        return view('en/shop');
    }
}
