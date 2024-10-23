<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Plank\Mediable\Mediable;

class ProductCategory extends Model
{
    use HasFactory;
    use Mediable;

    protected $fillable = [
        'name',
        'slug',
    ];
}
