<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class Grid extends Component
{

    public $grid;

    public function mount()
    {
        $this->grid = Category::all();
    }



    public function render()
    {
        return view('livewire.grid');
    }
}
