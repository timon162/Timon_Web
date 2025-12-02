<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

Route::get('/', [AuthController::class, 'viewLogin'])->name('login');
Route::post('/', [AuthController::class, 'rememberMe']);

Route::get('/register', [AuthController::class, 'viewRegister'])->name('AuthController.viewRegister');

Route::post('/post-register', [AuthController::class, 'postRegister']);
Route::post('/post-login', [AuthController::class, 'postLogin']);
Route::post('/post-logout', [AuthController::class, 'postLogout']);


Route::prefix('/user')->middleware('checkAuth')->group(function () {
    Route::get('/', [UserController::class, 'userView'])->name('user');
});

Route::prefix('/admin')->middleware('admin')->group(function () {
    Route::get('/', [UserController::class, 'adminView']);
});

Route::post('/post-product', [ProductController::class, 'postProduct']);
