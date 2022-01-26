<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\PortController;
use App\Http\Controllers\ServerController;
use App\Http\Controllers\UserController;

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
// Public Route 
Route::get('/server', [ServerController::class, 'index']);
Route::get('/port', [PortController::class, 'index']);
Route::get('/datafb', [DataController::class, 'facebook']);
Route::get('/datatw', [DataController::class, 'twitter']);

// Public Route User
Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});