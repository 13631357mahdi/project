<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SimpleController extends Controller
{
    //
    public function index ()
    {
        return view('back/admin/pages/tables/data');
    }
}
