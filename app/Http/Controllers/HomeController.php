<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function home()
    {
        return view('layouts.home');
    }

    function about()
    {
        return view('directional.about');
    }

    function brand()
    {
        return view('directional.brand');
    }

    function contact()
    {
        return view('directional.contact');
    }

    function special()
    {
        return view('directional.special');
    }

    function login()
    {
        return view('login');
    }
}
