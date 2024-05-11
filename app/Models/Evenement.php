<?php

namespace App\Models;

use App\Filters\EvenementFilters;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Evenement extends Model
{
    use HasFactory, Filterable, SoftDeletes;

    protected string $default_filters = EvenementFilters::class;

    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'libelle',
		'description',
		'logitude',
		'latitude',
		'datePublication',
    ];


}
