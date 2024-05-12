<?php

namespace App\Http\Requests\PosteSocial;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreatePosteSocialRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'libelle' => ['required', 'string'],
			'nom' => ['required', 'string'],
			'description' => ['nullable', 'string'],
			'quantite' => ['required', 'integer'],
			'datePoste' => ['required', 'date'],
        ];
    }

    public function messages(): array
    {
        return [
            'libelle.required' => 'Le libellé est obligatoire',
            'libelle.string' => 'Le libellé doit être une chaîne de caractères',
            'nom.required' => 'Le nom est obligatoire',
            'nom.string' => 'Le nom doit être une chaîne de caractères',
            'description.string' => 'La description doit être une chaîne de caractères',
            'quantite.required' => 'La quantité est obligatoire',
            'quantite.integer' => 'La quantité doit être un entier',
            'datePoste.required' => 'La date du poste est obligatoire',
            'datePoste.date' => 'La date du poste doit être une date',
        ];
    } 

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['errors' => $validator->errors()]));
    }
}
