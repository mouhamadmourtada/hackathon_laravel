<?php

namespace App\Http\Resources\Recette_produit;

use Illuminate\Http\Resources\Json\JsonResource;

class Recette_produitResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'produit_id' => $this->produit_id,
			'recette_id' => $this->recette_id,
			'quantite' => $this->quantite,
            'created_at' => dateTimeFormat($this->created_at),
            'updated_at' => dateTimeFormat($this->updated_at),
        ];
    }
}
