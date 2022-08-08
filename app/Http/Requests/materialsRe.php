<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class materialsRe extends FormRequest
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
            'materialsName'=>'required|string|regex:/^[\pL\s\-]+$/u',
            'materialsCode'=>'required|string',
            'materialsUnite'=>'required|string',
            'materialsUnitePrice'=>'required|numeric',
            'updateStock'=>'required|numeric',
        ];
    }
    public function messages()
    {
        return [
            'materialsName.required' => 'Materials Name is Required',
            'materialsCode.srting' => 'Materials Code is Required',
            'materialsUnite.srting' => 'Materials Unite is Required',
            'materialsUnitePrice.numeric' => 'Materials Unite Price is Required',
            'updateStock.srting' => 'Update Stock Must be Numeric',

        ];
    }
}
