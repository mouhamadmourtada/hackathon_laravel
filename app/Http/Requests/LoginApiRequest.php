<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class LoginApiRequest extends FormRequest
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
            'email' => 'required|string|email',
            'password' => 'required|string',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        // en français
        return [
            'email.required' => 'Le champ email est obligatoire',
            'email.email' => 'Le champ email doit être une adresse email valide',
            'password.required' => 'Le champ mot de passe est obligatoire', 
        ];
    }

    protected function failedValidation(Validator $validator)
    {

        // throw new HttpResponseException(response()->json(['errors' => $validator->failed()], 422));
        throw new HttpResponseException(response()->json(['errors' => $validator->errors()]));

    }



}
