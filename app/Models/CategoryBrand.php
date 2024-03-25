<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryBrand extends Model
{
    use HasFactory;

    protected $table = 'category_brand';
    protected $fillable = [
        'category_id',
        'brand_id'
    ];

    public function brand(){
        return $this->belongsToMany(Brand::class,'category_brand');
    }
}
