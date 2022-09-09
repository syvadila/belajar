<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\katalog;

class LandingPageController extends Controller
{
    public function beranda()
    {
        return view('page.beranda');
    }

    public function asosiasi()
    {
        return view('page.asosiasi');
    }

    public function jasa()
    {
        return view('page.jasa');
    }

    public function katalog()
    {
        $katalogs = katalog::all();
        return view('page.katalog', compact('katalogs'));
    }
}
