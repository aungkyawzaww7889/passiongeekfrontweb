<?php

use App\Http\Controllers\HomepagesController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('/homepages',HomepagesController::class);

