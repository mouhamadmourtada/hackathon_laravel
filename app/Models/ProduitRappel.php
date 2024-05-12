<?php

namespace App\Models;

use App\Filters\ProduitRappelFilters;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProduitRappel extends Model
{
    use HasFactory, Filterable, SoftDeletes;

	protected $table = 'produitrappels';
	
    protected string $default_filters = ProduitRappelFilters::class;

    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'libelle',
		'dateExpiration',
		'quantite',
		'prixUnitaire',
		'marge',
		'user_id',
		'produit_id',
		'categorie_id',
		'nomTypeProduit',
    ];

	public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
	{
		return $this->belongsTo(\App\Models\User::class);
	}

	public function produit(): \Illuminate\Database\Eloquent\Relations\BelongsTo
	{
		return $this->belongsTo(\App\Models\Produit::class);
	}

	public function categorie(): \Illuminate\Database\Eloquent\Relations\BelongsTo
	{
		return $this->belongsTo(\App\Models\Categorie::class);
	}

}
