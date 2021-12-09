<?php

namespace App\Http\Requests\client\orders;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
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
            "billName" => "required",
            "diachi" => "required",
            "billTel" => "required",
            "email" => "required",
            "pttt" => "required",
        ];
    }
    public function messages()
    {
        return [
            "billName.required" => "Vui lòng nhập họ và tên",
            "diachi.required" => "Vui lòng nhập địa chỉ",
            "billTel.required" => "Vui lòng nhập số điện thoại",
            "email.required" => "Vui lòng nhập email",
            "pttt.required" => "Vui lòng chọn phương thức thanh toán",
        ];
    }
}
