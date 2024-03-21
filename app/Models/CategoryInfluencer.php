<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryInfluencer extends Model
{
    use HasFactory;
    protected $table = 'category_influencer';
    protected $fillable = [
        'category_id',
        'influencer_id'
    ];
}