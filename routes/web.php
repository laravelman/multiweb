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



Route::group(['domain' => 'localhost'], function () {

	Route::get('/', function () {
	    // return view('welcome');
	    return $_SERVER['SERVER_NAME'];
	});
   
});

Route::get('/', function () {
    // return view('welcome');
    return "Invalid Server";
});
