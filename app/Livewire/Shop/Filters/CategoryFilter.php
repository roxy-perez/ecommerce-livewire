<?php

namespace App\Livewire\Shop\Filters;

use Livewire\Component;
use App\Models\Category;
use App\Traits\Livewire\WithModelsFilter;
use App\Traits\Livewire\WithMultipleFilter;

class CategoryFilter extends Filter
{
    use WithModelsFilter;
    use WithMultipleFilter;

    public string $title = 'Categorías';
    public string $eloquentModel = Category::class;
}
