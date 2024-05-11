<?php

namespace App\Models;

use App\Filters\StructureSocialFilters;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class StructureSocial extends Model
{
    use HasFactory, Filterable;

    protected string $default_filters = StructureSocialFilters::class;

    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'nom',
		'adresse',
		'num_telephone',
		'email',
        
    ];


}
