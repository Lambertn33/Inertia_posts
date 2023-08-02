<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Auth;
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
    Route::middleware('guest')->group(function () {
        Route::controller(RegisterController::class)->prefix('register')->group(function () {
            Route::get('/', 'create');
            Route::post('/', 'store');
        });
        Route::controller(LoginController::class)->prefix('login')->group(function () {
            Route::get('/', 'create')->name('login');
            Route::post('/', 'store');
        });
    });
    Route::post('logout', function () {
        Auth::logout();
        return redirect()->route('login');
    });
});

Route::middleware('auth')->group(function () {
    Route::controller(PostsController::class)->prefix('posts')->group(function () {
        Route::get('/', 'index');
        Route::get('/create', 'create');
        Route::post('/create', 'store');
        Route::delete('/destroy', 'destroy');
    });
});
