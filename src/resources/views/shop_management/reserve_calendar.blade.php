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
            prev: '<',
            next: '>',
            prevYear: '<<',
            nextYear: '>>',
            today: '今日',
            month: '月',
            week: '週',
            day: '日',
            list: '一覧'
        },
        events: function (fetchInfo, successCallback, failureCallback) {
            $.get('{{ route('reserveData') }}', { shop_id: 1}, function(data) {
                var events = [];
                var reservationMap = {};
                data.reservations.forEach(function(reservation) {
                    reservationMap[reservation.date] = reservation.reserve_count;
                });

                var today = new Date();
                var oneYearFromToday = new Date();
                oneYearFromToday.setFullYear(today.getFullYear() + 1);
                var date = new Date(today);

                while (date < oneYearFromToday) {
                    var dateString = date.toISOString().split('T')[0];

                    if (reservationMap[dateString] === undefined) {
                        events.push({
                            title: '受付中：5組',
                            start: new Date(date),
                            allDay: true,
                            className: 'white-black'
                        });
                        events.push({
                            title: '予約：0組',
                            start: new Date(date),
                            allDay: true,
                            className: 'gray-black'
                        });
                    } else {
                        events.push({
                            title: '受付中：' + (5 - (reservationMap[dateString] || 0)) + '組',
                            start: new Date(date),
                            allDay: true,
                            className: 'white-black'
                        });
                        events.push({
                            title: '予約：' + reservationMap[dateString] + '組',
                            start: new Date(date),
                            allDay: true
                        });
                    }
                    date.setDate(date.getDate() + 1);
                }
                successCallback(events);
            });
        },
    });

    calendar.render();
});
</script>

@endsection