<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\category;


class CategoryController extends Controller
{
    //
    public function store(Request $request)
    {
        $categories = new \App\Models\category([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'image' => $request->get('image')

        ]);
        $categories->save();
    }


    public function create()
    {
        $pagetitle= 'ثبت اطلاعات';
        return view('categories', compact('pagetitle'));
    }

}
