<?php

namespace App\Http\Requests\Paiement;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

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

    public function messages(): array
    {
        return [
            'commande_id.required' => 'La commande est obligatoire',
            'datePaiement.required' => 'La date de paiement est obligatoire',
            'datePaiement.date' => 'La date de paiement doit être une date',
            'montat.required' => 'Le montant est obligatoire',
            'montat.numeric' => 'Le montant doit être un nombre',
            'modePaiement.required' => 'Le mode de paiement est obligatoire',
            'modePaiement.string' => 'Le mode de paiement doit être une chaîne de caractères',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['errors' => $validator->errors()]));
    }               
}
