@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')

<div class="confirm__content">
    <div class="confirm__heading">
        <h2>Confirm</h2>
    </div>
<form class="form" action="/thanks" method="post">
    @csrf
    <div class="confirm-table">
        <table class="confirm-table__inner">
            <tr class="confirm-table__row">
                <th class="confirm-table__header">お名前</th>
                <td class="confirm-table__text">
                    <input type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly/>
                    <input type="text" name="first_name" value="{{ $contact['first_name'] }}" readonly/>
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__header">性別</th>
                <td class="confirm-table__text">
                    <input type="text" name="gender" value="{{ $contact['gender'] }}"  readonly/>
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__header">メールアドレス</th>
                <td class="confirm-table__text">
                    <input type="text" name="email" value="{{ $contact['email'] }}"  readonly/>
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__header">電話番号</th>
                <td class="confirm-table__text">
                    <input type="text" name="tel" value="{{ $contact['no-1'] }}{{ $contact['no-2'] }}{{ $contact['no-3'] }}"  readonly/>
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__header">住所</th>
                <td class="confirm-table__text">
                    <input type="text" name="address" value="{{ $contact['address'] }}"  readonly/>
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__header">建物名</th>
                <td class="confirm-table__text">
                    <input type="text" name="building" value="{{ $contact['building'] }}"  readonly/>
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__header">お問い合わせの種類</th>
                <td class="confirm-table__text">
                    <input type="text" name="select" value="{{ $contact['select'] }}"  readonly/>
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__header">お問い合わせ内容</th>
                <td class="confirm-table__text">
                    <input type="text" name="detail" value="{{ $contact['detail'] }}"  readonly/>
                </td>
            </tr>
        </table>
        <button class="confirm__button-submit" type="submit">送信</button>
        <div class="">
            <a href="/">修正</a>
        </div>
    </div>
</form>

@endsection

