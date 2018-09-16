<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendMessageRequest extends FormRequest
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
            'name'          => 'required|max:255',
            'mail_address'  => 'required|email',
            'message'       => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required'             => '必ず入力してください。',
            'name.max'                  => 'お名前は255文字以内で入力してください。',
            'mail_address.required'     => '必ず入力してください。',
            'mail_address.email'        => 'メールアドレス形式で入力してください。',
            'message.required'          => '必ず入力してください。',
        ];
    }
}