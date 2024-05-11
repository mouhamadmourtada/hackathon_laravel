<?php

namespace App\Models;

use App\Filters\ProduitVenteFilters;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProduitVente extends Model
{
    use HasFactory, Filterable, SoftDeletes;

    protected string $default_filters = ProduitVenteFilters::class;

    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'libelle',
		'produit_id',
		'stock',
		'prixBase',
		'prixVente',
		'datePremption',
		'categorie_id',
		'vendeur_id',
    ];
	public function produit(): \Illuminate\Database\Eloquent\Relations\BelongsTo
	{
		return $this->belongsTo(\App\Models\Produit::class);
	}

	public function categorie(): \Illuminate\Database\Eloquent\Relations\BelongsTo
	{
		return $this->belongsTo(\App\Models\Categorie::class);
	}

	public function vendeur(): \Illuminate\Database\Eloquent\Relations\BelongsTo
	{
		// return $this->belongsTo(\App\Models\User::class, "vendeur_id");
		return $this->belongsTo(\App\Models\User::class, "vendeur_id");
	}

}
