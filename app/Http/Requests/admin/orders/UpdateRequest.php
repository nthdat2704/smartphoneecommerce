<?php

namespace App\Http\Requests\admin\orders;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            "billstatus" => "required",
        ];
    }
    public function messages()
    {
        return [
            "tenLoai.required" => "Vui lòng nhập tên danh mục",
            "image.required" => "Vui lòng tải hình ảnh danh mục",
            "anHien.required" => "Vui lòng chọn ẩn hiện",
        ];
    }
}
