<?php

namespace App\Http\Requests\Partenaire;

use Illuminate\Foundation\Http\FormRequest;

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
}
