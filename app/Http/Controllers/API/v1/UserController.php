<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\v1\Controller;
use App\Http\Controllers\v1\Users;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(Request $request)
    {
        $Users = new Users([
            'email' => $request->get('email'),
            'password' => $request->get('password')

        ]);
        $Users->save();
    }
}
