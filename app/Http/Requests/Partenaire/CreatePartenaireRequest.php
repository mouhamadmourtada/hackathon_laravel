<?php

namespace App\Http\Requests\Partenaire;

use Illuminate\Foundation\Http\FormRequest;

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
}
