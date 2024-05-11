<?php

namespace App\Http\Resources\Paiement;

use Illuminate\Http\Resources\Json\JsonResource;

class PaiementResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'commande_id' => $this->commande_id,
			'datePaiement' => dateTimeFormat($this->datePaiement),
			'montat' => $this->montat,
			'modePaiement' => $this->modePaiement,
            'created_at' => dateTimeFormat($this->created_at),
            'updated_at' => dateTimeFormat($this->updated_at),
        ];
    }
}
