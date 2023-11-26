@extends('layouts.sidebar_layouts')

@section('title','sidebar_reserve_today')

@section('css')
<link rel="stylesheet" href="{{ asset('css/shop_management/reserve_today.css')}}">
@endsection

@section('content_store_management')
<div class="calendar-wrap">
    <div class="title-area">
        <h3>本日の予約</h3>
    </div>
    <div class="date-area">
        2023年9月11日
    </div>
    <table>
    <tr>
        <th>id</th>
        <th>来店日</th>
        <th>来店時刻</th>
        <th>来店者名</th>
        <th>来店人数</th>
        <th>詳細</th>
    </tr>
    <tr>
        <td>1</td>
        <td>2023-09-11</td>
        <td>11:00</td>
        <td>山田太郎</td>
        <td>4人</td>
        <td><a href="{{route('reserve_detail')}}">詳細</a></td>
    </tr>
    <tr>
        <td>1</td>
        <td>2023-09-11</td>
        <td>11:00</td>
        <td>山田太郎</td>
        <td>4人</td>
        <td>詳細</td>
    </tr>
    <tr>
        <td>1</td>
        <td>2023-09-11</td>
        <td>11:00</td>
        <td>山田太郎</td>
        <td>4人</td>
        <td>詳細</td>
    </tr>
    <tr>
        <td>1</td>
        <td>2023-09-11</td>
        <td>11:00</td>
        <td>山田太郎</td>
        <td>4人</td>
        <td>詳細</td>
    </tr>
    <tr>
        <td>1</td>
        <td>2023-09-11</td>
        <td>11:00</td>
        <td>山田太郎</td>
        <td>4人</td>
        <td>詳細</td>
    </tr>
    </table>
</div>


@endsection