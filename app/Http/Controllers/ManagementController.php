<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementController extends Controller
{
    public function human()
    {
        return view('management.human');
    }

    public function rescue()
    {
        return view('management.rescue');
    }

    public function chart()
    {
        return view('management.chart');
    }
}
