<?php

use App\Http\Controllers\DetailsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MailsController;
use App\Http\Controllers\ReplyController;
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
Route::get('/reply', [ReplyController::class, 'view']);
Route::get('/update', [UpdateController::class, 'index']);
Route::get('/details', [DetailsController::class, 'index']);
Route::get('/mails', [MailsController::class, 'index']);
Route::get('/mail', [MailsController::class, 'getMail']);
Route::get('/compose', function () {
    return view('reply');
});
Route::get('/forgot-password', function () {
    return view('forget');
});
Route::fallback(function () {
    return response()->view('404', [], 404);
});
