<?php

namespace App\Http\Requests\Partenaire;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdatePartenaireRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'nomStructure' => ['sometimes', 'string'],
			'localisationStructure' => ['sometimes', 'string'],
			'typeStructure_id' => ['sometimes'],
			'domaineActivite' => ['sometimes', 'string'],
			'description' => ['sometimes', 'string'],
			'slogan' => ['sometimes', 'string'],
			'logo' => ['sometimes', 'string'],
			'logitude' => ['sometimes', 'string'],
			'latitude' => ['sometimes', 'string'],
        ];
    }

	public function messages(): array 
	{
		return [
			'nomStructure.string' => 'Le nom de la structure doit être une chaîne de caractères',
			'localisationStructure.string' => 'La localisation de la structure doit être une chaîne de caractères',
			'typeStructure_id.required' => 'Le type de structure est obligatoire',
			'domaineActivite.string' => 'Le domaine d\'activité doit être une chaîne de caractères',
			'description.string' => 'La description doit être une chaîne de caractères',
			'slogan.string' => 'Le slogan doit être une chaîne de caractères',
			'logo.string' => 'Le logo doit être une chaîne de caractères',
			'logitude.string' => 'La longitude doit être une chaîne de caractères',
			'latitude.string' => 'La latitude doit être une chaîne de caractères',
		];
	}

	public function failedValidation(Validator $validator)
	{
		throw new HttpResponseException(response()->json(['errors' => $validator->errors()]));
	}
}
