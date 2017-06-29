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

Route::get('/experiences', function (){
    return view('experiences');
});

Route::get('/contacts', function (){
    return view('contacts');
});

Route::get('/serviced-offices', function (){
    return view('serviced-offices');
});

Route::get('/meeting-and-boardroom', function (){
    return view('meeting-and-boardroom');
});

Route::get('/virtual-offices', function (){
    return view('virtual-offices');
});


