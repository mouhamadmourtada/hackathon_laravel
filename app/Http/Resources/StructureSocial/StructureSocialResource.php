<?php

namespace App\Http\Resources\StructureSocial;

use Illuminate\Http\Resources\Json\JsonResource;

class StructureSocialResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'nom' => $this->nom,
			'adresse' => $this->adresse,
			'num_telephone' => $this->num_telephone,
			'email' => $this->email,
            'created_at' => dateTimeFormat($this->created_at),
            'updated_at' => dateTimeFormat($this->updated_at),
        ];
    }
}
