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

Route::group(['prefix'=> 'backside', 'as' => 'backside.'],function(){
	Route::resource('/package','PackageController');
	Route::resource('/location','LocationController');
	Route::resource('/hotel','HotelController');
	Route::resource('/blog','BlogController');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
