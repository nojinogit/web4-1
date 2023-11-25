<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopManagementController extends Controller
{
    public function shopManagement(Request $request){
    return view('/shop_management/main');
    }

    public function shopBasicUpdate(Request $request){
    return view('/shop_management/shop_basic_update');
    }

    public function shopImportantUpdate(Request $request){
    return view('/shop_management/shop_important_update');
    }

    public function shopImportantRequest(Request $request){
    return view('/shop_management/shop_important_request');
    }

    public function reserveCalender(Request $request){
    return view('/shop_management/reserve_calendar');
    }

    public function reserveDetail(Request $request){
    return view('/shop_management/reserve_detail');
    }
}
