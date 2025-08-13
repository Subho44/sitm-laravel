<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrdoctController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', fn()=> 'hello all students');
Route::get('/submit', fn()=> 'all data submit');

//about page access
Route::view('/about','about',['city'=>'kolkata']);
//contact page
Route::view('/contact','contact',['phn'=>'6289619338']);
//product page
Route::get('/product',[PrdoctController::class,'show']);

