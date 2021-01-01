<?php

namespace App\Http\Livewire\Sections;

use App\Models\Product;
use Livewire\Component;

class Productslider extends Component
{
    public $category;

    public function mount($category)
    {
        $this->category = $category;
    }    

    public function render()
    {
        return view('livewire.sections.productslider',[
            'products' => Product::withAnyTags([$this->category])->limit(15)->get(),
            'category' => $this->category,
        ]);
    }
}
