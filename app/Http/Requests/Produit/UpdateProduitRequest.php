<?php

namespace App\Http\Requests\Produit;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateProduitRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'nom' => ['sometimes', 'string'],
			'libelle' => ['sometimes', 'string'],
			'description' => ['sometimes', 'string'],
			'prixBase' => ['sometimes', 'numeric'],
			'categorie_id' => ['sometimes'],
			'typeQuantite' => ['sometimes', 'string'],
        ];
    }

    public function messages(): array
    {
        return [
            'nom.string' => 'Le nom doit être une chaîne de caractères',
            'libelle.string' => 'Le libellé doit être une chaîne de caractères',
            'description.string' => 'La description doit être une chaîne de caractères',
            'prixBase.numeric' => 'Le prix de base doit être un nombre',
            'typeQuantite.string' => 'Le type de quantité doit être une chaîne de caractères',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['errors' => $validator->errors()]));
    }

}
