<?php

namespace App\Models;

use App\Filters\Recette_produitFilters;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recette_produit extends Model
{
    use HasFactory, Filterable, SoftDeletes;

    protected string $default_filters = Recette_produitFilters::class;

    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'produit_id',
		'recette_id',
		'quantite',
    ];

	public function produit(): \Illuminate\Database\Eloquent\Relations\BelongsTo
	{
		return $this->belongsTo(\App\Models\Produit::class);
	}

	public function recette(): \Illuminate\Database\Eloquent\Relations\BelongsTo
	{
		return $this->belongsTo(\App\Models\Recette::class);
	}

}
