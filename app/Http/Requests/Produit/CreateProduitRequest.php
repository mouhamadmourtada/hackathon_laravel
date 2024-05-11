<?php

namespace App\Http\Requests\Produit;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;                           

class CreateProduitRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'nom' => ['required', 'string'],
			'libelle' => ['required', 'string'],
			'description' => ['required', 'string'],
			'prixBase' => ['required', 'numeric'],
			'categorie_id' => ['required'],
			'typeQuantite' => ['required', 'string'],
        ];
    }

    public function messages(): array
    {
        return [
            'nom.required' => 'Le nom est obligatoire',
            'nom.string' => 'Le nom doit être une chaîne de caractères',
            'libelle.required' => 'Le libellé est obligatoire',
            'libelle.string' => 'Le libellé doit être une chaîne de caractères',
            'description.required' => 'La description est obligatoire',
            'description.string' => 'La description doit être une chaîne de caractères',
            'prixBase.required' => 'Le prix de base est obligatoire',
            'prixBase.numeric' => 'Le prix de base doit être un nombre',
            'categorie_id.required' => 'La catégorie est obligatoire',
            'typeQuantite.required' => 'Le type de quantité est obligatoire',
            'typeQuantite.string' => 'Le type de quantité doit être une chaîne de caractères',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['errors' => $validator->errors()]));
    }
}
