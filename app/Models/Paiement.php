<?php

namespace App\Models;

use App\Filters\PaiementFilters;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paiement extends Model
{
    use HasFactory, Filterable, SoftDeletes;

    protected string $default_filters = PaiementFilters::class;

    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'commande_id',
		'datePaiement',
		'montat',
		'modePaiement',
    ];

	public function commande(): \Illuminate\Database\Eloquent\Relations\BelongsTo
	{
		return $this->belongsTo(\App\Models\Commande::class);
	}

}
