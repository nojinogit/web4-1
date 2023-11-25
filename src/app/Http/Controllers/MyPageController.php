<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyPageController extends Controller
{
    public function myPage(Request $request){
    return view('/mypage/main');
    }

    public function profile(Request $request){
    return view('/mypage/profile');
    }

    public function reserveIndex(Request $request){
    return view('/mypage/reserve_index');
    }

    public function reserveConfirm(Request $request){
    return view('/mypage/reserve_confirm');
    }

    public function reserveUpdate(Request $request){
    return view('/mypage/reserve_update');
    }
}
