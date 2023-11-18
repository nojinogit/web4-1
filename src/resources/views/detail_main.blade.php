@extends('layouts.layouts')

@section('title','detail_main')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail_main.css')}}">
@endsection

@section('content')

<div class="search-wrap">
    <div class="search">
        <div class="search-area flex__item">
            <form method="get" class="form flex__item" action="{{route('search')}}">
                @auth
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                @endauth
                <div class="input-area">
                    <input type="search" class="input" placeholder="エリア" name="area">
                </div>
                <div class="input-area" id="genre">
                    <input type="search" class="input" placeholder="ジャンル" name="area">
                </div>
                <div class="input-area">
                    <input type="search" class="input" placeholder="キーワード" name="area">
                </div>
                <div class="button-area">
                    <button type="submit" class="search-button">検索</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="control-wrap">
    <div class="condition-area">
        <div class="condition-box" id="top">
            <p>トップ</p>
        </div>
        <div class="condition-box"  id="ranking">
            <p>写真</p>
        </div>
        <div class="condition-box" id="comment">
            <p>口コミ</p>
        </div>
    </div>
</div>

<div class="title-wrap">
    <div class="title-area">
    <h3>焼肉三昧</h3>
    <p class="result-rating-rate">
        <span class="star5_rating" data-rate="3.5"></span>
        <span class="number_rating">3.5</span>
    </p>
    </div>
    <div class="bookmark">
        <p class="bookmark-p">
            <label for="">
                <img src="{{asset('storage/sample/ブックマーク.svg')}}" alt="" class="svg">
            </label>
            保存
        </p>
    </div>
</div>

<div class="main-wrap">
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
    </div>
</div>

@endsection