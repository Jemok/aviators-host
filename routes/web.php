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

Route::get('/', function () {
    return view('index');
});

Route::get('/about-aviators', function (){
   return view('about');
});

Route::get('/office-solutions', function (){
    return view('office-solutions');
});

Route::get('/experiences', function (){
    return view('experiences');
});

Route::get('/contacts', function (){
    return view('contacts');
});

