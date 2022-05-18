<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\DistController;
use App\Http\Controllers\API\ProizvodController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('distributer', [DistController::class, 'index']);
Route::get('distributer/{distributer}', [DistController::class, 'show']);
Route::get('proizvod', [ProizvodController::class, 'index']);
Route::get('proizvod/{proizvod}', [ProizvodController::class, 'show']);
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);


Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::put('distributer/{distributer}', [DistController::class, 'update']);
    Route::delete('distributer/{distributer}', [DistController::class, 'destroy']);
    Route::post('logout', [AuthController::class, 'logout']);
});
