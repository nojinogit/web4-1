<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Reserve;
use Carbon\Carbon;

class ReserveController extends Controller
{
    public function reserve(Request $request){
    $reserve=$request->only(['user_id','shop_id','number_of_people','date','time']);
    $reserve_number = Str::random(10);
    $reserve['reserve_number'] = $reserve_number;
    Reserve::create($reserve);

    $request->session()->flash('message', '予約しました');

    return redirect('/detail');
    }

    public function reserveData(Request $request){
    $reservations = Reserve::selectRaw('date, count(*) as reserve_count')
    ->where('shop_id', $request->shop_id)
    ->where('date', '>=', Carbon::tomorrow())
    ->groupBy('date')
    ->get();
    return response()->json(['reservations' => $reservations]);
    }

}
