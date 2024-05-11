<?php

namespace App\Http\Requests\Panier;

use Illuminate\Foundation\Http\FormRequest;

class CreatePanierRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'user_id' => ['required'],
			'produitVente_id' => ['required'],
			'quantite' => ['required', 'integer'],
        ];
    }
}
