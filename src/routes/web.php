<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;

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
Route::get('/areaSearch/{area}',[TopController::class,'areaSearch'])->name('areaSearch');