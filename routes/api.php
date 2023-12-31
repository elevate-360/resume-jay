<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\UpdateController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('contact', [ContactController::class, 'contact']);
Route::post('data', [UpdateController::class, 'updateData']);
Route::post('reply', [ReplyController::class, 'reply']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
