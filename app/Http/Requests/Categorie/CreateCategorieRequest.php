<?php

namespace App\Http\Requests\Categorie;

use Illuminate\Foundation\Http\FormRequest;

class CreateCategorieRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'libelle' => ['required', 'string'],
			'description' => ['required', 'string'],
        ];
    }
}
