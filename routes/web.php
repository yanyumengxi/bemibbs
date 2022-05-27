<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::prefix('account-group')->group(function () {
    Route::get('/add/{name}/{users?}',[IndexController::class, 'addUserGroup']);
    Route::get('/update/group/{name}/{users?}',[IndexController::class, 'updateUserGroup']);
});
Route::prefix('account')->group(function() {
    Route::get('/login', [LoginController::class, 'index'])->name('login_view');
    Route::post('/login', [LoginController::class, 'login'])->name('login');
    Route::get('/register', [RegisterController::class, 'index'])->name('register_view');
    Route::post('/register',  [RegisterController::class, 'register'])->name('register');
});
