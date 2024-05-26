@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')

<div class="register-btn">
    <form class="register-form" action="/register" method="post">
    @csrf
    <input type="button" onclick="location.href='/login'" value="Login">
</div>

<div Class="register__content">
    <div class="register-form__heading">
        <h2>Register</h2>
    </div>
    <form class="form" action="/register" method="post">
        @csrf
        <div class="form__groupe">
            <div class="form__groupe-title">
                <span class="form__label--item">お名前</span>
            </div>
            <div class="form__groupe-content">
                <div class="form__input--text">
                    <input type="text" name="name" id="name" placeholder="例：山田 太郎"/>
                    <p class="register-form__error-message">
                    @error('name')
                    {{ $message }}
                    @enderror
                    </p>
                </div>
                <div class="form__error">
                </div>
            </div>
        </div>
        <div class="form__groupe">
            <div class="form__groupe-title">
                <span class="form__label--item">メールアドレス</span>
            </div>
            <div class="form__groupe-content">
                <div class="form__input--text">
                    <input type="email" name="email" id="email" placeholder="例：test@example.com" />
                    <p class="register-form__error-message">
                    @error('email')
                    {{ $message }}
                    @enderror
                    </p>
                </div>
                <div class="form__error">
                </div>
            </div>
        </div>
        <div class="form__groupe">
            <div class="form__groupe-title">
                <span class="form__label--item">パスワード</span>
            </div>
            <div class="form__groupe-content">
                <div class="form__input--text">
                    <input class="register-form__input" type="password" name="password" id="password" placeholder="例：coachtech1106">
                    <p class="register-form__error-message">
                    @error('password')
                    {{ $message }}
                    @enderror
                    </p>
                </div>
                <div class="form__error">
                </div>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">登録</button>
        </div>
    </form>
</div>