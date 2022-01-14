<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function HomePage(Request $request){
        $token=$request->session()->has('token');

        if($token==true){
        return view('/Dashboard');
        }else{
            return view('Home');
        }

    }
}
