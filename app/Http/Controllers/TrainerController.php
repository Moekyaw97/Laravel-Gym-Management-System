<?php

namespace App\Http\Controllers;

use App\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainers=Trainer::all();
        return view('backend.trainer.index',compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $trainers = Trainer::all();
        return view('backend.trainer.create',compact('trainers'));
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
            "phoneno" => "required",
            "address" => "required",
            
            
        ]);
         // if include file, upload
        if($request->file()) {
            $fileName = time().'_'.$request->photo->getClientOriginalName(); // 1970 jan 1
            $filePath = $request->file('photo')->storeAs('trainer_photo', $fileName, 'public');
            $path = 'storage/'.$filePath;
        }

        // data store
        $trainer = new Trainer;
       
        $trainer->name = $request->name;
        $trainer->photo = $path;
        $trainer->phoneno = $request->phoneno;
        $trainer->address = $request->address;
     
       
       
        $trainer->save();

        // return redirect
        return redirect()->route('trainer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function show(Trainer $trainer)
    {
          return view('backend.trainer.detail',compact('trainer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {
         return view('backend.trainer.edit',compact('trainer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainer $trainer)
    {
           $request->validate([
          
            "name" => "required",
            "photo" => "required",
            "phoneno" => "required",
            "address" => "required",
        ]);
         // if include file, upload
        if($request->file()) {
            $fileName = time().'_'.$request->photo->getClientOriginalName(); // 1970 jan 1
            $filePath = $request->file('photo')->storeAs('trainer_photo', $fileName, 'public');
            $path = 'storage/'.$filePath;
        }else{
            $path=$request->oldphoto;
        }

        // data store
     
          $trainer->name = $request->name;
        $trainer->photo = $path;
        $trainer->phoneno = $request->phoneno;
        $trainer->address = $request->address;

         $trainer->save();

        // return redirect
        return redirect()->route('trainer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trainer $trainer)
    {
         $trainer->delete();
        return redirect()->route('trainer.index');
    }
}
