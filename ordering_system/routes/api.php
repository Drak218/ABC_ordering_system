<?php

use App\Http\Controllers\UserController; 
use App\Http\Controllers\OrderController; 

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('users', UserController::class); 
Route::apiResource('orders', OrderController::class); 
