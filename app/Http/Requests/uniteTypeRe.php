<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class uniteTypeRe extends FormRequest
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
            'uniteName'=>'required|string|regex:/^[\pL\s\-]+$/u',

        ];
    }
    public function messages()
    {
        return [
            'uniteName.required' => 'Unit Name is Required',
            'uniteName.srting' => 'Unit Name Must be String',

        ];
    }
}

