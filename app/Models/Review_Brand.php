<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review_Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'review_brand_id',
        'brand_id',
        'influencer_id',
        'rating',
        'review',
    ];
}
