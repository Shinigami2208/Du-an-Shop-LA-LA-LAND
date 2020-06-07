<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required',
            'brand_id' =>'required',
            'category_id' =>'required',
            'unit_price' => 'required|numeric',
            'promotion_price' =>'required|numeric',
            'description' => 'required',
            'quality' => 'required|numeric',
            'image' => 'image|mimes:jpg,jpeg,png,gif'
        ];
    }
    public function messages()
    {
       return [
           'required' => ':attribute không được bỏ trống',
           'numeric' => ':attribute phải là dạng chữ số',
           'mimes' => ':attribute phải là hình ảnh'
       ];
    }
    public function attributes()
    {
        return [
            'name' => 'Tên sản phẩm',
            'brand_id' => 'Tên thương hiệu',
            'category_id' => 'Danh mục sản phẩm',
            'unit_price' => 'Giá bán sản phẩm',
            'promotion_price' => 'Giá khuyến mại sản phẩm',
            'description' => 'Mô tả sản phẩm',
            'quality' => 'số lượng',
            'image' => 'Hình ảnh'
        ];
    }
}
