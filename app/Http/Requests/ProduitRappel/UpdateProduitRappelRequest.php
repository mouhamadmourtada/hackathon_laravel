<?php

namespace App\Http\Requests\ProduitRappel;

use Illuminate\Foundation\Http\FormRequest;

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
}
