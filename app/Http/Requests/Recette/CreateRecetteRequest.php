<?php

namespace App\Http\Requests\Recette;

use Illuminate\Foundation\Http\FormRequest;

class CreateRecetteRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'libelle' => ['required', 'string'],
			'description' => ['required', 'string'],
        ];
    }
}
