<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\models\post;

class PostsController extends Controller
{
    //
    public function store(Request $request)
    {
        $posts = new posts([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'image' => $request->get('image')

        ]);
        $posts->save();
    }
}
