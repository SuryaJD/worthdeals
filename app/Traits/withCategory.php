<?php

namespace App\Traits;

use App\Models\Category;

trait WithCategory
{
    public function categories()
    {
        return $this->morphToMany(Category::class, 'categoryable');
    }

}
