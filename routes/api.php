<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvestmentController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// List artigos
Route::get('investments', [InvestmentController::class, 'index']);

// List single artigo
Route::get('investment/{id}', [InvestmentController::class, 'show']);

// Create new artigo
Route::post('investment', [InvestmentController::class, 'store']);