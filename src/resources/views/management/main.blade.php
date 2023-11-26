@extends('layouts.header_layouts')

@section('title','management_main')

@section('css')
<link rel="stylesheet" href="{{ asset('css/management/main.css')}}">
@endsection

@section('content')

<div class="management-wrap">
    <div class="management-area">
        <div class="management-box"><img src="{{asset('storage/sample/ペン付きのノート.svg')}}" alt=""><a href="/management_shop_create">店舗登録</a></div>
        <div class="management-box"><img src="{{asset('storage/sample/リスト.svg')}}" alt=""><a href="/management_shop_request_index">申請一覧</a></div>
    </div>
    <div class="management-area">
        <div class="management-box"><img src="{{asset('storage/sample/お店.svg')}}" alt=""><a href="/management_shop_index">店舗一覧</a></div>
        <div class="management-box"><img src="{{asset('storage/sample/noimage.jpg')}}" alt=""><a href="/management_user_create">ユーザー登録</a></div>
    </div>
</div>

@endsection