<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $properties= Property::orderBy('id','Desc')->paginate(10);
        return view('back.Properties.Property', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $Categories = Category::all()->pluck('name', 'id');
        return view('back.Properties.Create', compact('Categories'));
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
            'color.required'=> 'فیلد رنگ را وارد نمایید',
            'memory.required'=> 'فیلد حافظه داخلی را وارد نمایید',
            'model.required'=> 'فیلد مدل را وارد نمایید',
            'brand.required'=> 'فیلد برند را وارد نمایید',
        ];
        $validatedData = $request->validate([
            'color' => 'required',
            'memory' => 'required',
            'model' => 'required',
            'brand' => 'required',
        ],$messages);

        $properties= new Property();
        $property->Categories()->attach($request->Categories);
        $msg="ذخیره ویژگی جدید با موفقیت انجام شد";
        return redirect(route('Property.create'))->with('warning', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        //
        $Categories = Category::all()->pluck('name', 'id');
        return view('Property.edit', compact('Property'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        //
        $messages =[
            'color.required'=> 'فیلد رنگ را وارد نمایید',
            'memory.required'=> 'فیلد حافظه داخلی را وارد نمایید',
            'model.required'=> 'فیلد مدل را وارد نمایید',
            'brand.required'=> 'فیلد برند را وارد نمایید',
        ];
        $validatedData = $request->validate([
            'color' => 'required',
            'memory' => 'required',
            'model' => 'required',
            'brand' => 'required',
        ],$messages);

        $properties= new Property();
        $msg="ذخیره ویژگی جدید با موفقیت انجام شد";
        return redirect(route('Property.edit'))->with('warning', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        //
        try{
            $Property->delete();
        }catch (Exception $exception){
            return redirect(route('Property'))->with('warning', $exception->getcode());
        }
        $smg="ایتم مورد نظر حدف شد";
        return redirect(route('property'))->with('success', $smg);
    }
}
