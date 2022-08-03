<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index()
    {
        return view('front.Category', compact('Category'));
    }
    public function show(Property $property)
    {
        return view('front.Properties', compact('Property'));
    }
}