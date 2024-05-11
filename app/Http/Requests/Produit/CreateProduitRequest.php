<?php

namespace App\Http\Requests\Produit;

use Illuminate\Foundation\Http\FormRequest;

class CreateProduitRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'nom' => ['required', 'string'],
			'libelle' => ['required', 'string'],
			'description' => ['required', 'string'],
			'prixBase' => ['required', 'numeric'],
			'categorie_id' => ['required'],
			'typeQuantite' => ['required', 'string'],
        ];
    }
}
