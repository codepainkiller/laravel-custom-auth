<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nombre requerido',
            'email.required' => 'Email requerido',
            'email.email' => 'Email no válido',
            'email.unique' => 'Este email ya esta en uso',
            'password.required' => 'Contraseña requerida',
            'password.min' => 'Debe tener al menos 6 caracteres.',
            'password.confirmed' => 'La contraseña no coincide',
        ];
    }
}
