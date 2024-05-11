<?php

namespace App\Http\Requests\Recette_produit;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRecette_produitRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'produit_id' => ['sometimes'],
			'recette_id' => ['sometimes'],
			'quantite' => ['sometimes', 'integer'],
        ];
    }
}
