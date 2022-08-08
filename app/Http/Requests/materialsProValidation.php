<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class materialsProValidation extends FormRequest
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
            'selectSupplier'=>'required|string|regex:/^[\pL\s\-]+$/u',
            'selectMaterials'=>'required|string',
            'uniteType'=>'required|numeric',
            'unitePrice'=>'required|numeric',
            'quantity'=>'required|numeric',
            'totalPrice'=>'required|numeric'
        ];
    }
    public function messages(){
        return [
            'selectSupplier.required'=>'Please Enter Supplier Name',
            'selectMaterials.required'=>'Please Select Materials Name',
            'uniteType.required'=>'Please Enter Unite Type',
            'unitePrice.required'=>'Please Update Stock',
            'quantity.required'=>'Please Enter Quantity',
            'totalPrice.required'=>'Please Enter Total Price'
        ];
    }
}
