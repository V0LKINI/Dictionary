<?php

use App\Http\Controllers\Site\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('login', [AuthController::class, 'login'])->middleware('guest');
Route::post('register', [AuthController::class, 'register'])->middleware('guest');

Route::middleware('auth:sanctum')->group(function () {
    //There will be future interaction with the dictionary and the user
});
