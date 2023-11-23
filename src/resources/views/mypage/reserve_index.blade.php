@extends('layouts.header_layouts')

@section('title','mypage_reserve_index')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage/reserve_index.css')}}">
@endsection

@section('content')

<div class="reserve_index-wrap">
    <div class="title-area">
        <h3>予約一覧</h3>
    </div>
    <div class="shop-wrap">
        <div class="shop-area">
            <div class="condition-area">
                <p class="condition-p">来店済み</p>
            </div>
            <div class="reserve-main-area">
                <div class="img-area">
                    <img src="{{asset('storage/shop/yakiniku.jpg')}}" alt="" class="shop-img">
                </div>
                <div class="reserve_data-area">
                    <h3>焼肉三昧</h3>
                    <div class="data"><label for="" class="datalabel">来店日時</label>2023年8月17日（水）20：00</div>
                    <div class="data"><label for="" class="datalabel">来店人数</label>4名</div>
                    <div class="data"><label for="" class="datalabel">予約番号</label>aaaaaaaa</div>
                </div>
                <div class="button-area">
                    <a href="" class="button-a">
                        <div class="button-area-box">口コミを投稿</div>
                    </a>
                    <a href="{{route('reserve_confirm')}}" class="button-a">
                        <div class="button-area-box">予約確認</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection