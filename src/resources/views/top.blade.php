@extends('layouts.layouts')

@section('title','top')

@section('css')
<link rel="stylesheet" href="{{ asset('css/top.css')}}">
@endsection

@section('content')

<div class="search-wrap">
    <div class="img-area">
        <img src="{{asset('storage/sample/デザート.jpg')}}" alt="">
    </div>
    <div class="search">
        <div class="search-area flex__item">
            <form method="get" class="form flex__item">
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

<div class="area-wrap flex__item">
    <div class="area-area">
        <p class="area-title">北海道・東北</p>
        <p><a href="{{ route('areaSearch', ['area' => '北海道']) }}" class="area-button">北海道</a></p>
        <p><a href="{{ route('areaSearch', ['area' => '青森']) }}" class="area-button">青森</a></p>
        <p><a href="{{ route('areaSearch', ['area' => '秋田']) }}" class="area-button">秋田</a></p>
        <p><a href="{{ route('areaSearch', ['area' => '岩手']) }}" class="area-button">岩手</a></p>
        <p><a href="{{ route('areaSearch', ['area' => '山形']) }}" class="area-button">山形</a></p>
        <p><a href="{{ route('areaSearch', ['area' => '宮城']) }}" class="area-button">宮城</a></p>
        <p><a href="{{ route('areaSearch', ['area' => '福島']) }}" class="area-button">福島</a></p>
    </div>
    <div class="area-area">
        <p class="area-title">関東</p>
        <p><a href="{{ route('areaSearch', ['area' => '東京']) }}" class="area-button">東京</a></p>
        <p><a href="{{ route('areaSearch', ['area' => '神奈川']) }}" class="area-button">神奈川</a></p>
        <p><a href="{{ route('areaSearch', ['area' => '千葉']) }}" class="area-button">千葉</a></p>
        <p><a href="{{ route('areaSearch', ['area' => '埼玉']) }}" class="area-button">埼玉</a></p>
        <p><a href="{{ route('areaSearch', ['area' => '栃木']) }}" class="area-button">栃木</a></p>
        <p><a href="{{ route('areaSearch', ['area' => '茨城']) }}" class="area-button">茨城</a></p>
        <p><a href="{{ route('areaSearch', ['area' => '群馬']) }}" class="area-button">群馬</a></p>
    </div>
    <div class="area-area">
        <p class="area-title">中部</p>
        <p><a href="{{ route('areaSearch', ['area' => '愛知']) }}" class="area-button">愛知</a></p>
        <p><a href="{{ route('areaSearch', ['area' => '岐阜']) }}" class="area-button">岐阜</a></p>
        <p><a href="{{ route('areaSearch', ['area' => '静岡']) }}" class="area-button">静岡</a></p>
        <p><a href="{{ route('areaSearch', ['area' => '三重']) }}" class="area-button">三重</a></p>
        <p><a href="{{ route('areaSearch', ['area' => '新潟']) }}" class="area-button">新潟</a></p>
        <p><a href="{{ route('areaSearch', ['area' => '山梨']) }}" class="area-button">山梨</a></p>
        <p><a href="{{ route('areaSearch', ['area' => '長野']) }}" class="area-button">長野</a></p>
        <p><a href="{{ route('areaSearch', ['area' => '石川']) }}" class="area-button">石川</a></p>
        <p><a href="{{ route('areaSearch', ['area' => '富山']) }}" class="area-button">富山</a></p>
        <p><a href="{{ route('areaSearch', ['area' => '福井']) }}" class="area-button">福井</a></p>
    </div>
    <div class="area-area">
        <p class="area-title">関西</p>
        <p><a href="{{ route('areaSearch', ['area' => '北海道']) }}" class="area-button">北海道</a></p>
        <p><a href="{{ route('areaSearch', ['area' => '青森']) }}" class="area-button">青森</a></p>
        <p><a href="{{ route('areaSearch', ['area' => '秋田']) }}" class="area-button">秋田</a></p>
        <p><a href="{{ route('areaSearch', ['area' => '岩手']) }}" class="area-button">岩手</a></p>
        <p><a href="{{ route('areaSearch', ['area' => '山形']) }}" class="area-button">山形</a></p>
        <p><a href="{{ route('areaSearch', ['area' => '宮城']) }}" class="area-button">宮城</a></p>
        <p><a href="{{ route('areaSearch', ['area' => '福島']) }}" class="area-button">福島</a></p>
    </div>
    <div class="area-area">
        <p class="area-title">中国・四国</p>
        <p><a href="{{ route('areaSearch', ['area' => '北海道']) }}" class="area-button">北海道</a></p>
        <p><a href="{{ route('areaSearch', ['area' => '青森']) }}" class="area-button">青森</a></p>
        <p><a href="{{ route('areaSearch', ['area' => '秋田']) }}" class="area-button">秋田</a></p>
        <p><a href="{{ route('areaSearch', ['area' => '岩手']) }}" class="area-button">岩手</a></p>
        <p><a href="{{ route('areaSearch', ['area' => '山形']) }}" class="area-button">山形</a></p>
        <p><a href="{{ route('areaSearch', ['area' => '宮城']) }}" class="area-button">宮城</a></p>
        <p><a href="{{ route('areaSearch', ['area' => '福島']) }}" class="area-button">福島</a></p>
    </div>
    <div class="area-area">
        <p class="area-title">九州・沖縄</p>
        <p><a href="{{ route('areaSearch', ['area' => '北海道']) }}" class="area-button">北海道</a></p>
        <p><a href="{{ route('areaSearch', ['area' => '青森']) }}" class="area-button">青森</a></p>
        <p><a href="{{ route('areaSearch', ['area' => '秋田']) }}" class="area-button">秋田</a></p>
        <p><a href="{{ route('areaSearch', ['area' => '岩手']) }}" class="area-button">岩手</a></p>
        <p><a href="{{ route('areaSearch', ['area' => '山形']) }}" class="area-button">山形</a></p>
        <p><a href="{{ route('areaSearch', ['area' => '宮城']) }}" class="area-button">宮城</a></p>
        <p><a href="{{ route('areaSearch', ['area' => '福島']) }}" class="area-button">福島</a></p>
    </div>
</div>


@endsection