<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterApiRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ];
    }

    public function messages() : array
    {
        return [
            'name.required' => 'le nom est obligatoire',
            'email.required' => 'le email est obligatoire',
            'email.email' => 'le email n\'est pas correct',
            'password.required' => 'le mot de passe est obligatoire',
            'password.min' => 'le mot de passe doit contenir au moins 6 caractères',
        ];
    }


    // public function failed
}
