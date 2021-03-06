<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndoorController;
use App\Http\Controllers\OutdoorController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('start');
});

Auth::routes();





Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group([
    'middleware' => 'auth',
], function () {
Route::resource('about_me',AboutMeController::class );
Route::resource('contact',ContactController::class );
Route::resource('indoor',IndoorController::class );
Route::resource('outdoor',OutdoorController::class );
});
