<?php

namespace App\Http\Resources\PosteSocial;

use Illuminate\Http\Resources\Json\JsonResource;

class PosteSocialResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'libelle' => $this->libelle,
			'nom' => $this->nom,
			'description' => $this->description,
			'quantite' => $this->quantite,
			'datePoste' => dateTimeFormat($this->datePoste),
            'created_at' => dateTimeFormat($this->created_at),
            'updated_at' => dateTimeFormat($this->updated_at),
        ];
    }
}
