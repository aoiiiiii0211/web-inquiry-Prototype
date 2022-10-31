<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConrtactRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required'],
            'hurigana' => [],
            'Emails' => ['email', 'confirmed', 'required'],
            'Emails_confirmation' => ['email', 'required'],
            'Tel' => [],
            'Inquiry' => ['required'],
        ];
    }

    /**
     * 定義済みバリデーションルールのエラーメッセージ取得
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => '氏名は必須入力です',
            'hurigana.required' => 'フリガナは必須入力です',
            'Emals.required' => 'メールアドレスは必須入力です',
            'Emails.confirmed' => 'メールアドレスが一致しません',
            'Emails_confirmation.email' => 'メールアドレス(確認用)が正しくありません',
            'Emails_confirmation.required' => 'メールアドレス(確認用)は必須入力です',
            'Tel.required' => '電話番号は必須入力です',
            'Inquiry.required' => 'お問い合わせ内容を入力してください',
        ];
    }
}
