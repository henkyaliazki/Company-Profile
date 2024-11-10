<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('company_profile.index');
    }

    public function about()
    {
        return view('company_profile.about');
    }

    public function tracking()
    {
        return view('company_profile.tracking');
    }

}
