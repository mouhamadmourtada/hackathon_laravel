<?php

namespace App\Http\Requests\Commande;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCommandeRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'user_id' => ['sometimes'],
			'produitVente_id' => ['sometimes'],
			'quantite' => ['sometimes', 'integer'],
			'dateAchat' => ['sometimes', 'date'],
			'feedback' => ['sometimes', 'integer'],
        ];
    }
}
