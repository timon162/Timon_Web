<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'imageProduct' => 'required',
            'nameProduct' => 'required|string',
            'priceProduct' => 'required|numeric',
            'quantityProduct' => 'required|integer'
        ];
    }

    public function messages(): array
    {
        return [
            'imageProduct.required' => 'image required',
            'nameProduct.required'    => 'name required',
            'nameProduct.string'    => 'name string',
            'priceProduct.required'    => 'price required',
            'priceProduct.numeric'    => 'price numeric',
            'quantityProduct.required'    => 'quantity required',
            'quantityProduct.integer'    => 'quantity numeric',
        ];
    }
}
