<?php

namespace App\Traits\Livewire;

use Illuminate\Support\Collection;
use App\Livewire\Shop\Filters\Filter;

/**
 * @mixin Filter
 */
trait WithModelsFilter
{
    public function models(): Collection
    {
        return app($this->eloquentModel)->query()
            ->withCount("products")
            ->get();
    }
}
