<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Deal;
use Illuminate\Support\Collection;
use Livewire\Component;

class CategoryPage extends Component
{

    public Category $category;

    public string $sort = 'rating';

    public array $sortOptions = ['newest','popular','rating','trending','price:Low to High','price:High To Low'];

    protected $queryString = ['sort'];


    public function mount(Category $category)
    {

        $this->category = $category->load(['products','deals']);

        if (true) {
            array_push($this->sortOptions,'commission');
        }

    }



    public function render()
    {
        return view('livewire.category-page');
    }
}
