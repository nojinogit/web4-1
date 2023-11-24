<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopManagementController extends Controller
{
    public function shopManagement(Request $request){
    return view('/shop_management/main');
    }

    public function reserveCalender(Request $request){
    return view('/shop_management/reserve_calendar');
    }

    public function reserveDetail(Request $request){
    return view('/shop_management/reserve_detail');
    }
}
