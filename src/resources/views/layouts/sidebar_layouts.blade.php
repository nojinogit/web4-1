@extends('layouts.header_layouts')

@section('title','sidebar')

@section('css')

@endsection


@section('content')

<div class="page-wrap">
    <div class="sidebar-wrap">
        <div class="edit-area">
            <p>店舗ページ編集</p>
            <div><a href="">店舗トップ</a></div>
            <div><a href="">店舗重要情報</a></div>
        </div>
        <div class="reserve-area">
            <p>ネット予約管理</p>
            <div><a href="{{route('reserve_calender')}}">予約カレンダー</a></div>
            <div><a href="">本日の予約</a></div>
        </div>
    </div>
    <div class="edit-main">
        @yield('content_store_management')
    </div>
</div>

@endsection