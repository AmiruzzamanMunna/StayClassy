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
            'name' => 'required|',
            'username' => 'required| unique:tbl_user,username',
            'email' => 'required',
            'mobile1'=>'required',
            'mobile2'=>'required',
            'address'=>'required',
            'password' => 'required',
            'confirm_password' => 'required|same:password',

        ];
    }
    public function messages()
    {
        {
            return[

                'name.required'=>'Name is required',
                'username.required'=>'User name is required',
                'email.required'=>'Email is required',
                'mobile1.required'=>'Mobile1 is required',
                'mobile2.required'=>'Mobile2 is required',
                'password.required'=>'Password is required',
                'confirm_password.required'=>'Confirm_Password is required',

            ];
        }
    }
}
