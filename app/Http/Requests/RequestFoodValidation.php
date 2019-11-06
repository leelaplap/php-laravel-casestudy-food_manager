<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestFoodValidation extends FormRequest
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
            'name'=>'required',
            'desc'=>'required',
            'price'=>'required',
            'image'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên món ăn không được để trống',
            'desc.required' => 'Miêu tả món ăn không được để trống',
            'price.required' => 'Giá của món ăn không được để trống',
            'image.required' => 'Ảnh đại diện món ăn không được để trống',
        ];
    }
}
