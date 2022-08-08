<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productSaleRequest extends FormRequest
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
            'selectCustomer'=>'required|string|regex:/^[\pL\s\-]+$/u',
            'selectProduct'=>'required|string',
            'productPrice'=>'required|numeric',
            'entryQuantity'=>'required|numeric',
            'totalAmount'=>'required|numeric',
            'entryDate'=>'required',
            

        ];
    }
    public function messages()
    {
        return [
            'selectCustomer.required' => 'Please select customer',
            'selectProduct.required' => 'Please Select Product',
            'productPrice.required' => 'Please Enter Product Price',
            'entryQuantity.required' => 'Please Enter Quantity',
            'totalAmount.required' => 'Enter Totall Amount',
            'entryDate.required' => 'Enter Entry Date'
            
        ];
    }
}
