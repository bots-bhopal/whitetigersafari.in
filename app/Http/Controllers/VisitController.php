<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitController extends Controller
{
    public function visitors()
    {
        return view('visit.visitor');
    }

    public function ticket()
    {
        return view('visit.ticket');
    }

    public function specialAttraction()
    {
        return view('visit.attraction');
    }

    public function dos()
    {
        return view('visit.dos');
    }

    public function timings()
    {
        return view('visit.timings');
    }
}
