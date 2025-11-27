<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('component');
});
Route::post('/', [AuthController::class, 'rememberMe']);


Route::get('/register', [AuthController::class, 'viewRegister'])->name('AuthController.viewRegister');
Route::get('/login', [AuthController::class, 'viewLogin'])->name('AuthController.viewLogin');

Route::get('/user-view', [AuthController::class, 'viewUser'])->name('AuthController.viewUser');

Route::post('/post-register', [AuthController::class, 'postRegister']);
Route::post('/post-login', [AuthController::class, 'postLogin']);
Route::post('/post-logout', [AuthController::class, 'postLogout']);
