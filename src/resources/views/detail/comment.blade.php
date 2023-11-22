@extends('layouts.detail_layouts')

@section('title','detail_comment')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail/comment.css')}}">
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
        <div class="comment-area">
            <div class="comment-title-area">
                <h3 class="h3">口コミ</h3>
                <button class="comment-button">投稿する</button>
            </div>
            <div class="comment-box">
                <div class="comment-user-area">
                    <img src="{{asset('storage/sample/noimage.jpg')}}" alt="" class="user-img">
                    <p>名無し</p>
                </div>
                <div class="comment-star">
                    <p class="result-rating-rate">
                    <span class="star5_rating" data-rate="4"></span>
                    <span class="number_rating">4</span>
                    </p>
                </div>
                <div class="comment-text">
                    <p class="visit_date">
                        2023年11月19日訪問
                    </p>
                    <p>
                        このお店は最高の焼肉三昧！
                    </p>
                </div>
                <div class="comment-img-area">
                    <img src="{{asset('storage/shop/yakiniku.jpg')}}" alt="" class="comment-img">
                </div>
            </div>
        </div>
    </div>

@endsection