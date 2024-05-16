@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')

<div class="register-btn">
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
                    <input type="text" name="name" value="{{ old('name') }}" />
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
                    <input type="email" name="email" value="{{ old('email') }}" />
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
                    <input type="password" name="password" value="" />
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