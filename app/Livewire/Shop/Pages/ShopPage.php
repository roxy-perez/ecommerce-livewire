<?php

namespace App\Livewire\Shop\Pages;

use App\Models\Product;
use Illuminate\View\View;
use Livewire\Component;

class ShopPage extends Component
{
    public function resetFilters(): void
    {
        dd('hello');
    }
    public function render(): View
    {
        $product = Product::first();
        return view('livewire.shop.pages.shop-page', compact('product'));
    }
}
