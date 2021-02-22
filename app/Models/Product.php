<?php

namespace App\Models;

use Laravelista\Comments\Commentable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Store;
Use App\Models\Content;
use App\Traits\WithCategory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Content
{
    use HasFactory, SoftDeletes, \Parental\HasParent, Commentable, WithCategory;
}
 