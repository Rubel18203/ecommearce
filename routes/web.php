<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\usersController;





Route::get('/', function () {
    return view('Home');
});
Route::get('/product',function(){
   return view('product');
});
Route::get('/Register',function(){
    return view('Register');
});
Route::resource('/products',ProductsController::class);
Route::resource('/users',usersController::class);
