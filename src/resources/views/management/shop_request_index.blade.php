@extends('layouts.header_layouts')

@section('title','management_shop_request_index')

@section('css')
<link rel="stylesheet" href="{{ asset('css/management/shop_request_index.css')}}">
@endsection

@section('content')

<div class="shop_request_index-wrap">
    <div class="title-area">
        <h3>申請一覧</h3>
    </div>
    <div class="button-area">
        <button class="button">未承認</button>
        <button class="button second">承認済み</button>
    </div>
    <div class="information-area">
        <div>
            <table>
                <tr>
                    <th></th>
                    <th>店舗名</th>
                    <th>申請内容</th>
                    <th>申請日時</th>
                    <th>詳細</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>焼肉三昧</td>
                    <td>時間変更</td>
                    <td>2023/11/22</td>
                    <td><a href="/management_shop_update">詳細へ</a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>焼肉三昧</td>
                    <td>時間変更</td>
                    <td>2023/11/22</td>
                    <td><a href="">詳細へ</a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>焼肉三昧</td>
                    <td>時間変更</td>
                    <td>2023/11/22</td>
                    <td><a href="">詳細へ</a></td>
                </tr>
        </table>
        </div>
    </div>
</div>

@endsection