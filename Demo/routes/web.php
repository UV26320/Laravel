<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});


// /================================

// first way open route with controller
// Route::get('/about',function(){
//     return view('about');
// });

// second way open route (without controller parameters)
Route::view('/about','about');


// /================================

// Dynamic Parameter
Route::get('/contact/{name}', function ($name) {
    return view('contact', ['name' => $name]);
});


// redirecting in route

// route::redirect('/','/about');


//================================================================= ================================

// Controllers

Route::get('user',[UserController::class,'getUser']);

Route::get('user/{name}',[UserController::class,'getUserName']);

Route::get('admin',[UserController::class,'loginUser']);


Route::view('user-form','user-form');
Route::post('addUser',[UserController::class,'addUser']);


