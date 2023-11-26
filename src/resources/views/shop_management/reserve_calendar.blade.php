@extends('layouts.sidebar_layouts')

@section('title','sidebar_reserve_calendar')

@section('css')
<link rel="stylesheet" href="{{ asset('css/shop_management/reserve_calendar.css')}}">
<link rel="stylesheet" href="{{ asset('css/layouts/sidebar_layouts.css')}}">
@endsection
@section('js')
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js'></script>
@endsection

@section('content_store_management')
<div class="calendar-wrap">
    <div class="title-area">
        <h3>予約カレンダー</h3>
    </div>
    <div class="full-calendar">
        <div id='calendar'></div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        locale: 'ja',
        buttonText: {
            prev:     '<',
            next:     '>',
            prevYear: '<<',
            nextYear: '>>',
            today:    '今日',
            month:    '月',
            week:     '週',
            day:      '日',
            list:     '一覧'
        },
        events: [
                    {
                        id: '1',
                        title: 'event1',
                        start: '2023-11-01',
                        url: '#'
                    },
                    {
                        id: '2',
                        title: 'event2',
                        start: '2023-11-05',
                        url: '#'
                    },
                    {
                        id: '3',
                        title: 'event3',
                        start: '2023-11-07',
                        end: '2023-11-11',
                        url: '#'
                    }
                ],
        });
        calendar.render();
    });
</script>

@endsection