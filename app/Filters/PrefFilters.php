<?php

namespace App\Filters;

use Essa\APIToolKit\Filters\QueryFilters;

class PrefFilters extends QueryFilters
{
    protected array $allowedFilters = [];

    protected array $columnSearch = [];
}
