<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ManagementController;

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
Route::get('/detail_photo',[DetailController::class,'detailPhoto'])->name('detail_photo');
Route::get('/detail_comment',[DetailController::class,'detailComment'])->name('detail_comment');
Route::get('/management',[ManagementController::class,'management'])->name('management');
Route::get('/management_shop_index',[ManagementController::class,'managementShopIndex'])->name('management_shop_index');
Route::get('/management_shop_request_index',[ManagementController::class,'managementShopRequestIndex'])->name('management_shop_request_index');
Route::get('/management_shop_create',[ManagementController::class,'managementShopCreate'])->name('management_shop_create');
Route::get('/management_shop_update',[ManagementController::class,'managementShopUpdate'])->name('management_shop_update');