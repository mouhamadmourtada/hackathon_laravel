<?php

namespace App\Http\Resources\Pref;

use Illuminate\Http\Resources\Json\JsonResource;

class PrefResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
			'produit_id' => $this->produit_id,
			'prix' => $this->prix,
            'created_at' => dateTimeFormat($this->created_at),
            'updated_at' => dateTimeFormat($this->updated_at),
        ];
    }
}
