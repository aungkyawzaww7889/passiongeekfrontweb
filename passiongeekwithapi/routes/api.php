<?php

use App\Http\Controllers\Api\TestimonialsController;
use App\Http\Controllers\FirstpagesbladeController;
use App\Http\Controllers\FirstpagesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

    

Route::get('/home',[FirstpagesController::class,'index']);
Route::post('/home/store',[FirstpagesController::class,'store']);
Route::post('/home/update/{id}',[FirstpagesController::class,'update']);
Route::delete('/home/delete/{id}',[FirstpagesController::class,'destroy']);


Route::get('/testimonial',[TestimonialsController::class,'index']);
Route::post('/testimonial/store',[TestimonialsController::class,'store']);
Route::post('/testimonial/update/{id}',[TestimonialsController::class,'update']);
Route::delete('/testimonial/delete/{id}',[TestimonialsController::class,'destroy']);
