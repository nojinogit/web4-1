<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementController extends Controller
{
    public function management(Request $request){
    return view('/management');
    }

    public function managementShopCreate(Request $request){
    return view('/management_shop_create');
    }
}
