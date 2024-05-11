<?php

namespace App\Http\Resources\Evenement;

use Illuminate\Http\Resources\Json\JsonResource;

class EvenementResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'libelle' => $this->libelle,
			'description' => $this->description,
			'logitude' => $this->logitude,
			'latitude' => $this->latitude,
			'datePublication' => dateTimeFormat($this->datePublication),
            'created_at' => dateTimeFormat($this->created_at),
            'updated_at' => dateTimeFormat($this->updated_at),
        ];
    }
}
