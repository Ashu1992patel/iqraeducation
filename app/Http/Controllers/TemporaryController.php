<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class TemporaryController extends Controller
{
    public function registration()
    {
        return view('frontend.pages.registration');
    }

    public function checkout()
    {
        return view('frontend.pages.checkout');
    }
}
