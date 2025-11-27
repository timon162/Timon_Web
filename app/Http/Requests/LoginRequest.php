<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required|string',
            'is_remember' => 'boolean',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'chưa nhập email',
            'email.email' => 'email sai định dạng',
            'password.required' => 'chưa nhập password',
            'password.string' => 'password không đúng định dạng',
            'is_remember.boolean' => 'is_remember sai định dạng',
        ];
    }
}
