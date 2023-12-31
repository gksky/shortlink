<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\LinksController;

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

Route::middleware('auth:sanctum')->get('user', function (Request $request) {
    return $request->user();
});

Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::middleware('auth:sanctum')->post('logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['prefix' => 'links'], function() {
    Route::post('createShortLink', [LinksController::class, 'createShortLink']);
    Route::middleware('auth:sanctum')->get('getShortLinks', [LinksController::class, 'getShortLinks']);
    Route::middleware('auth:sanctum')->post('deleteShortLink', [LinksController::class, 'deleteShortLink']);
});