<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Content;

class Store extends Model
{
    use HasFactory, SoftDeletes;

    protected $casts = [
        'extra' => 'array',
    ];

    public function products()
    {
        return $this->belongsToMany(Content::class);
    }
}
