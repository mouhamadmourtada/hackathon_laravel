<?php

namespace App\Http\Requests\Panier;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

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

    public function messages(): array
    {
        return [
            'user_id.required' => 'L\'utilisateur est obligatoire',
            'produitVente_id.required' => 'Le produit en vente est obligatoire',
            'quantite.required' => 'La quantité est obligatoire',
            'quantite.integer' => 'La quantité doit être un entier',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['errors' => $validator->errors()]));
    }
}
