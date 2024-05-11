<?php

namespace App\Models;

use App\Filters\PosteSocialFilters;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PosteSocial extends Model
{
    use HasFactory, Filterable, SoftDeletes;

    protected string $default_filters = PosteSocialFilters::class;

    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'libelle',
		'nom',
		'description',
		'quantite',
		'datePoste',
    ];


}
