<?php

namespace App\Http\Requests\Api;


class LoginRequest extends ApiRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email requerido',
            'email.email' => 'Email no válido',
            'password.required' => 'Contraseña requerida',
        ];
    }
}
