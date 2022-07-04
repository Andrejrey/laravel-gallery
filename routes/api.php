<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiOutdoorController;
use App\Http\Controllers\Api\ApiIndoorController;
use App\Http\Controllers\Api\ApiAboutMeController;
use App\Http\Controllers\Api\ApiContactController;
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

Route::get('outdoor', [ApiOutdoorController::class, 'index']);
Route::get('indoor', [ApiIndoorController::class, 'index']);
Route::get('about_me', [ApiAboutMeController::class, 'index']);
Route::post('contact', [ApiContactController::class, 'store']);
