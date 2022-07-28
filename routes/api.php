<?php

use App\Http\Controllers\Api\ApiController;
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
|Rot
*/


Route::get('/users',[ApiController::class,'index']);
Route::get('/users/{id}',[ApiController::class,'user']);
Route::delete('/users/{id}',[ApiController::class,'delete']);
Route::post('/users/create',[ApiController::class,'create']);

