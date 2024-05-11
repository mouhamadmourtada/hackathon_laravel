<?php

namespace App\Filters;

use Essa\APIToolKit\Filters\QueryFilters;

class RecetteFilters extends QueryFilters
{
    protected array $allowedFilters = [];

    protected array $columnSearch = [];
}
