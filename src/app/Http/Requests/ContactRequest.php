<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'last_name' => ['required', 'string', 'max:120'],
            'first_name' => ['required', 'string', 'max:120'],
            'gender' => ['required', 'string', 'max:120'],
            'email' => ['required', 'string', 'email', 'max:120'],
            'no-1' => ['required', 'digits_between:1,5'],
            'no-2' => ['required', 'digits_between:1,5'],
            'no-3' => ['required', 'digits_between:1,5'],
            'address' => ['required', 'string', 'max:120'],
            'select' => ['required',  'max:120'],
            'detail' => ['required', 'string', 'max:120'],
        ];
    }

    public function messages(){
        return [
            'last_name.required' => '姓を入力してください',
            'first_name.required' => '名を入力してください',
            'gender.required' => '性別を選択してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'no-1.required' => '電話番号を入力してください',
            'no-2.required' => '電話番号を入力してください',
            'no-3.required' => '電話番号を入力してください',
            'no-1.digits_between' => '電話番号は5桁までの数字で入力してください',
            'no-2.digits_between' => '電話番号は5桁までの数字で入力してください',
            'no-3.digits_between' => '電話番号は5桁までの数字で入力してください',
            'address.required' => '住所を入力してください',
            'select.in' => 'お問い合わせの種類を選択してください',
            'detail.required' => 'お問い合わせ内容を入力してください',
            'detail.max:120' => 'お問合せ内容は120文字以内で入力してください',
        ];
    }
}
