<?php

namespace App\Http\Requests\client\auth;

use Illuminate\Foundation\Http\FormRequest;

class checkRegisterRequest extends FormRequest
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
            "register-email" => "required",
            "register-password" => "required",
            "register-name" => "required",
            "register-numberphone" => "required",
        ];
    }
    public function messages()
    {
        return [
            "register-email.required" => "Vui lòng nhập email",
            "register-password.required" => "Vui lòng điền mật khẩu",
            "register-name.required" => "Vui lòng điền Họ và tên",
            "register-numberphone.required" => "Vui lòng điền SĐT",
        ];
    }
}
