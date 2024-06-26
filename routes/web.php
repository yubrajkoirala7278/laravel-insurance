<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

// ============frontend================
// home-page
Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('contact-us', [ContactController::class, 'index']);
Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');


// ============admin dashboard============
Route::group(['middleware'=>['web','checkAdmin']],function(){
    Route::prefix('admin')->group(function(){
        require __DIR__.'/admin.php';
    });
});

// ============Auth==========================
// login user/admin
Route::get('/login',[AuthController::class,'loadLogin']);
Route::post('/login',[AuthController::class,'userLogin'])->name('user.login');

// logout user/admin
Route::get('/logout',[AuthController::class,'logout'])->name('logout');

// forget password
Route::get('/forget-password',[AuthController::class,'forgetPasswordLoad']);
Route::post('/forget-password',[AuthController::class,'forgetPassword'])->name('forgetPassword');

// reset password
Route::get('/reset-password',[AuthController::class,'resetPasswordLoad']);
Route::post('/reset-password',[AuthController::class,'resetPassword'])->name('resetPassword');

// ==========================================