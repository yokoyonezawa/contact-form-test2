@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

<div class="logout-btn">
    <button class="logout-btn__item" type="submit">login
    </button>
</div>

@section('content')
<div class="admin__content">
    <div class="admin__header">
        <div class="admin__header-ttl">
            <h2>Admin</h2>
        </div>
        <div class="admin__header-item">
            <form class="admin__search">
                <input type="text" name="name, email" placeholder="名前やメールアドレスを入力してください" value="" />
                <select class="admin__search-gender" name="gender">
                    <option value="" hidden>性別</option>
                    <option value="男性">男性</option>
                    <option value="女性">女性</option>
                    <option value="その他">その他</option>
                </select>
                <select class="admin__search-select" name="select">
                    <option value="" hidden>お問い合わせの種類
                    </option>
                    <option value="商品の交換について">商品の交換について
                    </option>
                    <option value="返金について">返金について
                    </option>
                </select>
                <input class="admin__search-date" type="date" name="date"></input>
                <div class="search-form__button">
                    <button class="search-form__button-submit" type="submit">検索</button>
                    <input class="search-form__reset" type="reset" value="リセット" />
    </div>
            </form>

        </div>
    </div>

</div>