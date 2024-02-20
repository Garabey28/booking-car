<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('location')->group(function (){
   Route::get('/', [\App\Http\Controllers\LocationConrollers::class, 'index']);
   Route::post('/store', [\App\Http\Controllers\LocationConrollers::class, 'store']);
});
Route::prefix('cars')->group(function (){
    Route::get('/', [\App\Http\Controllers\CarsController::class, 'index']);
    Route::post('/store', [\App\Http\Controllers\CarsController::class, 'store']);
});
