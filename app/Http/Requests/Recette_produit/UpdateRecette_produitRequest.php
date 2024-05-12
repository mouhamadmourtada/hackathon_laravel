<?php

namespace App\Http\Requests\Recette_produit;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateRecette_produitRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'produit_id' => ['sometimes'],
			'recette_id' => ['sometimes'],
			'quantite' => ['sometimes', 'integer'],
        ];
    }

    public function messages(): array
    {
        return [
            'quantite.integer' => 'La quantité doit être un entier',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['errors' => $validator->errors()]));
    }
}
