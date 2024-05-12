<?php

namespace App\Http\Requests\Recette;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateRecetteRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'libelle' => ['sometimes', 'string'],
			'description' => ['sometimes', 'string'],
        ];
    }

    public function messages(): array
    {
        return [
            'libelle.string' => 'Le libellé doit être une chaîne de caractères',
            'description.string' => 'La description doit être une chaîne de caractères',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['errors' => $validator->errors()]));
    }
}
