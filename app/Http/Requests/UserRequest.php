<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|min:2',
            'email' => 'required|email|unique:users,email',
//            'password'=>'required/min:4'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Ten khong duoc de trong',
            'name.min' => 'Ten co it nhat 3 ky tu tro len',
            'email.required' => 'Email khong duoc de trong',
            'email.email' => 'Email khong dung dinh dang',
            'email.unique' => 'Email da ton tai',
//            'password.required'=> 'password khong duoc de trong',
//            'password.min'=> 'password co it nhat 4 ky tu'
        ];
    }
}
