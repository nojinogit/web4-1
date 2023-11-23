<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/sanitize.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/layouts/layouts.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/datepicker.css')}}"/>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
    <script src="https://cdn.rawgit.com/osamutake/japanese-holidays-js/v1.0.10/lib/japanese-holidays.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>
    @yield('css')


</head>
<body>
    <header class="header">
        <div class="header__inner">
            <div class="header-utilities">
                <div class="header__logo-box">
                    <img src="{{asset('storage/sample/ロゴ.jpg')}}" alt="" class="header__logo-box-img">
                    <a class="header__logo header-utilities-a" href="/top">COACHTECH</a>
                </div>
                <nav class="header-utilities-nav">
                    <ul class="header-nav">
                        @if (Auth::check())
                        <li class="header-nav__item default">
                            <form class="form" action="/logout" method="post">
                                @csrf
                                <button class="header-nav__button">ログアウト</button>
                            </form>
                        </li>
                        <li class="header-nav__item default">
                            <a class="header-nav__link header-utilities-a" href="/myPage">マイページ</a>
                        </li>
                        {{--@if(Auth::user()->role > 99)--}}
                        @if (Auth::check())
                        <li class="header-nav__item default">
                            <a class="header-nav__link header-utilities-a" href="/management">管理画面</a>
                        </li>
                        @endif
                        @endif
                        @unless (Auth::check())
                        <li class="header-nav__item default">
                            <a class="header-nav__link header-utilities-a" href="/">ログイン</a>
                        </li>
                        @if (!Auth::check())
                        <li class="header-nav__item default">
                            <a class="header-nav__link header-utilities-a" href="/register">会員登録</a>
                        </li>
                        @endif
                        @endunless
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main>
    @yield('content')
    </main>
</body>
</html>