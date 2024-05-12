<?php

namespace App\Http\Requests\Categorie;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateCategorieRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'libelle' => ['required', 'string'],
			'description' => ['required', 'string'],
        ];
    }

    public function messages(): array
    {
        return [
            'libelle.required' => 'Le libelle est obligatoire',
            'description.required' => 'La description est obligatoire',
        ];
    }

    protected function failedValidation(Validator $validator)
    {

        // throw new HttpResponseException(response()->json(['errors' => $validator->failed()], 422));
        throw new HttpResponseException(response()->json(['errors' => $validator->errors()]));

    }
}
