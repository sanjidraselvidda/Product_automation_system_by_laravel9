<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productsValidation extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'productName'=>'required|string|regex:/^[\pL\s\-]+$/u',
            'selectUniteType'=>'required|string',
            'productPrice'=>'required|numeric',
            'updatedStock'=>'required|numeric'
        ];
    }
    public function messages(){
        return [
            'productName.required'=>'Please Enter Product Name',
            'selectUniteType.required'=>'Please Select Product Name',
            'productPrice.required'=>'Please Enter Product Price',
            'updatedStock.required'=>'Please Update Stock'
        ];
    }
}
