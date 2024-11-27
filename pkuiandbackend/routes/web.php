<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::resource('firstpage',)
// Route::get("first",function(){
//     return "Hay i am working";
// });

Route::get('/',function(){
    return view('mainpage/index');
    // return view('firstpage/index');
    // return view('layouts/show');
});