<?php

namespace App\Http\Requests\ProduitRappel;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateProduitRappelRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'libelle' => ['sometimes', 'string'],
			'dateExpiration' => ['sometimes', 'date'],
			'quantite' => ['sometimes', 'integer'],
			'prixUnitaire' => ['sometimes', 'numeric'],
			'marge' => ['sometimes', 'integer'],
			'user_id' => ['sometimes'],
			'produit_id' => ['sometimes'],
			'categorie_id' => ['sometimes'],
			'nomTypeProduit' => ['sometimes', 'string'],
        ];
    }

	public function messages(): array
	{
		return [
			'libelle.string' => 'Le libellé doit être une chaîne de caractères',
			'dateExpiration.date' => 'La date d\'expiration doit être une date',
			'quantite.integer' => 'La quantité doit être un entier',
			'prixUnitaire.numeric' => 'Le prix unitaire doit être un nombre',
			'marge.integer' => 'La marge doit être un entier',
			'nomTypeProduit.string' => 'Le nom du type de produit doit être une chaîne de caractères',
		];
	}

	public function failedValidation(Validator $validator)
	{
		throw new HttpResponseException(response()->json(['errors' => $validator->errors()]));
	}
}
