@extends('layouts.detail_layouts')

@section('title','detail_photo')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail/photo.css')}}">
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
        <div class="photo-area">
            <h3 class="h3">公式写真</h3>
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
            <h3 class="h3">ユーザーからの投稿写真</h3>
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
    </div>

@endsection