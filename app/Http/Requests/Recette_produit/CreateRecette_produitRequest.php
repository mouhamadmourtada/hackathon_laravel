<?php

namespace App\Http\Requests\Recette_produit;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateRecette_produitRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'produit_id' => ['required'],
			'recette_id' => ['required'],
			'quantite' => ['required', 'integer'],
        ];
    }

    public function messages(): array
    {
        return [
            'produit_id.required' => 'Le produit est obligatoire',
            'recette_id.required' => 'La recette est obligatoire',
            'quantite.required' => 'La quantité est obligatoire',
            'quantite.integer' => 'La quantité doit être un entier',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['errors' => $validator->errors()]));
    }
}
