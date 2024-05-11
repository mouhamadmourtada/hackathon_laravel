<?php

namespace App\Http\Requests\StructureSocial;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStructureSocialRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'nom' => ['sometimes', 'string'],
			'adresse' => ['sometimes', 'string'],
			'num_telephone' => ['sometimes', 'string'],
			'email' => ['sometimes', 'email', 'string'],
        ];
    }
}
