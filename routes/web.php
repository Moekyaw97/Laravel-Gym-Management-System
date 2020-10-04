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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/','MainController@main')->name('homepage');




Route::get('/packagepage','MainController@package')->name('packagepage');

Route::get('/trainerpage','MainController@trainer')->name('trainerpage');

Route::get('/membershippage','MainController@membership')->name('membershippage');

Route::get('contactpage','MainController@contact')->name('contactpage');

Route::get('/registerpage','MainController@register')->name('registerpage');

// Route::get('/formpage/{id}','MainController@form')->name('formpage');
Route::get('/memberpage/{id}','MainController@member')->name('memberpage');
// Route::resource('/member/{id}','MemberController');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/membertypepage','MainController@membertype')->name('membertypepage');

// Route::group(['middleware' => ['role:member']], function () {

	

	

    Route::get('/choosetrainerpage','MainController@choosetrainer')->name('choosetrainerpage');
    Route::get('/checkoutpage','MainController@checkout')->name('checkoutpage');

// });

Route::resource('category','CategoryController');

Route::resource('trainer','TrainerController');

Route::resource('package','PackageController');


