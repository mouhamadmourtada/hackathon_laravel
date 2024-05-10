<?php

namespace App\Http\Requests\Etudiant;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEtudiantRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'nom' => ['sometimes', 'string'],
			'prenom' => ['sometimes', 'string'],
			'ine' => ['sometimes', 'string'],
			'sexe' => ['sometimes', 'in:F,M'],
			'dateNaissance' => ['sometimes', 'date'],
        ];
    }
}
