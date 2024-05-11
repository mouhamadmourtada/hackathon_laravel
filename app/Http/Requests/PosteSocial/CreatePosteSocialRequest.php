<?php

namespace App\Http\Requests\PosteSocial;

use Illuminate\Foundation\Http\FormRequest;

class CreatePosteSocialRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'libelle' => ['required', 'string'],
			'nom' => ['required', 'string'],
			'description' => ['nullable', 'string'],
			'quantite' => ['required', 'integer'],
			'datePoste' => ['required', 'date'],
        ];
    }
}
