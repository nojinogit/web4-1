@extends('layouts.header_layouts')

@section('title','myPage_reserve_confirm')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage/reserve_confirm.css')}}">
@endsection

@section('content')

<div class="reserve_confirm-wrap">
    <div class="title-area">
        <h3>ご予約内容の確認・変更</h3>
    </div>
    <div class="reserve_title">
        ご予約情報
    </div>
    <div>
        <table>
            <tr>
                <th>ご予約ステータス</th>
                <td>
                    来店済み
                </td>
            </tr>
            <tr>
                <th>ご予約番号</th>
                <td>
                    aaaaaaa
                </td>
            </tr>
            <tr>
                <th>レストラン名</th>
                <td>
                    焼肉三昧
                </td>
            </tr>
            <tr>
                <th>来店人数</th>
                <td>
                    4名
                </td>
            </tr>
            <tr>
                <th>予約日</th>
                <td>2023年8月18日</td>
            </tr>
            <tr>
                <th>予約時間</th>
                <td>18：00</td>
            </tr>
        </table>
    </div>
    <div class="a-area">
            <a class="a" href="{{route('reserve_update')}}">予約変更</a>
            <a class="a" href="">予約をキャンセルする</a>
    </div>
</div>



@endsection