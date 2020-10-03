<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();
        return view('backend.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.category.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $request->validate([
            
            "name" => "required",
            "photo" => "required",
            
            
        ]);
         // if include file, upload
        if($request->file()) {
            $fileName = time().'_'.$request->photo->getClientOriginalName(); // 1970 jan 1
            $filePath = $request->file('photo')->storeAs('category_photo', $fileName, 'public');
            $path = 'storage/'.$filePath;
        }

        // data store
        $category = new Category;
        
        $category->name = $request->name;
        $category->photo = $path;
        
       
       
        $category->save();

        // return redirect
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
          return view('backend.category.detail',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
     
        return view('backend.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
          //validation
        $request->validate([
            "name" => "required",
            "photo" => "required",
            
        ]);
         // if include file, upload
        if($request->file()) {
            $fileName = time().'_'.$request->photo->getClientOriginalName(); // 1970 jan 1
            $filePath = $request->file('photo')->storeAs('category_photo', $fileName, 'public');
            $path = 'storage/'.$filePath;
        }else{
            $path=$request->oldphoto;
        }

        // data store
     
        $category->name = $request->name;
        $category->photo = $path;
       
        $category->save();

        // return redirect
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index');
    }
}
