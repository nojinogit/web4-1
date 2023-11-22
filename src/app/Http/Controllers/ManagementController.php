<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementController extends Controller
{
    public function management(Request $request){
    return view('/management/main');
    }

    public function managementShopIndex(Request $request){
    return view('/management/shop_index');
    }

    public function managementShopCreate(Request $request){
    return view('/management/shop_create');
    }

    public function managementShopRequestIndex(Request $request){
    return view('/management/shop_request_index');
    }

    public function managementShopUpdate(Request $request){
    return view('/management/shop_update');
    }


}
