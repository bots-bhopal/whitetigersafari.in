<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function mammals()
    {
        return view('animals.mammals');
    }

    public function reptiles()
    {
        return view('animals.reptiles');
    }

    public function birds()
    {
        return view('animals.birds');
    }

    public function arrivalsBorns()
    {
        return view('animals.arrival-born');
    }

    public function enrichment()
    {
        return view('animals.enrichment');
    }

    public function ranging()
    {
        return view('animals.ranging');
    }

    public function adoption()
    {
        return view('animals.adoption');
    }
}
