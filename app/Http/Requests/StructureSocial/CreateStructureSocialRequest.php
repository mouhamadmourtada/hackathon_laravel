<?php

namespace App\Http\Requests\StructureSocial;

use Illuminate\Foundation\Http\FormRequest;

class CreateStructureSocialRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'nom' => ['required', 'string'],
			'adresse' => ['nullable', 'string'],
			'num_telephone' => ['required', 'string'],
			'email' => ['required', 'email', 'string'],
        ];
    }
}
