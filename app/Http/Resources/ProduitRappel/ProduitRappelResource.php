<?php

namespace App\Http\Resources\ProduitRappel;

use Illuminate\Http\Resources\Json\JsonResource;

class ProduitRappelResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'libelle' => $this->libelle,
			'dateExpiration' => dateTimeFormat($this->dateExpiration),
			'quantite' => $this->quantite,
			'prixUnitaire' => $this->prixUnitaire,
			'marge' => $this->marge,
			'user_id' => $this->user_id,
			'produit_id' => $this->produit_id,
			'categorie_id' => $this->categorie_id,
			'nomTypeProduit' => $this->nomTypeProduit,
            'created_at' => dateTimeFormat($this->created_at),
            'updated_at' => dateTimeFormat($this->updated_at),
        ];
    }
}
