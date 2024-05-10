<?php

namespace App\Models;

use App\Filters\EtudiantFilters;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Etudiant extends Model
{
    use HasFactory, Filterable, SoftDeletes;

    protected string $default_filters = EtudiantFilters::class;

    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'nom',
		'prenom',
		'ine',
		'sexe',
		'dateNaissance',
    ];


}
