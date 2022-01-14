<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashBordCountroller extends Controller
{
    function  DashBordPage(){
        return view('Dashboard');
    }
}
