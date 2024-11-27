<?php

use App\Http\Controllers\FirstpagesbladeController;
use App\Http\Controllers\HomepagesController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[FirstpagesbladeController::class,'index']);

