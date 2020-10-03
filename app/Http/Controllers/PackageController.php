<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;
use App\Category;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages=Package::all();
        return view('backend.package.index',compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        
     
        return view('backend.package.create',compact('categories'));
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
            "price" => "required",
            "day" => "required",
            "discount" => "required",
            "category_id" => "required",
            
        ]);
       

        // data store
        $package = new Package;
        $package->name = $request->name;
        $package->price = $request->price;
        $package->day = $request->day;
        $package->discount = $request->discount;
        $package->category_id = $request->category_id;
       
        $package->save();

        // return redirect
        return redirect()->route('package.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
         
         return view('backend.package.detail',compact('package'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
         $categories=Category::all();
         return view('backend.package.edit',compact('package','categories'));

         
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
         //validation
        $request->validate([
           
            "name" => "required",
            "price" => "required",
            "day" => "required",
            "discount" => "required",
            "category_id" => "required",
            
        ]);
       

        // data store
       
        $package->name = $request->name;
        $package->price = $request->price;
        $package->day = $request->day;
        $package->discount = $request->discount;
        $package->category_id = $request->category_id;
       
       
        $package->save();

        // return redirect
        return redirect()->route('package.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        $package->delete();
        return redirect()->route('package.index');
    }
}
