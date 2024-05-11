<?php

namespace App\Http\Resources\Commande;

use Illuminate\Http\Resources\Json\JsonResource;

class CommandeResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
			'produitVente_id' => $this->produitVente_id,
			'quantite' => $this->quantite,
			'dateAchat' => dateTimeFormat($this->dateAchat),
			'feedback' => $this->feedback,
            'created_at' => dateTimeFormat($this->created_at),
            'updated_at' => dateTimeFormat($this->updated_at),
        ];
    }
}
