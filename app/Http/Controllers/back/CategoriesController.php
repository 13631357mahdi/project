<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use app\Models\Category;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories= Category::orderBy('id','Desc')->paginate(10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('back.Caategories.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $messages =[
            'name.required'=> 'فیلد نام را وارد نمایید',
            'description.required'=> 'فیلد توضیحات را وارد نمایید',
        ];
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ],$messages);

        $categories= new category();
        $msg="ذخیره دسته بندی جدید با موفقیت انجام شد";
        return redirect(route('Categories.create'))->with('warning', $msg);

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
    public function edit($id)
    {
        //
        return view('Categories.edit', compact('Category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $messages =[
            'name.required'=> 'فیلد نام را وارد نمایید',
            'description.required'=> 'فیلد توضیحات را وارد نمایید',
        ];
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ],$messages);

        $category= new category();
        $msg="ذخیره دسته بندی جدید با موفقیت انجام شد";
        return redirect(route('Categories.edit'))->with('warning', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        try{
            $Category->delete();
        }catch (Exception $exception){
            return redirect(route('Categories'))->with('warning', $exception->getcode());
        }
        $smg="ایتم مورد نظر حدف شد";
        return redirect(route('Categories'))->with('success', $smg);
    }
}
