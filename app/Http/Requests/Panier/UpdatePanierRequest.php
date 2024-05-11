<?php

namespace App\Http\Requests\Panier;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePanierRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'user_id' => ['sometimes'],
			'produitVente_id' => ['sometimes'],
			'quantite' => ['sometimes', 'integer'],
        ];
    }
}
