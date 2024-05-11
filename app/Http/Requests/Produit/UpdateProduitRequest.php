<?php

namespace App\Http\Requests\Produit;

use Illuminate\Foundation\Http\FormRequest;

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
}
