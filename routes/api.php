<?php

use App\Http\Controllers\Api\Auth\AuthenticationController;
use App\Http\Controllers\Api\User\PackageController;
use App\Http\Controllers\Api\User\ProfileController;
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


Route::post('/register', [AuthenticationController::class, 'register']);
Route::post('/login', [AuthenticationController::class, 'login']);
Route::middleware('auth:sanctum')->group(function(){
    Route::post('/logout', [AuthenticationController::class, 'logout']);
});


Route::prefix('/user')->middleware('auth:sanctum')->group(function(){

    Route::post('/', [ProfileController::class, 'index']);

    Route::post('/update', [ProfileController::class, 'updateUser']);

    Route::prefix('package')->group(function(){
        Route::post('/', [PackageController::class, 'index']);
    });

});
