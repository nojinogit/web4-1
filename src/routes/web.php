<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\DetailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {return view('login');});

Route::get('/top',[TopController::class,'top'])->name('top');
Route::get('/search',[SearchController::class,'search'])->name('search');
Route::get('/areaSearch/{area}',[SearchController::class,'areaSearch'])->name('areaSearch');
Route::get('/detail',[DetailController::class,'detail'])->name('detail');
Route::get('/detail_photo',[DetailController::class,'detail_photo'])->name('detail_photo');
Route::get('/detail_comment',[DetailController::class,'detail_comment'])->name('detail_comment');