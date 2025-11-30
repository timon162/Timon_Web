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
            'id' => 'required',
            'name' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric'
        ];
    }

    public function messages(): array
    {
        return [
            'id.required' => 'id required',
            'name.required'    => 'name required',
            'name.string'    => 'name string',
            'price.required'    => 'price required',
            'price.numeric'    => 'price numeric',
            'quantity.required'    => 'quantity required',
            'quantity.numeric'    => 'quantity numeric',
        ];
    }
}
