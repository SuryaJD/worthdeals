<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;
use App\Traits\WithCategory;
use App\Models\User;

class Blog extends Model
{
    use HasFactory, HasTags, WithCategory;


    public function user()
    {
       return $this->belongsTo(User::class);
    }
}
