<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class LandingController extends Controller
{
    public function index(): View
    {
        return view('landing.index');
    }

    public function about(): View
    {
        return view('landing.about');
    }

    public function programs(): View
    {
        return view('landing.programs');
    }

    public function prestasi(): View
    {
        return view('landing.prestasi');
    }

    public function contact(): View
    {
        return view('landing.contact');
    }
    public function daftar()
    {
        return view('landing.daftar');
    }
}
