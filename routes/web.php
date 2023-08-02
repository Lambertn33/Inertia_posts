<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::prefix('auth')->group(function () {
    Route::controller(RegisterController::class)->prefix('register')->group(function () {
        Route::get('/', 'create');
    });
    Route::controller(LoginController::class)->prefix('login')->group(function () {
        Route::get('/', 'create');
    });
});
