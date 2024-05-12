<?php

namespace App\Http\Requests\ProduitVente;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateProduitVenteRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'libelle' => ['required', 'string'],
			'produit_id' => ['required'],
			'stock' => ['required', 'integer'],
			'prixBase' => ['required', 'numeric'],
			'prixVente' => ['required', 'numeric'],
			'datePremption' => ['required', 'date'],
			'categorie_id' => ['nullable'],
			'vendeur_id' => ['required'],
        ];
    }

	public function messages(): array
	{
		return [
			'libelle.required' => 'Le libellé est obligatoire',
			'libelle.string' => 'Le libellé doit être une chaîne de caractères',
			'produit_id.required' => 'Le produit est obligatoire',
			'stock.required' => 'Le stock est obligatoire',
			'stock.integer' => 'Le stock doit être un entier',
			'prixBase.required' => 'Le prix de base est obligatoire',
			'prixBase.numeric' => 'Le prix de base doit être un nombre',
			'prixVente.required' => 'Le prix de vente est obligatoire',
			'prixVente.numeric' => 'Le prix de vente doit être un nombre',
			'datePremption.required' => 'La date de péremption est obligatoire',
			'datePremption.date' => 'La date de péremption doit être une date',
			'categorie_id.required' => 'La catégorie est obligatoire',
			'vendeur_id.required' => 'Le vendeur est obligatoire',
		];
	}

	public function failedValidation(Validator $validator)
	{
		throw new HttpResponseException(response()->json(['errors' => $validator->errors()]));
	}
}
