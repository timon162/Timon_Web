<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'viewRegister'])->name('AuthController.viewRegister');
Route::get('/login', [AuthController::class, 'viewLogin'])->name('AuthController.viewLogin');

Route::post('/post-register', [AuthController::class, 'postRegister']);
