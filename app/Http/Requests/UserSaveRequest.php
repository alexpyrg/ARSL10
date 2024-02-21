<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserSaveRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email|unique:users',
            'first_name' => 'required',
            'last_name' => 'required',
            'password' => 'required|confirmed|min:10'
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'You must user a valid E-mail!',
            'first_name.required' => 'You must put your First Name in!',
            'last_name.required' => 'You must put your Last Name in!',
            'password.required' => 'You must put a valid password in!'
        ];
    }
}
