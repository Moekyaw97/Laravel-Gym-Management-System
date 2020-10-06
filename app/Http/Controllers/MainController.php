<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use App\User;
use App\Member;
use App\Membertype;
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

       
    $request->validate([
            "user_id" => "required",
            "weight" => "required",
            "phoneno" => "required",
            "address" => "required",
            "membertype_id"=>"required",  
             ]);
     
        $member = new Member;
        $member->user_id= $request->user_id;
        $member->weight = $request->weight;
        $member->phoneno = $request->phoneno;
        $member->address = $request->address;
        $member->membertype_id = $request->membertype_id;
        $member->save();

        // dd($member);

        return redirect()->route('packageformpage');
        // return view('frontend.checkout');
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
            "start_date" => "nullable|date",
            "time"=>"nullable|date",  
             ]);
     
        $memberpackage = new Memberpackage;
        $memberpackage->member_id= $request->member_id;
        $memberpackage->package_id= $request->package_id;
        $memberpackage->trainer_id= $request->trainer_id;
        $memberpackage->start_date= $start_date;
        $memberpackage->time= $time;
        $memberpackage->save();

   

        return redirect()->route('checkoutpage');

    //  
  }

  public function packagedetail()
  {
    return view('frontend.packagedetail');
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