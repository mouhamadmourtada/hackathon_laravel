<?php

namespace App\Http\Requests\StructureSocial;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateStructureSocialRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'nom' => ['sometimes', 'string'],
			'adresse' => ['sometimes', 'string'],
			'num_telephone' => ['sometimes', 'string'],
			'email' => ['sometimes', 'email', 'string'],
        ];
    }

    public function messages(): array
    {
        return [
            'nom.string' => 'Le nom doit être une chaîne de caractères',
            'adresse.string' => 'L\'adresse doit être une chaîne de caractères',
            'num_telephone.string' => 'Le numéro de téléphone doit être une chaîne de caractères',
            'email.email' => 'L\'email doit être une adresse email',
            'email.string' => 'L\'email doit être une chaîne de caractères',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['errors' => $validator->errors()]));
    }
}
