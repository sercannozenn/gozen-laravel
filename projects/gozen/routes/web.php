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

Route::get('/', function () {
    return view('welcome');
});


Route::get("/register", function (){
   dd("register");
})->name("register");

Route::get("/login", function (){
    dd("login");
})->name("login");


Route::get("/home", [\App\Http\Controllers\HomeController::class, "index"]);
