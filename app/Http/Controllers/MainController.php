<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
// use Carbon\Carbon;

use App\User;
use App\Member;
use App\Membertype;
use App\Memberpackage;
use App\Package;
use App\Trainer;


class MainController extends Controller
{
     public function main($value='')
  {
    return view('frontend.main');
  }

  public function memberform()
  {
    return view('frontend.member');
  }

   public function member(Request $request)
  {

    // insert user
    $request->validate([
            "name" => "required",
            "email" => "required",
            "password" => "required",

             ]);
    $user = new User;
    $user->name=$request->name;
    $user->email=$request->email;
    $user->password=Hash::make($request->password);
    $user->save();
    $user->assignRole('member'); // model_has_role


    // member    
    $request->validate([
            "user_id" => "required",
            "weight" => "required",
            "phoneno" => "required",
            "address" => "required",
            "membertype_id"=>"required",  
             ]);
    $member = new Member;
    $member->user_id = $user->id;
    $member->weight = $request->weight;
    $member->phoneno = $request->phoneno;
    $member->address = $request->address;
    $member->membertype_id = $request->membertype_id;
    $member->save();

        // dd($member);

        return redirect()->route('homepage')->with('status', 'Registration Successful , Pls login as member !');
        
  }
  

  public function membertype()
  {
    return view('frontend.membertype');
  }

  public function choosetrainer()
  {
    return view('frontend.choosetrainer');
  }

  public function packageform()
  {
    
     
   
    return view('frontend.package');

  }

  public function package(Request $request)
  {


       $request->validate([
            "member_id" => "required",
            "package_id" => "required",
            "trainer_id" => "required",
            "start_date" => "required",
                "time"   =>"required",  
             ]);
        
        $memberpackage = new Memberpackage;
        $memberpackage->member_id= $request->member_id;
        $memberpackage->package_id= $request->package_id;
        $memberpackage->trainer_id= $request->trainer_id;
        $memberpackage->start_date= $request->start_date;
        $memberpackage->time= $request->time;
        $memberpackage->save();

   

        return redirect()->route('checkoutpage');

    //  
  }

  public function mypackage($id)
  {
        $member=Member::where('user_id',$id)->first();
        return view('frontend.mypackage',compact('member'));
  }

  

  public function trainer()
  {
    return view('frontend.trainer');
  }

  public function membership()
  {
    return view('frontend.membership');
  }

  public function contact()
  {
    return view('frontend.contact');
  }

  public function register()
  {
    return view('frontend.register');
  }



  public function checkout()
  {
    return view('frontend.checkout');
  }
}