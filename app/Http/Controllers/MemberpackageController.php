<?php

namespace App\Http\Controllers;

use App\Memberpackage;
use App\User;
use App\Member;
use App\Trainer;
use App\Package;
use Illuminate\Http\Request;

class MemberpackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $memberpackages=Memberpackage::all();
        $users=User::all();
        $members=Member::all();
        $packages=Package::all();
        $trainers=Trainer::all();
        return view('backend.memberpackage.index',compact('memberpackages','users','members','packages','trainers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Memberpackage  $memberpackage
     * @return \Illuminate\Http\Response
     */
    public function show(Memberpackage $memberpackage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Memberpackage  $memberpackage
     * @return \Illuminate\Http\Response
     */
    public function edit(Memberpackage $memberpackage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Memberpackage  $memberpackage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Memberpackage $memberpackage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Memberpackage  $memberpackage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Memberpackage $memberpackage)
    {
        //
    }
}
