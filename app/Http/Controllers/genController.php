<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class genController extends Controller
{
    //return view about
    public function about()
    {
        return view('about');
    }

    //return view page
    public function contact()
    {
        return view('contact');
    }
}
