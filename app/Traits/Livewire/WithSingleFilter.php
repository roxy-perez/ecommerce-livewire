<?php

namespace App\Traits\Livewire;

use Illuminate\Support\Collection;
use App\Livewire\Shop\Filters\Filter;

/**
 * @mixin Filter
 * @property array $filter
 */
trait WithSingleFilter
{
 public function updatedFilter(): void
 {
  $this->applyFilters($this->filter);
 }
}
