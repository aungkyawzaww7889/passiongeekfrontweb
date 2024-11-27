<?php

use App\Http\Controllers\Api\FirstpagesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::get('/firstpage',[FirstpagesController::class,'index']);
// Route::resource('/firstpage',FirstpagesController::class);
// Route::resource('/firstpage/store',FirstpagesController::class);
// Route::resource('/firstpage/update/{id}',FirstpagesController::class);


Route::get('/firstpage',[FirstpagesController::class,'index']);
Route::post('/firstpage/store',[FirstpagesController::class,'store']);
Route::post('/firstpage/update/{id}',[FirstpagesController::class,'update']);
Route::delete('/firstpage/delete/{id}',[FirstpagesController::class,'destroy']);


