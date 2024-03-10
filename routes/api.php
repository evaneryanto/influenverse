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

Route::post('/login', [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'store']);
Route::middleware('auth:sanctum')->post('/logout', [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'destroy']);
Route::middleware('auth:sanctum')->get('/bio/influencers', [\App\Http\Controllers\InfluencerBioController::class, 'index']);
Route::middleware('auth:sanctum')->post('/bio/influencers', [\App\Http\Controllers\InfluencerBioController::class, 'store']);
Route::middleware('auth:sanctum')->post('/bio/influencers/{id}', [\App\Http\Controllers\InfluencerBioController::class, 'update']); // change to put method later
Route::middleware('auth:sanctum')->delete('/bio/influencers/{id}', [\App\Http\Controllers\InfluencerBioController::class, 'destroy']);
Route::middleware('auth:sanctum')->get('/bio/brands',[\App\Http\Controllers\BrandCrontroller::class, 'index']);