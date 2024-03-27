<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryBrand extends Model
{
    use HasFactory;

    protected $table = 'category_brand';
    protected $fillable = [
        'brand_id',
        'category_id',
    ];


}
