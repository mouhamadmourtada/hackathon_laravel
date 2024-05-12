<?php

namespace App\Http\Requests\Paiement;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

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

    public function messages(): array
    {
        return [
            'datePaiement.date' => 'La date de paiement doit être une date',
            'montat.numeric' => 'Le montant doit être un nombre',
            'modePaiement.string' => 'Le mode de paiement doit être une chaîne de caractères',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['errors' => $validator->errors()]));
    }
}
