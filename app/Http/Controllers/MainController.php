<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MainController extends Controller
{
     public function main($value='')
  {
    return view('frontend.main');
  }

  public function package()
  {
    return view('frontend.package');
  }

  // public function packagedetail($value='')
  // {
  //   return view('frontend.packagedetail');
  // }

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


  public function checkout()
  {
    return view('frontend.checkout');
  }
}