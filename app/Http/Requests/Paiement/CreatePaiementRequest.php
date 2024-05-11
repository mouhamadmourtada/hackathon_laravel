<?php

namespace App\Http\Requests\Paiement;

use Illuminate\Foundation\Http\FormRequest;

class CreatePaiementRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'commande_id' => ['required'],
			'datePaiement' => ['required', 'date'],
			'montat' => ['required', 'numeric'],
			'modePaiement' => ['required', 'string'],
        ];
    }
}
