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

            'pname'=>'required',
            'code'=>'required',
            'buyprice'=>'required',
            'price'=>'required',
            'discount'=>'required',
            'quantity'=>'required',
            'new'=>'required',
            'category'=>'required',
            'type'=>'required',
            'img1'=>'required',
            'img2'=>'required',
            'img3'=>'required',
            'status'=>'required',
            'sold_item'=>'required',
        ];
    }
    public function messages()
    {
        return[

            'pname'=>'Name can not be empty',
            'code'=>'Code can not be empty',
            'buyprice'=>'Buy price can not be empty',
            'price'=>'price can not be empty',
            'discount'=>'discount can not be empty',
            'quantity'=>'quantity can not be empty',
            'new'=>'field can not be empty',
            'category'=>'category can not be empty',
            'type'=>'field can not be empty',
            'img1'=>'can not be empty',
            'img2'=>'can not be empty',
            'img3'=>'can not be empty',
            'status'=>'can not be empty',
            'sold_item'=>'Can not be Empty',
        ];
    }
}
