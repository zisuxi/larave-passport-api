<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;

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

Route::post('signUp', [SessionController::class, 'store']);
Route::post('login', [SessionController::class, 'login']);

// Apply auth middleware to protect the profile route
Route::middleware('auth:api')->post('profile', [SessionController::class, 'profile']);
