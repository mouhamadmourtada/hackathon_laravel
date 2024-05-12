<?php

namespace App\Http\Requests\StructureSocial;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateStructureSocialRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'nom' => ['required', 'string'],
			'adresse' => ['nullable', 'string'],
			'num_telephone' => ['required', 'string'],
			'email' => ['required', 'email', 'string'],
        ];
    }

    public function messages(): array
    {
        return [
            'nom.required' => 'Le nom est obligatoire',
            'nom.string' => 'Le nom doit être une chaîne de caractères',
            'adresse.string' => 'L\'adresse doit être une chaîne de caractères',
            'num_telephone.required' => 'Le numéro de téléphone est obligatoire',
            'num_telephone.string' => 'Le numéro de téléphone doit être une chaîne de caractères',
            'email.required' => 'L\'email est obligatoire',
            'email.email' => 'L\'email doit être une adresse email',
            'email.string' => 'L\'email doit être une chaîne de caractères',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['errors' => $validator->errors()]));
    }
}
