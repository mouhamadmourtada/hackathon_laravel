<?php

namespace App\Http\Requests\PosteSocial;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdatePosteSocialRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'libelle' => ['sometimes', 'string'],
			'nom' => ['sometimes', 'string'],
			'description' => ['sometimes', 'string'],
			'quantite' => ['sometimes', 'integer'],
			'datePoste' => ['sometimes', 'date'],
        ];
    }

    public function messages(): array
    {
        return [
            'libelle.string' => 'Le libellé doit être une chaîne de caractères',
            'nom.string' => 'Le nom doit être une chaîne de caractères',
            'description.string' => 'La description doit être une chaîne de caractères',
            'quantite.integer' => 'La quantité doit être un entier',
            'datePoste.date' => 'La date du poste doit être une date',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['errors' => $validator->errors()]));
    }
}
