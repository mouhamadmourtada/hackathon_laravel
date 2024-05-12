<?php

namespace App\Http\Requests\Commande;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

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
    
    public function messages(): array
    {
        return [
            'user_id.required' => 'L\'utilisateur est obligatoire',
            'produitVente_id.required' => 'Le produit est obligatoire',
            'quantite.required' => 'La quantité est obligatoire',
            'quantite.integer' => 'La quantité doit être un entier',
            'dateAchat.required' => 'La date d\'achat est obligatoire',
            'dateAchat.date' => 'La date d\'achat doit être une date',
            'feedback.required' => 'Le feedback est obligatoire',
            'feedback.integer' => 'Le feedback doit être un entier',
        ];
    }

    protected function failedValidation(Validator $validator)
    {

        // throw new HttpResponseException(response()->json(['errors' => $validator->failed()], 422));
        throw new HttpResponseException(response()->json(['errors' => $validator->errors()]));

    }
}
