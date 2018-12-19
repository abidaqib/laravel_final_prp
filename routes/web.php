<?php

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

Route::get('', function () {
    return view('home');
});
Route::get('home', 'TotalControle@home');

Route::group(['middleware' => 'checkloggedin'], function(){
	Route::get('student', 'TotalControle@student');
	Route::get('admin', 'TotalControle@admin');
});

Route::post('signup', 'TotalControle@signUp');
Route::post('signin', 'TotalControle@signIn');

Route::post('logout', 'TotalControle@logout');