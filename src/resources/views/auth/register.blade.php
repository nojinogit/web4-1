@extends('layouts.header_layouts')

@section('title','register')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css')}}">
@endsection

@section('content')

<div class="register__content">
    <div class="register-form__heading">
        <h1>会員登録</h1>
    </div>
    <form class="form" action="/register" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-content">
                <label class="label">名前</label>
                <div class="form__input--text">
                    <input type="text" name="name" value="{{ old('name') }}"/>
                </div>
            <div class="form__error">
            @error('name')
            {{ $message }}
            @enderror
        </div>
        <div class="form__group">
            <div class="form__group-content">
                <label class="label">メールアドレス</label>
                <div class="form__input--text">
                    <input type="email" name="email" value="{{ old('email') }}"/>
                </div>
                <div class="form__error">
                @error('email')
                {{ $message }}
                @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-content">
                <label class="label">パスワード</label>
                <div class="form__input--text">
                    <input type="password" name="password"/>
                </div>
                <div class="form__error">
                @error('password')
                {{ $message }}
                @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-content">
                <label class="label">確認用パスワード</label>
                <div class="form__input--text">
                    <input type="password" name="password_confirmation"/>
                </div>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">会員登録</button>
        </div>
    </form>
    <div class="login__link">
        <a class="login__button-submit" href="/">ログインはこちら</a>
    </div>
</div>

@endsection