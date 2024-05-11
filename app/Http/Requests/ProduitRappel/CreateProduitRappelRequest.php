<?php

namespace App\Http\Requests\ProduitRappel;

use Illuminate\Foundation\Http\FormRequest;

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
			'nomTypeProduit' => ['required', 'string'],
        ];
    }
}
