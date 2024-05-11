<?php

namespace App\Http\Requests\ProduitVente;

use Illuminate\Foundation\Http\FormRequest;

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
}
