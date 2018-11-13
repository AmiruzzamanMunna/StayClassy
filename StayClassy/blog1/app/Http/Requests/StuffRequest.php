<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StuffRequest extends FormRequest
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
            'username'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ];
    }
    public function messages()
    {
        return[
        'name.required'=>'Name field is required',
        'username.required'=>'User Name is required',
        'phone.required'=>'Phone Number is required',
        'email.required'=>'Email is required',
        'password.required'=>'Password is required',
        'confirm_password.required'=>'Confirm Password is required',
        ];
    }
}
