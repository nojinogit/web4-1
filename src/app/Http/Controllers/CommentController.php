<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function comment(Request $request){
    return view('/comment/comment');
    }
}
