<?php

namespace App\Http\Requests\Partenaire;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreatePartenaireRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'nomStructure' => ['required', 'string'],
			'localisationStructure' => ['required', 'string'],
			'typeStructure_id' => ['nullable'],
			'domaineActivite' => ['required', 'string'],
			'description' => ['required', 'string'],
			'slogan' => ['nullable', 'string'],
			'logo' => ['nullable', 'string'],
			'logitude' => ['nullable', 'string'],
			'latitude' => ['nullable', 'string'],
        ];
    }

	public function messages(): array
	{
		return [
			'nomStructure.required' => 'Le nom de la structure est obligatoire',
			'nomStructure.string' => 'Le nom de la structure doit être une chaîne de caractères',
			'localisationStructure.required' => 'La localisation de la structure est obligatoire',
			'localisationStructure.string' => 'La localisation de la structure doit être une chaîne de caractères',
			'typeStructure_id.required' => 'Le type de structure est obligatoire',
			'domaineActivite.required' => 'Le domaine d\'activité est obligatoire',
			'domaineActivite.string' => 'Le domaine d\'activité doit être une chaîne de caractères',
			'description.required' => 'La description est obligatoire',
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
