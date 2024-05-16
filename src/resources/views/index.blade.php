@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div class="contact__content">
    <div class="contact-form__heading">
        <h2>Contact</h2>
    </div>
    <form class="contact-form" action="/confirm" method="post">
        @csrf
        <div class="contact-form__item">
            <table class="contact-table__inner">
                <tr class="contact-table__row">
                    <th class="contact-table__header">
                        <label class="contact-table__name">
                            <span class="contact-table__name-jp">お名前
                                <span class="contact-table__required">※</span>
                            </span>
                            <td class="contact-table__text-front">
                                <input class="contact-form__item-input" type="text" name="last_name" placeholder="例:山田" value="{{ old('last_name') }}">
                                    <div class="form__error">
                                    @error('last_name')
                                    {{ $message }}
                                    @enderror
                                    </div>
                                <input class="contact-form__item-input" type="text" name="first_name" placeholder="例:太郎" value="{{ old('first_name') }}" >
                                    <div class="form__error">
                                    @error('first_name')
                                    {{ $message }}
                                    @enderror
                                    </div>
                            </td>
                        </label>
                    </th>
                </tr>
                <tr class="contact-table__row">
                    <th class="contact-table__header">
                        <label class="contact-table__name">
                            <span class="contact-table__name-jp">
                                性別<span class="contact-table__required">※</span>
                            </span>
                            <td class="contact-table__text">
                                <input class="contact-form__item-input" type="radio" name="gender" value="1" checked>男性
                                <input class="contact-form__item-input" type="radio" name="gender" value="2" >女性
                                <input class="contact-form__item-input" type="radio" name="gender" value="3">その他
                                    <div class="form__error">
                                    @error('gender')
                                    {{ $message }}
                                    @enderror
                                    </div>
                            </td>

                            </td>
                        </label>
                    </th>
                </tr>
                <tr class="contact-table__row">
                    <th class="contact-table__header">
                        <label class="contact-table__name">
                            <span class="contact-table__name-jp">
                                メールアドレス<span class="contact-table__required">※</span>
                            </span>
                            <td class="contact-table__text-front">
                                <input class="contact-form__item-input" type="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}">
                                    <div class="form__error">
                                    @error('email')
                                    {{ $message }}
                                    @enderror
                                    </div>
                        </label>
                    </th>
                </tr>
                <tr class="contact-table__row">
                    <th class="contact-table__header">
                        <label class="contact-table__name">
                            <span class="contact-table__name-jp">
                                電話番号<span class="contact-table__required">※</span>
                            </span>
                            <td class="contact-table__text-front">
                                <input class="contact-form__item-input" type="tel" name="no-1" placeholder="080" value="{{ old('no-1') }}">
                                    <div class="form__error">
                                    @error('no-1')
                                    {{ $message }}
                                    @enderror
                                    </div>
                                    -
                                <input class="contact-form__item-input" type="tel" name="no-2" placeholder="1234" value="{{ old('no-2') }}">
                                    <div class="form__error">
                                    @error('no-2')
                                    {{ $message }}
                                    @enderror
                                    </div>
                                    -
                                <input class="contact-form__item-input" type="tel" name="no-3" placeholder="5678" value="{{ old('no-3') }}">
                                    <div class="form__error">
                                    @error('no-3')
                                    {{ $message }}
                                    @enderror
                                    </div>
                            </td>
                        </label>
                    </th>
                </tr>
                <tr class="contact-table__row">
                    <th class="contact-table__header">
                        <label class="contact-table__name">
                            <span class="contact-table__name-jp">
                                住所<span class="contact-table__required">※</span>
                            </span>
                            <td class="contact-table__text-front">
                                <input class="contact-form__item-input" type="text" name="address"  placeholder="例: 東京都渋谷区千駄ヶ谷１-2-3" value="{{ old('address') }}">
                                    <div class="form__error">
                                    @error('address')
                                    {{ $message }}
                                    @enderror
                                    </div>
                            </td>
                        </label>
                    </th>
                </tr>
                <tr class="contact-table__row">
                    <th class="contact-table__header">
                        <label class="contact-table__name">
                            <span class="contact-table__name-jp">
                                建物名
                            </span>
                            <td class="contact-table__text-front">
                                <input class="contact-form__item-input" type="text" name="building" placeholder="例: 千駄ヶ谷マンション101" value="{{ old('building') }}">
                            </td>
                        </label>
                    </th>
                </tr>
                <tr class="contact-table__row">
                    <th class="contact-table__header">
                        <label class="contact-table__name">
                            <span class="contact-table__name-jp">
                                お問い合わせの種類<span class="contact-table__required">※</span>
                            </span>
                            <td class="contact-table__text-front">
                                <select class="contact-form__item-input" name="select" id="select" value="{{ old('select') }}">
                                    <option value="選択してください" hidden>選択してくだい</option>
                                    <option value="商品の交換について">商品の交換について</option>
                                    <option value="返金について">返金について</option>
                                        <div class="form__error">
                                        @error('select')
                                        {{ $message }}
                                        @enderror
                                        </div>
                            </td>
                        </label>
                    </th>
                </tr>
                <tr class="contact-table__row">
                    <th class="contact-table__header">
                        <label class="contact-table__name">
                            <span class="contact-table__name-jp">
                                お問い合わせ内容<span class="contact-table__required">※</span>
                            </span>
                            <td class="contact-table__text-front">
                                <textarea name="detail" placeholder="お問い合わせ内容をご記載ください" value="{{ old('detail') }}"></textarea>
                                    <div class="form__error">
                                    @error('detail')
                                    {{ $message }}
                                    @enderror
                                    </div>
                            </td>
                        </label>
                    </th>
                </tr>
            </table>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">確認画面</button>
        </div>
    </form>
</div>


@endsection