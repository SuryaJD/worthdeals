<?php

namespace App\Http\Livewire\Sections;

use Livewire\Component;
use Illuminate\Support\Facades\Log;

class Productblock extends Component
{
    public $product;


    public function wishlist()
    {
        Log::info($this->product->name."Is liked");
    }


    public function render()
    {
        return view('livewire.sections.productblock');
    }
}
