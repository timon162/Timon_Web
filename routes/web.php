<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

Route::get('/', [AuthController::class, 'viewComponent'])->name('AuthController.viewComponent');

Route::post('/', [AuthController::class, 'rememberMe']);


Route::get('/register', [AuthController::class, 'viewRegister'])->name('AuthController.viewRegister');
Route::get('/login', [AuthController::class, 'viewLogin'])->name('AuthController.viewLogin');

Route::post('/post-register', [AuthController::class, 'postRegister']);
Route::post('/post-login', [AuthController::class, 'postLogin']);
Route::post('/post-logout', [AuthController::class, 'postLogout']);

Route::get('/user', [UserController::class, 'userView'])->name('user');

Route::prefix('/admin')->middleware('admin')->group(function () {
    Route::get('/', [UserController::class, 'adminView']);
});
Route::post('/post-product', [ProductController::class, 'postProduct']);
