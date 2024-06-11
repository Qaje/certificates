<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('', function () {
//     return view('welcome');
// });
Route::get('users', [UserController::class, 'index'])->name('users');


Route::get('saludo',[HomeController::class, 'saludo']);

Route::get('inicio',[HomeController::class, 'inicio']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
