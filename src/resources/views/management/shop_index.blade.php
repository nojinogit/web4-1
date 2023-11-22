@extends('layouts.header_layouts')

@section('title','management_shop_index')

@section('css')
<link rel="stylesheet" href="{{ asset('css/management/shop_index.css')}}">
@endsection

@section('content')

<div class="shop_index-wrap">
    <div class="title-area">
        <h3>店舗一覧</h3>
    </div>
    <div class="information-area">
        <div>
            <table>
                <tr>
                    <th></th>
                    <th>店舗名</th>
                    <th>住所</th>
                    <th>電話番号</th>
                    <th>詳細</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>焼肉三昧</td>
                    <td>東京都新宿区</td>
                    <td>000-000-0000</td>
                    <td><a href="">詳細へ</a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>焼肉三昧</td>
                    <td>東京都新宿区</td>
                    <td>000-000-0000</td>
                    <td><a href="">詳細へ</a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>焼肉三昧</td>
                    <td>東京都新宿区</td>
                    <td>000-000-0000</td>
                    <td><a href="">詳細へ</a></td>
                </tr>
        </table>
        </div>
    </div>
</div>

@endsection