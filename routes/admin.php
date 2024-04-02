<?php

use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard',[HomeController::class,'index'])->name('admin.dashboard');
Route::get('/contact',[ContactController::class,'index'])->name('admin.contact');
Route::delete('/contact/destroy/{id}',[ContactController::class,'destroy'])->name('contact.destroy');
Route::get('/contact/{id}',[ContactController::class,'show'])->name('contact.show');
Route::get('/testimonial',[TestimonialController::class,'index'])->name('admin.testimonials.index');
Route::get('/testimonial/create',[TestimonialController::class,'create'])->name('testimonials.create');
Route::post('/testimonial/store',[TestimonialController::class,'store'])->name('testimonials.store');
Route::delete('/testimonial/destroy/{testimonial}',[TestimonialController::class,'destroy'])->name('testimonials.destroy');
Route::get('/testimonial/show/{testimonial}',[TestimonialController::class,'show'])->name('testimonials.show');
Route::get('/testimonial/{testimonial}/edit',[TestimonialController::class,'edit'])->name('testimonials.edit');
Route::put('/testimonial/update/{testimonial}',[TestimonialController::class,'update'])->name('testimonials.update');




// ===========Users==================
// index
Route::get('/user',[UserController::class,'index'])->name('admin.user');
Route::delete('/user/destroy/{id}',[UserController::class,'destroy'])->name('user.destroy');

// register
Route::get('/register',[AuthController::class,'loadRegister']);
Route::post('/register',[AuthController::class,'userRegister'])->name('user.register');
