@extends('layouts.sidebar_layouts')

@section('title','sidebar_reserve_calendar')

@section('css')
<link rel="stylesheet" href="{{ asset('css/shop_management/shop_basic_update.css')}}">
@endsection

@section('content_store_management')
<div class="update-wrap">
    <div class="title-area">
        <h3>店舗情報</h3>
    </div>
    <form action="">
        <div class="img-area">
            <div class="title">
                写真を編集する
            </div>
            <div class="img-box">
                <img src="{{asset('storage/shop/yakiniku.jpg')}}" alt="">
            </div>
        </div>
        <div class="information-area">
            <div class="title">
                お店の情報を編集する
            </div>
            <table>
                <tr>
                    <th>タイトル</th>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <th>内容</th>
                    <td><textarea name="" id="" cols="30" rows="10"></textarea></td>
                </tr>
            </table>
        </div>
        <div class="commitment-area">
            <div class="title">
                お店のこだわりを編集する
            </div>
            <table>
                <tr>
                    <th>こだわり</th>
                    <td><select name="" id=""></select></td>
                </tr>
            </table>
        </div>
        <div class="button-area">
            <button type="submit" class="button">変更する</button>
        </div>
    </form>
</div>


@endsection