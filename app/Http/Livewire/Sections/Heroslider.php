<?php

namespace App\Http\Livewire\Sections;

use App\Models\Product;
use Livewire\Component;

class Heroslider extends Component
{
    public $slides;
    
    public function mount()
    {
        $this->slides = Product::limit(5)->get();
    }

    public function render()
    {
        return view('livewire.sections.heroslider');
    }
}
