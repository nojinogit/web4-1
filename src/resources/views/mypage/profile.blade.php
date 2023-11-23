@extends('layouts.header_layouts')

@section('title','myPage_profile')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage/profile.css')}}">
@endsection

@section('content')

<div class="myPage-wrap">
    <div class="profile-area">
        <div class="img-area">
            <img src="{{asset('storage/sample/pietro-de-grandi-T7K4aEPoGGk-unsplash.jpg')}}" alt="" class="profile-img">
        </div>
        <div class="button-area">
            <button class="img-button">画像を変更</button>
        </div>
    </div>
    <div>
        <table>
            <form action="" id="form">
                <tr>
                    <th>ニックネーム</th>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <th>性別</th>
                    <td class="radio-area">
                        <input type="radio" id="male" name="gender" value="male" class="radio">
                        <label for="male">:男性</label>
                        <input type="radio" id="female" name="gender" value="female" class="radio">
                        <label for="female">:女性</label>
                        <input type="radio" id="other" name="gender" value="other" class="radio">
                        <label for="other">:未設定</label>
                    </td>
                </tr>
                <tr>
                    <th>現住所</th>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <th>生年月日</th>
                    <td>
                        <select id="year" class="select"></select>年
                        <select id="month" class="select margin-left"></select>月
                        <select id="day" class="select margin-left"></select>日
                    </td>
                </tr>
                <tr>
                    <th>電話番号</th>
                    <td><input type="text"></td>
                </tr>
            </form>
        </table>
    </div>
    <div class="submit-button-area">
            <button type="submit" form="form" class="button">更新する</button>
    </div>
</div>

<script>
    var selectYear = document.getElementById("year");
    for (var i = 1923; i <= 2023; i++) {
        var option = document.createElement("option");
        option.value = i;
        option.text = i;
        selectYear.appendChild(option);
    }

    var selectMonth = document.getElementById("month");
    for (var i = 1; i <= 12; i++) {
        var option = document.createElement("option");
        option.value = i;
        option.text = i;
        selectMonth.appendChild(option);
    }

    var selectDay = document.getElementById("day");
    for (var i = 1; i <= 31; i++) {
        var option = document.createElement("option");
        option.value = i;
        option.text = i;
        selectDay.appendChild(option);
    }
</script>

@endsection