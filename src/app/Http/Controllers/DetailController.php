<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function detail(Request $request){
    return view('/detail_main');
    }

    public function detailPhoto(Request $request){
    return view('/detail_photo');
    }

    public function detailComment(Request $request){
    return view('/detail_comment');
    }
}
