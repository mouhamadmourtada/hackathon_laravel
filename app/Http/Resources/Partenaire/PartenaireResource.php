<?php

namespace App\Http\Resources\Partenaire;

use Illuminate\Http\Resources\Json\JsonResource;

class PartenaireResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'nomStructure' => $this->nomStructure,
			'localisationStructure' => $this->localisationStructure,
			'type_structure_id' => $this->typeStructure_id,
			'domaineActivite' => $this->domaineActivite,
			'description' => $this->description,
			'slogan' => $this->slogan,
			'logo' => $this->logo,
			'logitude' => $this->logitude,
			'latitude' => $this->latitude,
            'created_at' => dateTimeFormat($this->created_at),
            'updated_at' => dateTimeFormat($this->updated_at),
        ];
    }
}
