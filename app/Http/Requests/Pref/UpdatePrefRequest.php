<?php

namespace App\Http\Requests\Pref;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

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

    public function messages(): array
    {
        return [
            'prix.numeric' => 'Le prix doit être un nombre',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['errors' => $validator->errors()]));
    }
}
