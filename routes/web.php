<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/getmember', function () {
//     return view('frontend.member');
// });








//normal user


Auth::routes();

Route::get('/','MainController@main')->name('homepage');

Route::get('/mypackagepage/{id}','MainController@mypackage')->name('mypackagepage');

Route::get('/trainerpage','MainController@trainer')->name('trainerpage');

Route::get('/membershippage','MainController@membership')->name('membershippage');

Route::get('contactpage','MainController@contact')->name('contactpage');

// Route::get('/registerpage','MainController@register')->name('registerpage');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/membertypepage','MainController@membertype')->name('membertypepage');






Route::get('/memberformpage','MainController@memberform')->name('memberformpage');

Route::post('/memberpage','MainController@member')->name('memberpage');

Route::get('/packageformpage','MainController@packageform')->name('packageformpage');

Route::post('/packagepage','MainController@package')->name('packagepage');

 Route::get('/checkoutpage','MainController@checkout')->name('checkoutpage');

Route::group(['middleware' => ['role:member']], function () {


	

	

   

});

Route::group(['middleware' => ['role:admin']], function () {



Route::resource('memberpackage','MemberpackageController');

Route::resource('category','CategoryController');

Route::resource('trainer','TrainerController');

Route::resource('package','PackageController');


});