<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Content extends Model
{
    use HasFactory, SoftDeletes, \Parental\HasChildren;

    
    protected $casts = [
        'images' => 'array',
        'extra' => 'array',
    ];

    protected $fillable = ['type'];
    protected $childColumn = 'type';


    public function stores()
    {
        return $this->belongsToMany(Store::class);
    }
}
