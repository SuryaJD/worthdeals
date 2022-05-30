<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductGrid extends Component
{
    public Product $product;

    public function mount(Product $product)
    {
        $this->product = $product;
    }

    public function render()
    {
        return view('livewire.product-grid');
    }
}
