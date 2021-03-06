<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FoodRequest extends FormRequest
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
//            'image'=>'required',
            'price'=>'required',
            'desc'=>'required',
        ];
    }

    public function messages()
    {
        return[
        'name.required'=>'không được để trống',
//        'image.required'=>'không được để trống',
        'price.required'=>'không được để trống',
        'desc.required'=>'không được để trống',

        ];
    }
}
