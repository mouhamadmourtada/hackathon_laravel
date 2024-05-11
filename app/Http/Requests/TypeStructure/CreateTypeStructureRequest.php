<?php

namespace App\Http\Requests\TypeStructure;

use Illuminate\Foundation\Http\FormRequest;

class CreateTypeStructureRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'libelle' => ['required', 'string'],
			'description' => ['required', 'string'],
        ];
    }
}
