<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddController;
use App\Http\Controllers\LoginAPIController;
use App\Http\Controllers\AddAPIController;
use App\Http\Controllers\PostAPIController;
use App\Http\Controllers\RegisterAPIController;
use App\Http\Controllers\ReportAPIController;
use App\Http\Controllers\OwnerController;
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

Route::get('/adds',[AddAPIController::class,'list']);

Route::get('/showpost',[PostAPIController::class,'showpost']);

Route::post('/wantedpost',[PostAPIController::class,'wantedPostSubmit']);

Route::post('/report',[ReportAPIController::class,'reportSubmit']);

Route::post('/register',[RegisterAPIController::class,'register']);

Route::post('/login',[LoginAPIController::class,'login']);

Route::post('/APIreg',[OwnerController::class,'APIreg']);
