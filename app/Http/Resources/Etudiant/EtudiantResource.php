<?php

namespace App\Http\Resources\Etudiant;

use Illuminate\Http\Resources\Json\JsonResource;

class EtudiantResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'nom' => $this->nom,
			'prenom' => $this->prenom,
			'ine' => $this->ine,
			'sexe' => $this->sexe,
			'dateNaissance' => dateTimeFormat($this->dateNaissance),
            'created_at' => dateTimeFormat($this->created_at),
            'updated_at' => dateTimeFormat($this->updated_at),
        ];
    }
}
