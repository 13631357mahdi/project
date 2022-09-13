<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\frontModels\Article;
use App\frontModels\Comment;


class CommentController extends Controller
{
    public function store(Article $article , Request $request)
    {
        $messages = [
            'description.required' => 'فیلد کامنت را وارد نمایید',
        ];
        $validated = $request->validate([
            'description' => 'required',
        ], $messages);
        $article->comments()->create(
          [
            'description'=> $request->description
          ]);
    }

}
