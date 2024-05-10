<?php

namespace App\Http\Requests\Etudiant;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateEtudiantRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'nom' => ['required', 'string'],
			'prenom' => ['required', 'string'],
			'ine' => ['required', 'string'],
			'sexe' => ['required', 'in:F,M'],
			'dateNaissance' => ['required', 'date'],
        ];
    }

    public function messages(): array
    {
        return [
            'nom.required' => 'Le nom est obligatoire',
            'nom.string' => 'Le nom doit être une chaine de caractères',
            'prenom.required' => 'Le prénom est obligatoire',
            'prenom.string' => 'Le prénom doit être une chaine de caractères',
            'ine.required' => 'L\'INE est obligatoire',
            'ine.string' => 'L\'INE doit être une chaine de caractères',
            'sexe.required' => 'Le sexe est obligatoire',
            'sexe.in' => 'Le sexe doit être F ou M',
            'dateNaissance.required' => 'La date de naissance est obligatoire',
            'dateNaissance.date' => 'La date de naissance doit être une date',
        ];
    }

    protected function failedValidation(Validator $validator)
    {

        // throw new HttpResponseException(response()->json(['errors' => $validator->failed()], 422));
        throw new HttpResponseException(response()->json(['errors' => $validator->errors()]));

    }

}
