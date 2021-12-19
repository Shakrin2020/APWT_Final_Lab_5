<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AddController;
use App\Http\Controllers\OderController;
use App\Http\Controllers\ReportController;

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

Route::get('/', [PagesController::class,'home'])->name('home');

// owner routes

Route::get('/owner/create',[OwnerController::class,'create'])->name('owners.create') ;
Route::post('/owner/create',[OwnerController::class,'createSubmit'])->name('owners.create');
Route::get('/owner/dash',[OwnerController::class,'details'])->name('owners.ownerDash')->middleware('ValidOwner');

Route::get('/owner/edit/{h_id}/{h_uname}',[OwnerController::class,'edit']);
Route::post('/owner/edit',[OwnerController::class,'editSubmit'])->name('owners.edit');
Route::get('/owner/delete/{h_id}/{h_uname}',[OwnerController::class,'delete']);

// owner adds routes

Route::get('/adds/list',[AddController::class,'addList'])->name('adds.addlist');

// owner order routes

Route::post('/order',[OrderController::class,'addtoorder'])->name('order.ownerOrder');

// owner report routes

Route::get('/report',[ReportController::class,'report'])->name('owners.report');
Route::post('/report',[ReportController::class,'reportSubmit'])->name('owners.report');


// owner post routes

Route::get('/wantedpost',[PostController::class,'wantedPost'])->name('owners.wantedpost') ;
Route::post('/wantedpost',[PostController::class,'wantedPostSubmit'])->name('owners.wantedpost');
Route::get('/showpost',[PostController::class,'showPost'])->name('owners.showPost') ;

//login routes
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'loginSubmit'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');