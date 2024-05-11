<?php

namespace App\Http\Requests\Commande;

use Illuminate\Foundation\Http\FormRequest;

class CreateCommandeRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'user_id' => ['required'],
			'produitVente_id' => ['required'],
			'quantite' => ['required', 'integer'],
			'dateAchat' => ['required', 'date'],
			'feedback' => ['required', 'integer'],
        ];
    }
}
