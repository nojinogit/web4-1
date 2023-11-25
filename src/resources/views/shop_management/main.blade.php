@extends('layouts.sidebar_layouts')

@section('title','sidebar_main')

@section('css')
<link rel="stylesheet" href="{{ asset('css/shop_management/main.css')}}">
@endsection

@section('content_store_management')
<div class="title-wrap">
    <div class="title-area">
    <h3>焼肉三昧</h3>
    <p class="result-rating-rate">
        <span class="star5_rating" data-rate="3.5"></span>
        <span class="number_rating">3.5</span>
    </p>
    </div>
</div>
<div class="main-left">
    <div class="genre-area">
        <p><span class="bold">ジャンル：</span>焼肉</p>
    </div>
    <div class="budget-holiday-area">
        <div class="budget-box">
            <span class="bold">予算：</span>
            <img src="{{asset('storage/sample/太陽.svg')}}" alt="" class="svg">￥1,000～￥2,000&emsp;
        </div>
        <div class="budget-box">
            <img src="{{asset('storage/sample/月.svg')}}" alt="" class="svg">￥3,000～￥5,000&emsp;
        </div>
        <div>
            <span class="bold">定休日：</span>水曜日
        </div>
    </div>
    <div class="img-area">
        <img src="{{asset('storage/shop/yakiniku.jpg')}}" alt="" class="shop-img">
    </div>
    <div class="overview-area">
        <p class="overview-area-p">このお店は最高の焼肉三昧！</p>
    </div>
    <div class="update-button-area"><a href="{{route('shop_basic_update')}}" class="update-button">修正する</a></div>
    <div class="basic_information-area">
        <h3 class="h3">店舗基本情報</h3>
        <table>
            <tr>
                <th>店名</th>
                <td>焼肉三昧</td>
            </tr>
            <tr>
                <th>ジャンル</th>
                <td>焼肉</td>
            </tr>
            <tr>
                <th>住所</th>
                <td>東京都新宿区</td>
            </tr>
            <tr>
                <th>電話番号</th>
                <td>000-111-1111</td>
            </tr>
            <tr>
                <th>営業時間</th>
                <td>11：00～22：00　定休日：不定休</td>
            </tr>
            <tr>
                <th>予算</th>
                <td>昼￥1,000～￥2,000　夜￥1,000～￥2,000</td>
            </tr>
        </table>
        <div class="update-button-area"><a href="{{route('shop_important_update')}}" class="update-button">修正する</a></div>
    </div>
    <div class="photo-area">
        <h3 class="h3">公式写真</h3>
        <a href="{{route('official_photo')}}" class="update-button">投稿する</a>
        <div class="photo-img-area">
            <img src="{{asset('storage/shop/yakiniku.jpg')}}" alt="" class="photo-img">
            <img src="{{asset('storage/shop/yakiniku.jpg')}}" alt="" class="photo-img">
            <img src="{{asset('storage/shop/yakiniku.jpg')}}" alt="" class="photo-img">
            <img src="{{asset('storage/shop/yakiniku.jpg')}}" alt="" class="photo-img">
            <img src="{{asset('storage/shop/yakiniku.jpg')}}" alt="" class="photo-img">
            <img src="{{asset('storage/shop/yakiniku.jpg')}}" alt="" class="photo-img">
            <img src="{{asset('storage/shop/yakiniku.jpg')}}" alt="" class="photo-img">
            <img src="{{asset('storage/shop/yakiniku.jpg')}}" alt="" class="photo-img">
            <img src="{{asset('storage/shop/yakiniku.jpg')}}" alt="" class="photo-img">
            <img src="{{asset('storage/shop/yakiniku.jpg')}}" alt="" class="photo-img">
        </div>
    </div>
    <div class="comment-area">
        <div class="comment-title-area">
            <h3 class="h3">口コミ</h3>
            <button class="comment-button">口コミをピックアップする</button>
        </div>
        <div class="comment-box">
            <div class="comment-user-area">
                <img src="{{asset('storage/sample/noimage.jpg')}}" alt="" class="user-img">
                <p>名無し</p>
            </div>
            <div class="comment-main-area">
                <div class="comment-left">
                    <p class="result-rating-rate">
                    <span class="star5_rating" data-rate="4"></span>
                    <span class="number_rating">4</span>
                </p>
                <p class="comment-title">
                    すごくいいよ焼肉三昧
                </p>
                <p>
                    このお店は最高の焼肉三昧！
                </p>
                </div>
                <div class="comment-right">
                    <img src="{{asset('storage/shop/yakiniku.jpg')}}" alt="" class="comment-img">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection