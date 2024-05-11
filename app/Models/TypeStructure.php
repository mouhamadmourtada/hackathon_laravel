<?php

namespace App\Models;

use App\Filters\TypeStructureFilters;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class TypeStructure extends Model
{
    use HasFactory, Filterable;
    protected $table = "type_structures";

    protected string $default_filters = TypeStructureFilters::class;

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
