<?php

namespace App\Http\Requests\ProduitVente;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateProduitVenteRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'libelle' => ['sometimes', 'string'],
			'produit_id' => ['sometimes'],
			'stock' => ['sometimes', 'integer'],
			'prixBase' => ['sometimes', 'numeric'],
			'prixVente' => ['sometimes', 'numeric'],
			'datePremption' => ['sometimes', 'date'],
			'categorie_id' => ['sometimes'],
			'vendeur_id' => ['sometimes'],
        ];
    }

	public function messages(): array
	{
		return [
			'libelle.string' => 'Le libellé doit être une chaîne de caractères',
			'stock.integer' => 'Le stock doit être un entier',
			'prixBase.numeric' => 'Le prix de base doit être un nombre',
			'prixVente.numeric' => 'Le prix de vente doit être un nombre',
			'datePremption.date' => 'La date de péremption doit être une date',
		];
	}

	public function failedValidation(Validator $validator)
	{
		throw new HttpResponseException(response()->json(['errors' => $validator->errors()]));
	}
}
