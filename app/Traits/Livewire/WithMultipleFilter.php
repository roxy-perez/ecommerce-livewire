<?php

namespace App\Traits\Livewire;

use Illuminate\Support\Str;
use App\Livewire\Shop\Filters\Filter;

/**
 * @mixin Filter
 */
trait WithMultipleFilter
{
    public array $selectedModels = [];

    public function updatedSelectedModels(): void
    {
        $filters = [
            Str::of(class_basename($this->eloquentModel))->lower()->toString() =>  $this->selectedModels,
        ];

        $this->applyFilters($filters);
    }
}
