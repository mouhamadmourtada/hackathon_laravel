<?php

namespace App\Http\Requests\Recette_produit;

use Illuminate\Foundation\Http\FormRequest;

class CreateRecette_produitRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'produit_id' => ['required'],
			'recette_id' => ['required'],
			'quantite' => ['required', 'integer'],
        ];
    }
}
