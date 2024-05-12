<?php

namespace App\Http\Requests\ProduitRappel;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateProduitRappelRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'libelle' => ['required', 'string'],
			'dateExpiration' => ['required', 'date'],
			'quantite' => ['required', 'integer'],
			'prixUnitaire' => ['required', 'numeric'],
			'marge' => ['required', 'integer'],
			'user_id' => ['required'],
			'produit_id' => ['required'],
			'categorie_id' => ['required'],
			// 'nomTypeProduit' => ['required', 'string'],
        ];
    }

	public function messages(): array
	{
		return [
			'libelle.required' => 'Le libellé est obligatoire',
			'libelle.string' => 'Le libellé doit être une chaîne de caractères',
			'dateExpiration.required' => 'La date d\'expiration est obligatoire',
			'dateExpiration.date' => 'La date d\'expiration doit être une date',
			'quantite.required' => 'La quantité est obligatoire',
			'quantite.integer' => 'La quantité doit être un entier',
			'prixUnitaire.required' => 'Le prix unitaire est obligatoire',
			'prixUnitaire.numeric' => 'Le prix unitaire doit être un nombre',
			'marge.required' => 'La marge est obligatoire',
			'marge.integer' => 'La marge doit être un entier',
			'user_id.required' => 'L\'utilisateur est obligatoire',
			'produit_id.required' => 'Le produit est obligatoire',
			'categorie_id.required' => 'La catégorie est obligatoire',
			// 'nomTypeProduit.required' => 'Le nom du type de produit est obligatoire',
			// 'nomTypeProduit.string' => 'Le nom du type de produit doit être une chaîne de caractères',
		];
	}

	public function failedValidation(Validator $validator)
	{
		throw new HttpResponseException(response()->json(['errors' => $validator->errors()]));
	}
}
