<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    function showContact(){
        return view('Contact');
    }

    function showHome(){
        return view('Home');
    }

    function showServices(){
        return view('Services');
    }

    function showPortfolio(){
        return view('Portfolio');
    }
}
