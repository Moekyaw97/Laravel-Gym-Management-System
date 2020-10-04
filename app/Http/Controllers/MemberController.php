<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Member;
use App\Membertype;
use App\User;



class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        // $members=Member::all();
        // return view('backend.member.index',compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $members = Member::all();
        // $categories=Category::find($id);
        // return view('frontend.form',compact('members','categories'));

        $membertypes = Membertype::all();
        return view('frontend.form',compact('membertypes'));

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
            "user_id" => "required",
            "weight" => "required",
            "phoneno" => "required",
            "address" => "required",
            "membertype_id"=>"required",
            
            
        ]);
        

        // data store
        $member = new Member;
        $member->user_id= $request->user_id;
        $member->weight = $request->weight;
        $member->phoneno = $request->phoneno;
        $member->address = $request->address;
        $member->membertype_id = $request->membertype_id;
       
       
       
        $member->save();

        // return redirect
        return redirect()->route('frontend.checkout');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        
         return view('backend.member.detail',compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        
        
        return view('backend.member.edit',compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        //  //validation
        // $request->validate([
        //     "user_id" => "required",
        //     "weight" => "required",
        //     "name" => "required",
        //     "profile" => "required",
        //     "phoneno" => "required",
        //     "address" => "required",
            
        // ]);
        //  // if include file, upload
        // if($request->file()) {
        //     $fileName = time().'_'.$request->profile->getClientOriginalName(); // 1970 jan 1
        //     $filePath = $request->file('profile')->storeAs('member_profile', $fileName, 'public');
        //     $path = 'storage/'.$filePath;
        // }else{
        //     $path=$request->oldprofile;
        // }

        // // data store
     
        // $member->user_id= $request->user_id;
        // $member->weight = $request->weight;
        // $member->name = $request->name;
        // $member->profile = $path;
        // $member->phoneno = $request->phoneno;
        // $member->address = $request->address;
        
        // $member->save();

        // // return redirect
        // return redirect()->route('member.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        // $member->delete();
        // return redirect()->route('member.index');
    }
}
