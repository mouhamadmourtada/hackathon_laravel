<?php

namespace App\Http\Requests\Evenement;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateEvenementRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'libelle' => ['sometimes', 'string'],
			'description' => ['sometimes', 'string'],
			'logitude' => ['sometimes', 'string'],
			'latitude' => ['sometimes', 'string'],
			'datePublication' => ['sometimes', 'date'],
        ];
    }

    public function messages(): array
    {
        return [
            'libelle.string' => 'Le libellé doit être une chaîne de caractères',
            'description.string' => 'La description doit être une chaîne de caractères',
            'logitude.string' => 'La longitude doit être une chaîne de caractères',
            'latitude.string' => 'La latitude doit être une chaîne de caractères',
            'datePublication.date' => 'La date de publication doit être une date',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['errors' => $validator->errors()]));
    }
}
