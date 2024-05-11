<?php

namespace App\Http\Requests\Paiement;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePaiementRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'commande_id' => ['sometimes'],
			'datePaiement' => ['sometimes', 'date'],
			'montat' => ['sometimes', 'numeric'],
			'modePaiement' => ['sometimes', 'string'],
        ];
    }
}
