<?php

namespace App\Http\Requests\client\auth;

use Illuminate\Foundation\Http\FormRequest;

class checkUpdateRequest extends FormRequest
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
            "hoTen" => "required",
            "sdt" => "required",
            "email" => "required",
            "password" => "required",
        ];
    }
    public function messages()
    {
        return [
            "hoTen.required" => "Vui lòng nhập họ tên",
            "sdt.required" => "Vui lòng nhập SĐT",
            "email.required" => "Vui lòng nhập Email",
            "password.required" => "Vui lòng nhập mật khẩu mới",
        ];
    }
}
