<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreManagementController extends Controller
{
    public function storeManagement(Request $request){
    return view('/store_management/main');
    }
}
