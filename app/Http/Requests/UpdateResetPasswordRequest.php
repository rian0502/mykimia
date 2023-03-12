<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateResetPasswordRequest extends FormRequest
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
            'token' => 'required|string',
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string|min:8|confirmed',
        ];
    }
    public function messages()
    {
        return [
            'token.required' => 'Token Harus diisi',
            'email.required' => 'Email Harus diisi',
            'email.email' => 'Email Tidak Valid',
            'email.exists' => 'Email Tidak Terdaftar',
            'password.required' => 'Password Harus diisi',
            'password.min' => 'Password Minimal 8 Karakter',
            'password.confirmed' => 'Password Tidak Sama',
            'password.string' => 'Password Harus Berupa String',
        ];
    }
    protected function prepareForValidation()
    {
        $input = $this->all();
        foreach ($input as $key => $value) {
            if (is_string($value)) {
                $input[$key] = strip_tags($value);
            }
        }
        $this->replace($input);
    }
}
