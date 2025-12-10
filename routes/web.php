<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Products\ProductController;

Route::get('/', [AuthController::class, 'viewLogin'])->name('login');
Route::post('/', [AuthController::class, 'rememberMe']);

Route::get('/register', [AuthController::class, 'viewRegister'])->name('AuthController.viewRegister');

Route::post('/post-register', [AuthController::class, 'postRegister']);
Route::post('/post-login', [AuthController::class, 'postLogin']);
Route::post('/post-logout', [AuthController::class, 'postLogout']);

Route::prefix('/user')->middleware('checkAuth')->group(function () {
    Route::get('/', [UserController::class, 'userView'])->name('user');
    Route::get('/detail-product/{id}', [ProductController::class, 'viewDetailProduct']);
});

Route::prefix('/admin')->middleware('admin')->group(function () {
    Route::get('/', [UserController::class, 'adminView'])->name('admin-view');
    Route::get('/create-product', [AdminProductController::class, 'viewAdminCreateProduct'])->name('create-product');
    Route::get('/infor-product', [AdminProductController::class, 'viewAdminProduct']);
    Route::get('/detail-product/{id}', [ProductController::class, 'viewDetailProduct'])->name('product.detail');
    Route::get('/information-product', [AdminProductController::class, 'viewInformationProduct'])->name('information-product');
});

Route::post('/post-product', [AdminProductController::class, 'postProduct']);

Route::post('/create-product', [AdminProductController::class, 'createNewProduct']);

Route::post('/post-limit-product', [AdminProductController::class, 'postLimitProduct']);



Route::post('/detail-product', [ProductController::class, 'viewDetailProduct']);
