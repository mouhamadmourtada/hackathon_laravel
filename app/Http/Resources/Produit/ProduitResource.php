<?php

namespace App\Http\Resources\Produit;

use Illuminate\Http\Resources\Json\JsonResource;

class ProduitResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'nom' => $this->nom,
			'libelle' => $this->libelle,
			'description' => $this->description,
			'prixBase' => $this->prixBase,
			'categorie_id' => $this->categorie_id,
			'typeQuantite' => $this->typeQuantite,
            'created_at' => dateTimeFormat($this->created_at),
            'updated_at' => dateTimeFormat($this->updated_at),
        ];
    }
}
