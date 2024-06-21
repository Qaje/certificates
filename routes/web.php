<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('login');
});

Route::get('/perfil',[UserController::class, 'index']);
Route::get('users', [UserController::class, 'index'])->name('users');
Route::post('userStore', [UserController::class,'store']);
Route::post('userEdit', [UserController::class,'edit']);


Route::get('saludo',[HomeController::class, 'saludo']);
Route::get('inicio',[HomeController::class, 'inicio']);

// Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::resource("user","UserController");
// Route::resource("user","UserController");
