<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class LoginRegistationController extends Controller
{





    function Logout(Request $request){
        $request->session()->flush();
        return redirect('/');
    }



    function CallGitHub(){
        $CallGitHubLoginService=Socialite::driver('github')->redirect();

        return $CallGitHubLoginService;
    }



    function GitHubCallBack(){
        $user=Socialite::driver('github')->stateless()->user();

        $token = $user->token;
        $userID=$user->getID();
        $nickName=$user->getNickname();
        $name=$user->getName();
        $email=$user->getEmail();
        $img=$user->getAvatar();


        Session::put('token',$token);
        Session::put('userID',$userID);
        Session::put('nickName',$nickName);
        Session::put('name',$name);
        Session::put('email',$email);
        Session::put('img',$img);



        $countValue=DB::table('user')->where('email','=',$email)->count();


        if ($countValue==0){

            DB::table('user')->insert([
                'name'=>$name,
                'email'=>$email,
                'user_id'=>$userID,
                'nick_name'=>$nickName,

            ]);

            return redirect('/Dashboard');

        }else{
            return redirect('/Dashboard');
        }


    }



}
