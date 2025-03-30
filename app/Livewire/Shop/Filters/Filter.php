<?php

namespace App\Livewire\Shop\Filters;

use App\Livewire\Shop\Lists\ProductsList;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Livewire\Component;
use TKey;
use TValue;

class Filter extends Component
{
    public string $title;

    protected string $eloquentModel;

    /**
     * @return Collection<TKey,TValue>
     */
    public function models(): Collection
    {
        return collect();
    }

    /**
     * @param  array<int,mixed>  $filters
     */
    protected function applyFilters(array $filters): void
    {
        $this->dispatch('filters-updated', filters: $filters)->to(ProductsList::class);
    }

    public function render(): View
    {
        return view(
            'livewire.shop.filters.filter',
            [
                'models' => $this->models(),
                'alias' => Str::of(class_basename($this->eloquentModel))->lower(),
            ]
        );
    }
}
