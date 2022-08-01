<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use http\Models\User;

class UsersController extends Controller
{
    //
    public function store(Request $request){
        $Users = new \App\Models\User([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'password'=>$request->get('password')
        ]);

            $Users->save();
    }

    public function create()
    {
       
        return view('User');
    }
}
