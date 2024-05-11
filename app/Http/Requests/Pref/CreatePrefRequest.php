<?php

namespace App\Http\Requests\Pref;

use Illuminate\Foundation\Http\FormRequest;

class CreatePrefRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'user_id' => ['required'],
			'produit_id' => ['required'],
			'prix' => ['required', 'numeric'],
        ];
    }
}
