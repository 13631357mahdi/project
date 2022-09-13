<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\frontModels\Article;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagetitle='مطالب';
        $articles = Article::orderBy('id', 'DESC')->where('status', 1)->get();
        return view('front.articles.article', compact('articles','pagetitle'));
    }

    public function show(Article $article)
    {
        //
        $article->increment('hit');
        $pagetitle = 'مطلب';
        $comments= $article->comments()->where('status',1)->get();
        return view('front.articles.show', compact('pagetitle', 'article', 'comments'));
    }

}
