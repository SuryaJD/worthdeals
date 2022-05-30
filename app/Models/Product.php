<?php

namespace App\Models;

use Laravelista\Comments\Commentable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Store;
use App\Traits\WithCategory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Tags\HasTags;

class Product extends Model
{
    use HasFactory, 
        SoftDeletes,
        HasTags, 
        Commentable, 
        WithCategory;
    
    protected $casts = [
        'images' => 'array',
        'extra' => 'array',
        'offers' => 'array',
        'start_date' => 'datetime',
        'expiry_date' => 'datetime'
    ];

    public function stores()
    {
        return $this->belongsToMany(Store::class);
    }

    public function categories()
    {
        return $this->morphToMany(Category::class, 'categoryable');
    }


}
 