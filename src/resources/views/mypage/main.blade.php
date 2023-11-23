@extends('layouts.header_layouts')

@section('title','myPage_main')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage/main.css')}}">
@endsection

@section('content')

<div class="myPage-wrap">
    <div class="profile-area">
        <div class="img-area">
            <img src="{{asset('storage/sample/pietro-de-grandi-T7K4aEPoGGk-unsplash.jpg')}}" alt="" class="profile-img">
        </div>
        <div class="name-area">
            <h3>nojinoさん</h3>
            <div class="profile-a-box">
                <a href="{{route('profile')}}" class="profile-a">プロフィールを編集</a>
            </div>
        </div>
    </div>
    <div class="button-area">
        <button class="button">行ったお店</button>
        <button class="button second">保存したお店</button>
        <a class="a" href="{{route('reserve_index')}}">予約一覧</a>
    </div>
    <div class="shop-wrap">
        <div class="shop-area">
            <div class="shop-img-area">
                <img src="{{asset('storage/shop/yakiniku.jpg')}}" alt="" class="shop-img">
            </div>
            <div class="shop-main-area">
                <a href="{{route('detail')}}"><h3>焼肉三昧</h3></a>
                <p class="result-rating-rate">
                    <span class="star5_rating" data-rate="3.5"></span>
                    <span class="number_rating">3.5</span>
                </p>
                <div class="shop-budget-area">
                    <div class="shop-budget-box"><img src="{{asset('storage/sample/太陽.svg')}}" alt="" class="svg">￥1,000～￥2,000</div>
                    <div class="shop-budget-box"><img src="{{asset('storage/sample/月.svg')}}" alt="" class="svg">￥3,000～￥5,000</div>
                </div>
                <div class="shop-title-area">
                    <p class="shop-title-area-p">このお店は最高の焼肉三昧！</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection