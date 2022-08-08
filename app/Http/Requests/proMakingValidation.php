<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class proMakingValidation extends FormRequest
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
            'selectProduct'=>'required|string|regex:/^[\pL\s\-]+$/u',
            'selectMaterials'=>'required|string',
            'materialsQuantity'=>'required|numeric',
        ];
    }
    public function messages(){
        return [
            'selectProduct.required'=>'Please Enter Product Name',
            'selectMaterials.required'=>'Please Select Materials Name',
            'materialsQuantity.required'=>'Please Enter Materials Quantity',
        ];
    }
}
