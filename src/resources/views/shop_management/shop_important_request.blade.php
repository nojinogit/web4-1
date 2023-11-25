@extends('layouts.sidebar_layouts')

@section('title','sidebar_shop_important_update')

@section('css')
<link rel="stylesheet" href="{{ asset('css/shop_management/shop_important_update.css')}}">
@endsection

@section('content_store_management')
<div class="update-wrap">
    <div class="title-area">
        <h3>店舗重要情報変更依頼</h3>
    </div>
    <div class="information-area">
        <div class="information-top">
            <h4>店舗重要情報変更依頼</h4>
        </div>
        <div>
            <table>
                <form action="" id="form">
                    <tr>
                        <th>店舗名</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>電話番号</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>郵便番号</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>住所</th>
                        <td></td>
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
            <a class="a" href="">申請する</a>
        </div>
    </div>
</div>


@endsection