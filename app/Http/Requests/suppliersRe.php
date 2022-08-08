<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class suppliersRe extends FormRequest
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
            'supplierName' =>'required|string|regex:/^[\pL\s\-]+$/u',
            'supplierCompany' =>'required|string',
            'supplierContactNo' =>'required|string',
            'emailAddress' =>'required|string',
            'address' =>'required|string',
            'updateBalance' =>'required|numeric',
        ];
    }
    public function messages()
    {
        return [
            'supplierName.required' => 'Supplier Name is Required',
            'supplierCompany.srting' => 'Supplier Companyis Required',
            'supplierContactNo.srting' => 'Supplier ContactNo is Required',
            'emailAddress.srting' => 'Email Address Price is Required',
            'address.srting' => 'Address Must be Numeric',
            'updateBalance.numeric' => 'Update Balance Must be Numeric',

        ];
    }
}
