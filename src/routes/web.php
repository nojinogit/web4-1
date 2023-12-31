<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\ShopManagementController;
use App\Http\Controllers\MyPageController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ReserveController;

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

Route::post('/reserve',[ReserveController::class,'reserve'])->name('reserve');
Route::get('/reserveData',[ReserveController::class,'reserveData'])->name('reserveData');

Route::get('/management',[ManagementController::class,'management'])->name('management');
Route::get('/management_shop_index',[ManagementController::class,'managementShopIndex'])->name('management_shop_index');
Route::get('/management_shop_request_index',[ManagementController::class,'managementShopRequestIndex'])->name('management_shop_request_index');
Route::get('/management_shop_create',[ManagementController::class,'managementShopCreate'])->name('management_shop_create');
Route::get('/management_shop_update',[ManagementController::class,'managementShopUpdate'])->name('management_shop_update');
Route::get('/management_user_create',[ManagementController::class,'managementUserCreate'])->name('management_user_create');

Route::get('/myPage',[MyPageController::class,'myPage'])->name('myPage');
Route::get('/profile',[MyPageController::class,'profile'])->name('profile');
Route::get('/reserve_index',[MyPageController::class,'reserveIndex'])->name('reserve_index');
Route::get('/reserve_confirm',[MyPageController::class,'reserveConfirm'])->name('reserve_confirm');
Route::get('/reserve_update',[MyPageController::class,'reserveUpdate'])->name('reserve_update');

Route::get('/shop_management',[ShopManagementController::class,'shopManagement'])->name('shop_management');
Route::get('/shop_basic_update',[ShopManagementController::class,'shopBasicUpdate'])->name('shop_basic_update');
Route::get('/shop_important_update',[ShopManagementController::class,'shopImportantUpdate'])->name('shop_important_update');
Route::get('/shop_important_request',[ShopManagementController::class,'shopImportantRequest'])->name('shop_important_request');
Route::get('/reserve_calender',[ShopManagementController::class,'reserveCalender'])->name('reserve_calender');
Route::get('/reserve_today',[ShopManagementController::class,'reserveToday'])->name('reserve_today');
Route::get('/reserve_detail',[ShopManagementController::class,'reserveDetail'])->name('reserve_detail');
Route::get('/official_photo',[ShopManagementController::class,'officialPhoto'])->name('official_photo');

Route::get('/comment',[CommentController::class,'comment'])->name('comment');