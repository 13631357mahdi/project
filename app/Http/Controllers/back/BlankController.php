<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlankController extends Controller
{
    //
    public function index(){
        return view('back/admin/pages/examples/blank');
    }
}
