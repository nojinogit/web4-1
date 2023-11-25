@extends('layouts.detail_layouts')

@section('title','detail_main')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail/main.css')}}">
<link rel="stylesheet" href="{{ asset('css/layouts/detail_layouts.css')}}">
@endsection

@section('content_detail')
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
        </div>
        <div class="photo-area">
            <h3 class="h3">投稿写真</h3>
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
                <form action="{{route('comment')}}"><button class="comment-button">投稿する</button></form>
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