<?php

namespace App\Http\Requests\client\auth;

use Illuminate\Foundation\Http\FormRequest;

class checkLoginRequest extends FormRequest
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
            "singin-email" => "required",
            "singin-password" => "required",
        ];
    }
    public function messages()
    {
        return [
            "singin-email.required" => "Vui lòng nhập email",
            "singin-password.required" => "Vui lòng điền mật khẩu",
        ];
    }
}
