<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ranker extends Model
{
    use HasFactory, \Spatie\Tags\HasTags;

    protected $table = "toplists"; 
}
