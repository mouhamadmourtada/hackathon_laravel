<?php

namespace App\Http\Requests\PosteSocial;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePosteSocialRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'libelle' => ['sometimes', 'string'],
			'nom' => ['sometimes', 'string'],
			'description' => ['sometimes', 'string'],
			'quantite' => ['sometimes', 'integer'],
			'datePoste' => ['sometimes', 'date'],
        ];
    }
}
