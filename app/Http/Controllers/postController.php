<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postController extends Controller
{
    public function post()
    {
        $name=  ['name' =>'امیر' ];
        return view('index',$name);
    }
}
