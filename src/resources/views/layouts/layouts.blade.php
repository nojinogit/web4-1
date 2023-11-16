<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/sanitize.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/layouts.css')}}"/>
    @yield('css')
    

</head>
<body>
    <header class="header">
        <div class="header__inner">
            <div class="header-utilities">
                <div class="header__logo-box">
                    <img src="{{asset('storage/sample/ロゴ.jpg')}}" alt="" class="header__logo-box-img">
                    <a class="header__logo header-utilities-a" href="/">COACHTECH</a>
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
                        @if(Auth::user()->role > 99)
                        <li class="header-nav__item default">
                            <a class="header-nav__link header-utilities-a" href="/management">管理画面</a>
                        </li>
                        @endif
                        @endif
                        @unless (Auth::check())
                        <li class="header-nav__item default">
                            <form class="form" action="/" method="get">
                                <button class="header-nav__button">ログイン</button>
                            </form>
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