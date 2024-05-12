<?php

namespace App\Http\Requests\Evenement;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateEvenementRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'libelle' => ['required', 'string'],
			'description' => ['required', 'string'],
			'logitude' => ['nullable', 'string'],
			'latitude' => ['nullable', 'string'],
			'datePublication' => ['required', 'date'],
        ];
    }

    public function messages(): array
    {
        return [
            'libelle.required' => 'Le libellé est obligatoire',
            'libelle.string' => 'Le libellé doit être une chaîne de caractères',
            'description.required' => 'La description est obligatoire',
            'description.string' => 'La description doit être une chaîne de caractères',
            'logitude.string' => 'La longitude doit être une chaîne de caractères',
            'latitude.string' => 'La latitude doit être une chaîne de caractères',
            'datePublication.required' => 'La date de publication est obligatoire',
            'datePublication.date' => 'La date de publication doit être une date',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['errors' => $validator->errors()]));
    }
}
