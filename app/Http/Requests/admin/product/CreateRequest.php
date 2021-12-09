<?php

namespace App\Http\Requests\admin\product;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            "tenSP" => "required",
            "gia" => "required",
            "idLoai" => "required",
            "hinhanh" => "required",
            "moTa" => "required",
            "anHien" => "required",
        ];
    }
    public function messages()
    {
        return [
            "tenSP.required" => "Vui lòng nhập tên sản phẩm",
            "gia.required" => "Vui lòng nhập giá",
            "idLoai.required" => "Vui lòng chọn loại",
            "hinhanh.required" => "Vui lòng tải hình ảnh sản phẩm",
            "moTa.required" => "Vui lòng nhập mô tả sản phẩm",
            "anHien.required" => "Vui lòng chọn ẩn hiện",
        ];
    }
}
