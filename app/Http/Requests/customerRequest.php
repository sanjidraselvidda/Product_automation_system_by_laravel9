<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class customerRequest extends FormRequest
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
            'customerName'=>'required|string|regex:/^[\pL\s\-]+$/u',
            'contactNo'=>'required|numeric',
            'emailId'=>'required|email',
            'cityLocation'=>'required|string',
            'address'=>'required|string',
            'updatedBalance'=>'required|numeric',

        ];
    }
    public function messages()
    {
        return [
            'customerName.required' => 'Please Fill The Name Field',
            'contactNo.required' => 'Please Enter Your Numbre',
            'emailId.required' => 'Email id Not Valid',
            'cityLocation.required' => 'Enter Your city name',
            'address.required' => 'Enter Your Address',
            'updateBalance.required' => 'Enter Your Update Balance'
        ];
    }
}
