<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pagetitle= 'مدیریت مطالب';
        $articles = Article::orderBy('id', 'DESC')->paginate(10);
        return view('back.admin.Articles.Articles', compact('articles', 'pagetitle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pagetitle= 'ایجاد مطلب';
        $categories= Category::all()->pluck('title','id');
        return view('back.admin.Articles.create', compact('pagetitle', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Article $article)
    {
        //
        $messages = [
            'title.required' => 'فیلد عنوان را وارد نمایید',
            'title.unique' => 'فیلد عنوان تکراری است  ',
            'title.max' => 'حد اکثر 15 کاراکتر',
            'description.required' => 'فیلد توضیحات را وارد نمایید',
            'slug.required' => 'فیلد نام مستعار را وارد نمایید',
            'slug.unique' => 'فیلد نام مستعار تکراری است  ',
            'slug.max' => 'حد اکثر 20 کاراکتر',
        ];
        $validated = $request->validate([
            'title' => 'required|unique:articles|max:15',
            'description' => 'required',
            'slug' => 'required|unique:articles|max:20',
        ], $messages);
        $article= new Article();
        //     (['title' => $request->get('title'),
        //     'slug' => $request->get('slug'),
        //     'description' => $request->get('description'),
        //     'status' => $request->get('status')
        // ]); 
        //     $article->save();
        $article = $article->create($request->all());
            $article->categories()->attach($request->categories);
        $msg= "ذخیره مطلب با موفقیت انجام شد";
        return redirect(route('index.Article'))->with('success', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
        $pagetitle= 'ویرایش مطالب';
        $categories= Category::all()->pluck('title','id');
        return view('back.admin.Articles.edit', compact('pagetitle', 'categories', 'article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
        $messages = [
            'title.required' => 'فیلد عنوان را وارد نمایید',
            'title.unique' => 'فیلد عنوان تکراری است  ',
            'title.max' => 'حد اکثر 15 کاراکتر',
            'description.required' => 'فیلد توضیحات را وارد نمایید',
            'slug.required' => 'فیلد نام مستعار را وارد نمایید',
            'slug.unique' => 'فیلد نام مستعار تکراری است  ',
            'slug.max' => 'حد اکثر 20 کاراکتر',
        ];
        $validated = $request->validate([
            'title' => 'required|unique:articles|max:15',
            'description' => 'required',
            'slug' => 'required|unique:articles|max:20',
        ], $messages);
        // $article= new Article([
        //     'title' => $request->get('title'),
        //     'slug' => $request->get('slug'),
        //     'description' => $request->get('description'),
        //     'status' => $request->get('status')
        // ]); 
        //     $article->save();
            $article->update($request->all());
            $article->categories()->sync($request->categories);
        $msg= "ویرایش مطلب با موفقیت انجام شد";
        return redirect(route('index.Article'))->with('success', $msg);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
        $article->delete();
        $msg= "ایتم مورد نظر حدف گردید"; 
        return redirect(route('index.Article'))->with('success', $msg);
    }

    public function updatestatus(Article $article)
    {
        if($article->status==1)
        {
            $article->status = 0; 
        }else
        {
            $article->status = 1;
        }
        $article->save();
        $msg= 'بروزرسانی با موفقیت انجام شد';
        return redirect(route('index.Article'))->with('success', $msg);
    }
}
