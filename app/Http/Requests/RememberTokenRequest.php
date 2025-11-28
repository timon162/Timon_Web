<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RememberTokenRequest extends FormRequest
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
            'remember_token' => 'nullable|string',
        ];
    }

    public function messages(): array
    {
        return [
            'remember_token.string'    => 'remember_token must be a string!',
        ];
    }
}
