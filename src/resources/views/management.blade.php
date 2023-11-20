@extends('layouts.layouts')

@section('title','management')

@section('css')
<link rel="stylesheet" href="{{ asset('css/management.css')}}">
@endsection

@section('content')

<div class="management-wrap">
    <div class="management-area">
        <div class="management-box"><img src="{{asset('storage/sample/ペン付きのノート.svg')}}" alt=""><a href="/management_shop_create">店舗登録</a></div>
        <div class="management-box"><img src="{{asset('storage/sample/リスト.svg')}}" alt=""><a href="">申請一覧</a></div>
    </div>
    <div class="management-area">
        <div class="management-box"><img src="{{asset('storage/sample/お店.svg')}}" alt=""><a href="">店舗一覧</a></div>
        <div class="management-box"><img src="{{asset('storage/sample/お店.svg')}}" alt=""><a href="">申請一覧</a></div>
    </div>
</div>

@endsection