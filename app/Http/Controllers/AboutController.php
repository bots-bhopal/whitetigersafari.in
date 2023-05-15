<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        return view('about.about-zoo');
    }

    public function director()
    {
        return view('about.director');
    }

    public function vision()
    {
        return view('about.vision');
    }

    public function heritage()
    {
        return view('about.heritage');
    }

    public function foundation()
    {
        return view('about.foundation');
    }
}
