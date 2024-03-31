<?php

use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard',[HomeController::class,'index'])->name('admin.dashboard');
Route::get('/contact',[ContactController::class,'index'])->name('admin.contact');
Route::delete('/contact/destroy/{id}',[ContactController::class,'destroy'])->name('contact.destroy');
Route::get('/contact/{id}',[ContactController::class,'show'])->name('contact.show');


// ===========Users==================
// index
Route::get('/user',[UserController::class,'index'])->name('admin.user');
// register
Route::get('/register',[AuthController::class,'loadRegister']);
Route::post('/register',[AuthController::class,'userRegister'])->name('user.register');
