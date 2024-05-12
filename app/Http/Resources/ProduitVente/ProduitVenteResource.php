<?php

namespace App\Http\Resources\ProduitVente;

use Illuminate\Http\Resources\Json\JsonResource;

class ProduitVenteResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'libelle' => $this->libelle,
			'produit_id' => $this->produit_id,
			'stock' => $this->stock,
			'prixBase' => $this->prixBase,
			'prixVente' => $this->prixVente,
			'datePremption' => dateTimeFormat($this->datePremption),
			'categorie_id' => $this->categorie_id,
            'image' => $this->image,
            'lien_image' => $this->lien_image,
			'vendeur_id' => $this->vendeur_id,
            'created_at' => dateTimeFormat($this->created_at),
            'updated_at' => dateTimeFormat($this->updated_at),
        ];
    }
}
