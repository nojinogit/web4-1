@extends('layouts.header_layouts')

@section('title','search')

@section('css')
<link rel="stylesheet" href="{{ asset('css/search.css')}}">
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
    <div class="situation-area">
        <p class="situation-p">検索条件　・エリア：　・ジャンル：　・キーワード：</p>
    </div>
    <div class="condition-area">
        <div class="condition-box" id="recommendation">
            <p>おすすめ</p>
        </div>
        <div class="condition-box"  id="ranking">
            <p>ランキング</p>
        </div>
        <div class="condition-box" id="comment">
            <p>口コミが多い順</p>
        </div>
    </div>
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
    <div class="reserve-area">
        <div class="reserve-title">
            ネット予約　空室情報
        </div>
        <div class="reserve-table">
            <table>
                <tr>
                    <th>月</th>
                    <th>火</th>
                    <th>水</th>
                    <th>木</th>
                    <th>金</th>
                    <th>土</th>
                    <th>日</th>
                </tr>
                <tr>
                    <td>11/1</td>
                    <td>11/2</td>
                    <td>11/3</td>
                    <td>11/4</td>
                    <td>11/5</td>
                    <td>11/6</td>
                    <td>11/7</td>
                </tr>
            </table>
        </div>
    </div>
</div>

@endsection