<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\UpdateController;
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

Route::get('/', [ResumeController::class, 'index']);
Route::get('/login', [LoginController::class, 'view'])->name('login');
Route::post('/login/submit', [LoginController::class, 'login']);
Route::get('/index', [IndexController::class, 'index'])->name('index');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/update', [UpdateController::class, 'index']);
Route::get('/forgot-password', function () {
    return view('forget');
});
Route::fallback(function () {
    return response()->view('404', [], 404);
});
