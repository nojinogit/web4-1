@extends('layouts.header_layouts')

@section('title','detail')

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
    @yield('content_detail')
    <div class="main-right">
        <div class="reserve-title">
            <p class="reserve-title-p">ネット予約</p>
        </div>
        <div id="datepicker"/></div>
        <form action="{{route('reserve')}}" class="reserve-input-area" method="post">
            @csrf
            <input type="hidden" id="date_val" name="date"/>
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
            <input type="hidden" name="shop_id" value="1">
            <div class="input-row number"><label class="bold">人数</label><input type="number" min="1" max="5" name="number_of_people"></div>
            <div class="input-row"><label class="bold">時間</label><input type="time" class="time" name="time"></div>
            <button type="submit" class="reserve-button">予約する</button>
        </form>
        @if (session('message'))
            <div class="alert alert-success" style="color:blue">
                {{ session('message') }}
            </div>
        @endif
    </div>
</div>


<script>
$(function() {
    let reservations = {};

    $.get('{{ route('reserveData') }}', { shop_id: 1 }, function(data) {
        data.reservations.forEach(function(reservation) {
            reservations[reservation.date] = reservation.reserve_count;
        });

        $("#datepicker").datepicker({
            minDate: new Date(),//現在の日付から始める効果もあるので残す
            defaultDate: "+1d",
            beforeShowDay: function(date) {
                let dateString = $.datepicker.formatDate('yy-mm-dd', date);
                let holiday = JapaneseHolidays.isHoliday(date);
                let today = new Date();
                today.setHours(0,0,0,0);
                if (date <= today) {
                    return [false, "ui-state-disabled hyphen"];
                } else if (reservations[dateString] && reservations[dateString] >= 5) {
                    return [false, "ui-state-disabled batu"];
                } else if (reservations[dateString] && reservations[dateString] == 4) {
                    return [true, "triangle"];
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
    });
});

const addElements = ()=>{
    $('.ui-datepicker-calendar tbody tr td').each(function() {
        $(this).append('<div>');
    });
    $('.maru').each(function() {
        $(this).find('div').append('<span class="maru"></span>');
    });
    $('.triangle').each(function() {
        $(this).find('div').append('<span class="triangle"></span>');
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