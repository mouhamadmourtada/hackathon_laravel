<?php

namespace App\Http\Requests\Pref;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePrefRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'user_id' => ['sometimes'],
			'produit_id' => ['sometimes'],
			'prix' => ['sometimes', 'numeric'],
        ];
    }
}
