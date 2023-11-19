@extends('layouts.layouts')

@section('title','detail_photo')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail_photo.css')}}">
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
            <a href="{{ route('detail') }}" class="condition-box-a">トップ</a>
        </div>
        <div class="condition-box"  id="photo">
            <a href="{{ route('detail_photo') }}" class="condition-box-a" >写真</a>
        </div>
        <div class="condition-box" id="comment">
            <a href="{{ route('detail_comment') }}" class="condition-box-a" >口コミ</a>
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
    <div class="main-right">
        <div class="reserve-title">
            <p class="reserve-title-p">ネット予約</p>
        </div>
        <div id="datepicker"/></div>
        <form action="" class="reserve-input-area">
            <p>日付: <input type="text" id="date_val"/></p>
            <div class="input-row number"><label class="bold">人数</label><input type="number"  min="1" max="5"></div>
            <div class="input-row"><label class="bold">時間</label><input type="time"></div>
            <button type="submit" class="reserve-button">予約する</button>
        </form>
    </div>
</div>

<script>
$(function(){
    $("#datepicker").datepicker({
        minDate: new Date(),
        beforeShowDay: function(date) {
        let holiday = JapaneseHolidays.isHoliday(date);
        let today = new Date();
        today.setHours(0,0,0,0);
        if (date <= today) {
            return [false, "ui-state-disabled hyphen"];
        } else if (date.getDay() == 0 || date.getDay() == 6 || holiday) {
            return [false, "ui-state-disabled batu"];
        } else {
            return [true, "maru"];
        }
        },
        onSelect: function(dateText, inst) {
            $("#date_val").val(dateText);
            setTimeout(addElements, 0);
        },
        onChangeMonthYear: ()=>{
        setTimeout(addElements, 0);
        },
    });

    function formatDate(dt) {
        var y = dt.getFullYear();
        var m = ('0' + (dt.getMonth()+1)).slice(-2);
        var d = ('0' + dt.getDate()).slice(-2);
        return (y + '-' + m + '-' + d);
    };
});

const addElements = ()=>{
    $('.ui-datepicker-calendar tbody tr td').each(function() {
        $(this).append('<div>');
    });
    $('.maru').each(function() {
        $(this).find('div').append('<span class="maru"></span>');
    });
    $('.batu').each(function() {
        $(this).find('div').append('<span class="batu"></span>');
    });
    $('.hyphen').each(function() {
        $(this).find('div').append('<span class="hyphen"></span>');
    });
}

setTimeout(addElements, 100);
</script>

@endsection