<?php

namespace App\Models;

use App\Filters\PanierFilters;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Panier extends Model
{
    use HasFactory, Filterable, SoftDeletes;

    protected string $default_filters = PanierFilters::class;

    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
		'produitVente_id',
		'quantite',
    ];

	public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
	{
		return $this->belongsTo(\App\Models\User::class);
	}

	public function produitVente(): \Illuminate\Database\Eloquent\Relations\BelongsTo
	{
		return $this->belongsTo(\App\Models\ProduitVente::class);
	}

}
