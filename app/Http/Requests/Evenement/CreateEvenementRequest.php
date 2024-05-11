<?php

namespace App\Http\Requests\Evenement;

use Illuminate\Foundation\Http\FormRequest;

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
}
