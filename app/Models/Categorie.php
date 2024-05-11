<?php

namespace App\Models;

use App\Filters\CategorieFilters;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Categorie extends Model
{
    use HasFactory, Filterable;

    protected string $default_filters = CategorieFilters::class;

    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'libelle',
		'description',
    ];


}
