<?php

namespace App\Http\Requests\Recette;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRecetteRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'libelle' => ['sometimes', 'string'],
			'description' => ['sometimes', 'string'],
        ];
    }
}
