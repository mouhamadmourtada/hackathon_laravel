<?php

namespace App\Models;

use App\Filters\ProduitFilters;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produit extends Model
{
    use HasFactory, Filterable, SoftDeletes;

    protected string $default_filters = ProduitFilters::class;

    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'nom',
		'libelle',
		'description',
		'prixBase',
		'categorie_id',
		'typeQuantite',
    ];

    // un produit a plusieurs recettes
    public function recettes(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(\App\Models\Recette::class, 'recette_produits', 'produit_id', 'recette_id')
            ->withPivot('quantite');
    }

	public function categorie(): \Illuminate\Database\Eloquent\Relations\BelongsTo
	{
		return $this->belongsTo(\App\Models\Categorie::class);
	}

}
