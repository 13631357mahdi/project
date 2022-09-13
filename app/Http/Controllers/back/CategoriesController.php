<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Exception;
class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagetitle= 'مدیریت دسته بندی';
        $categories= Category::orderBy('id' , 'DESC')->paginate(10);
        return view('back.admin.Categories.Category', compact('pagetitle', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pagetitle= 'ایجاد دسته بندی';
        return view('back.admin.Categories.Create', compact('pagetitle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Category $category, Request $request)
    {
        $messages = [
            'title.required' => 'فیلد عنوان را وارد نمایید',
            'title.unique' => 'فیلد عنوان تکراری است  ',
            'title.max' => 'حد اکثر 15 کاراکتر',
            'description.required' => 'فیلد توضیحات را وارد نمایید',
        ];
        $validated = $request->validate([
            'title' => 'required|unique:Categories|max:15',
            'description' => 'required',
        ], $messages);
        $Category= new Category([
            'title' => $request->get('title'),
            'description' => $request->get('description')
        ]); 
            $Category->save();
        $msg= "ذخیره دسته بندی ها با موفقیت انجام شد";
        return redirect(route('index.category'))->with('success', $msg);
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
    public function edit(Category $category)
    {
        $pagetitle= 'ویرایش دسته بندی ها';
        return view('back.admin.Categories.edit', compact('pagetitle', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
        $messages = [
            'title.required' => 'فیلد عنوان را وارد نمایید',
            'title.unique' => 'فیلد عنوان تکراری است  ',
            'title.max' => 'حد اکثر 15 کاراکتر',
            'description.required' => 'فیلد توضیحات را وارد نمایید',
        ];
        $validated = $request->validate([
            'title' => 'required|unique:Categories|max:15',
            'description' => 'required',
        ], $messages);
        $category->update($request->all());
        $msg= " ویرایش دسته بندی ها با موفقیت انجام شد";
        return redirect(route('index.category'))->with('success', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
        $category->delete();
        $msg= "ایتم مورد نظر حدف گردید"; 
        return redirect(route('index.category'))->with('success', $msg);
    } 
}
