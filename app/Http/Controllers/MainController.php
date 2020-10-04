<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


// use App\Category;
// use App\Subcategory;
// use App\Item;
// use App\Brand;
// use App\Order;
use App\User;


class MainController extends Controller
{
     public function main($value='')
  {
    return view('frontend.main');
  }

   public function member($id)
  {
    $user = User::find($id);
    return view('frontend.member',compact('user'));
  }
  

  public function membertype()
  {
    return view('frontend.membertype');
  }

  public function choosetrainer()
  {
    return view('frontend.choosetrainer');
  }
  

  public function package()
  {
    return view('frontend.package');
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