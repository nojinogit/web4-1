@extends('layouts.header_layouts')

@section('title','management_shop_create')

@section('css')
<link rel="stylesheet" href="{{ asset('css/management/user_create.css')}}">
@endsection

@section('content')

<div class="shop_create-wrap">
    <div class="title-area">
        <h3>ユーザー登録</h3>
    </div>
    <div>
        <h1>
            アカウント管理
        </h1>
    </div>
    <div class="main__search">
        <h2>アカウント検索</h2>
        <form action="" method="get" class="default">
            <div class="main__search--step">
                    <div class="main__search--step-title">
                        お名前
                    </div>
                    <div  class="main__search--step-input">
                        <input type="text" name="name">
                    </div>
                    <div class="main__search--step-title">
                        メールアドレス
                    </div>
                    <div class="main__search--step-input">
                        <input type="email" name="email">
                    </div>
                    <div class="main__search--step-title">
                        権限
                    </div>
                    <div class="main__search--step-input">
                        <select value="権限を選択してください" name="role">
                            <option value="">全権限</option>
                            <option value="100">管理者</option>
                            <option value="10">店舗代表者</option>
                            <option value="1">一般ユーザ</option>
                        </select>
                    </div>
            </div>
            <div class="main__search--submit">
                <input type="submit" value="検索">
            </div>
        </form>
        <form action="" method="get" class="responsive">
            <div class="main__search--step-responsive">
                    <div class="main__search--step-title-responsive">
                        お名前
                    </div>
                    <div  class="main__search--step-input-responsive">
                        <input type="text" name="name">
                    </div>
                    <div class="main__search--step-title-responsive">
                        メールアドレス
                    </div>
                    <div class="main__search--step-input-responsive">
                        <input type="email" name="email">
                    </div>
                    <div class="main__search--step-title-responsive">
                        権限
                    </div>
                    <div class="main__search--step-input-responsive">
                        <select value="権限を選択してください" name="role">
                            <option value="">全権限</option>
                            <option value="100">管理者</option>
                            <option value="10">店舗代表者</option>
                            <option value="1">一般ユーザ</option>
                        </select>
                    </div>
            </div>
            <div class="main__search--submit">
                <input type="submit" value="検索">
            </div>
        </form>
    </div>

    @isset($accounts)
    <div class="main__add--table">
        <h2>アカウント一覧</h2>
        <div>
            <table>
                <tr>
                    <th>お名前</th>
                    <th>メールアドレス</th>
                    <th>権限</th>
                </tr>
                @foreach($accounts as $account)
                <tr>
                    <form  method="POST" action="">
                        @method('delete')
                        @csrf
                        <input type="hidden" name="id" value="">
                        <td></td>
                        <td></td>
                        <td>
                            @if($account->role==100)
                            管理者
                            @elseif($account->role==10)
                            店舗代表者
                            @elseif($account->role==1)
                            一般ユーザ
                            @endif
                        </td>
                        <td><button type="submit">削除</button></td>
                    </form>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    @endisset


    <div class="main__add--table">
        <h2>アカウント設定</h2>
        @if (count($errors) > 0)
            <ul class="error">
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            </ul>
        @endif
        @if(session('message'))
            <div class="message">
                <div class="message__success">
                    <p class="message__success--p" id="session">{{session('message')}}</p>
                </div>
            </div>
        @endif
        <table class="default">
            <tr>
                <th>お名前</th>
                <th>メールアドレス</th>
                <th>パスワード</th>
                <th>パスワード再入力</th>
                <th>権限</th>
            </tr>
            <tr>
                <form  method="POST" action="">
                    @csrf
                    <td><input type="text" name="name"  required autofocus autocomplete="name"></td>
                    <td><input type="email" name="email" required autocomplete="username" ></td>
                    <td><input type="password" name="password" required autocomplete="new-password" ></td>
                    <td><input type="password" name="password_confirmation" required autocomplete="new-password"></td>
                    <td>
                        <select name="role">
                        <option value="100">管理者</option>
                        <option value="10">店舗代表者</option>
                        <option value="1">一般ユーザ</option>
                        </select>
                    </td>
                    <td><button type="submit">登録</button></td>
                </form>
            </tr>
        </table>
    </div>

</div>

@endsection