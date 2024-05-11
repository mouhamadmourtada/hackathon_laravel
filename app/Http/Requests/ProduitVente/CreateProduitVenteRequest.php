<?php

namespace App\Http\Requests\ProduitVente;

use Illuminate\Foundation\Http\FormRequest;

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
}
