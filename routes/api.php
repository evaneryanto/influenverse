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

Route::middleware('auth:sanctum')->get('/bio/brands',[\App\Http\Controllers\BrandCrontroller::class, 'index']);

Route::middleware(['auth:sanctum', 'can:check_influencer'])->get('/bio/influencers', [\App\Http\Controllers\InfluencerBioController::class, 'index']);
Route::middleware(['auth:sanctum', 'can:check_influencer'])->post('/bio/influencers', [\App\Http\Controllers\InfluencerBioController::class, 'store']);
Route::middleware(['auth:sanctum', 'can:check_influencer'])->post('/bio/influencers/{id}', [\App\Http\Controllers\InfluencerBioController::class, 'update']); // change to put method later
Route::middleware(['auth:sanctum', 'can:check_influencer'])->delete('/bio/influencers/{id}', [\App\Http\Controllers\InfluencerBioController::class, 'destroy']);

Route::middleware(['auth:sanctum', 'can:check_influencer'])->get('/influencers/portfolios', [\App\Http\Controllers\PortfolioController::class, 'index']);
Route::middleware(['auth:sanctum', 'can:check_influencer'])->post('/influencers/portfolios', [\App\Http\Controllers\PortfolioController::class, 'store']);
Route::middleware(['auth:sanctum', 'can:check_influencer'])->post('/influencers/portfolios/{id}', [\App\Http\Controllers\PortfolioController::class, 'update']);
Route::middleware(['auth:sanctum', 'can:check_influencer'])->delete('/influencers/portfolios/{id}', [\App\Http\Controllers\PortfolioController::class, 'destroy']);
