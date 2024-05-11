<?php

namespace App\Http\Requests\TypeStructure;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTypeStructureRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'libelle' => ['sometimes', 'string'],
			'description' => ['sometimes', 'string'],
        ];
    }
}
