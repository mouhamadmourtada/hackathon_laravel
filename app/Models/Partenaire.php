<?php

namespace App\Models;

use App\Filters\PartenaireFilters;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Partenaire extends Model
{
    use HasFactory, Filterable;

    protected string $default_filters = PartenaireFilters::class;

    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'nomStructure',
		'localisationStructure',
		'type_structure_id',
		'domaineActivite',
		'description',
		'slogan',
		'logo',
		'logitude',
		'latitude',
    ];

	public function typeStructure(): \Illuminate\Database\Eloquent\Relations\BelongsTo
	{
		return $this->belongsTo(\App\Models\TypeStructure::class, 'type_structure_id');
	}

}
