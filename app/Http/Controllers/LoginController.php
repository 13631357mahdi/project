<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use app\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends controller
{

    public function __construct()
    {
    $this->middleware('guest:user')->except('logout');
    }
    public  function  showLogin()
    {
        return view('login');
    }
    public function Login(Request $request)
    {

       $user =\App\Models\User::all()->where('email' , $request->email)->where('password' , $request->password)->first();
       if($user != null)
       {
          Auth::guard('user')->login($user);
          return response(content:'عملیات موفق آمیز بود',status:200);
       }else{
           return abort(code:300, message:'خطا');
       }
    }
}
