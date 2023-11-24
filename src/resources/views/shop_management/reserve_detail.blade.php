@extends('layouts.sidebar_layouts')

@section('title','sidebar_reserve_calendar')

@section('css')
<link rel="stylesheet" href="{{ asset('css/shop_management/reserve_detail.css')}}">
@endsection

@section('content_store_management')
<div class="reserve-wrap">
    <div class="title-area">
        <h3>予約内容</h3>
    </div>
    <div class="table-area">
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
</div>


@endsection