<?php

namespace App\Models;

use App\Filters\RecetteFilters;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Recette extends Model
{
    use HasFactory, Filterable;

    protected string $default_filters = RecetteFilters::class;

    /**
     * Mass-assignable attributes.
     *
     * @var array
     */

    // une recette a plusieurs produits
    public function produits(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(\App\Models\Produit::class, 'recette_produits', 'recette_id', 'produit_id')
            ->withPivot('quantite');
    }
    protected $fillable = [
        'libelle',
		'description',
    ];


}
