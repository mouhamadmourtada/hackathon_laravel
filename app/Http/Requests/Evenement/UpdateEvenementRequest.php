<?php

namespace App\Http\Requests\Evenement;

use Illuminate\Foundation\Http\FormRequest;

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
}
