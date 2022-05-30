<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $casts = [
        'banners' => 'array',
        'extra' => 'array',
    ];


    public function products()
    {
        return $this->morphedByMany(Product::class, 'categoryable');
    }

    public function deals()
    {
        return $this->morphedByMany(Deal::class,'categoryable');
    }


    public function blogs()
    {
        return $this->morphedByMany(Product::class, 'categoryable');
    }
}
