<?php

namespace App\Http\Resources\Panier;

use Illuminate\Http\Resources\Json\JsonResource;

class PanierResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
			'produitVente_id' => $this->produitVente_id,
			'quantite' => $this->quantite,
            'created_at' => dateTimeFormat($this->created_at),
            'updated_at' => dateTimeFormat($this->updated_at),
        ];
    }
}
