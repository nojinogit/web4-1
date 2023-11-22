@extends('layouts.header_layouts')

@section('title','management_shop_create')

@section('css')
<link rel="stylesheet" href="{{ asset('css/management/shop_create.css')}}">
@endsection

@section('content')

<div class="shop_create-wrap">
    <div class="title-area">
        <h3>店舗登録</h3>
    </div>
    <div class="information-area">
        <div class="information-top">
            <h4>店舗情報</h4>
        </div>
        <div>
            <table>
                <form action="" id="form">
                    <tr>
                        <th>店舗名</th>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <th>電話番号</th>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <th>郵便番号</th>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <th>住所</th>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <th>営業時間</th>
                        <td class="two-input"><label for="">開始</label><input type="text"><label for="">終了</label><input type="text"></td>
                    </tr>
                    <tr>
                        <th>定休日</th>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <th>ジャンル</th>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <th>予算：昼食</th>
                        <td class="two-input"><label for="">min</label><input type="text"><label for="">max</label><input type="text"></td>
                    </tr>
                    <tr>
                        <th>予算：夕食</th>
                        <td class="two-input"><label for="">min</label><input type="text"><label for="">max</label><input type="text"></td>
                    </tr>
                </form>
            </table>
        </div>
        <div class="button-area">
            <button type="submit" form="form" class="button">登録</button>
        </div>
    </div>
</div>

@endsection