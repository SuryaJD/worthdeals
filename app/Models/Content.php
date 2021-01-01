<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \Spatie\Tags\HasTags;
use Illuminate\Support\Arr;

class Content extends Model
{
    use HasFactory, SoftDeletes, \Parental\HasChildren, HasTags;

    
    protected $casts = [
        'images' => 'array',
        'extra' => 'array',
        'offers' => 'array',
        'start_date' => 'datetime',
        'expiry_date' => 'datetime'
    ];

    protected $fillable = ['type'];
    protected $childColumn = 'type';


    public function stores()
    {
        return $this->belongsToMany(Store::class);
    }

    public function getDisplayPicAttribute()
    {
        if (isset($this->featured_image)) {
            return $this->featured_image;
        }elseif (isset($this->images['800x800'])) {
            return $this->images['800x800'];
        }elseif (count($this->images) > 0) {
            return Arr::first($this->images);
        }else{
            return config('worthdeals.default.images.featured');
        }
    }
}
