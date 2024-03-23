<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Brand extends Model
{
    use HasFactory;
    protected $filable = [
        'user_id',
        'company_name',
        'npwp',
        'profil_pic_path',
        'addres',
        'phone_number',
        'website',
        'province_id',
        'category_id',
    ];

    public function review_brands(): HasMany
    {
        return $this->hasMany(Review_Brand::class);
    }

    public function province(): BelongsTo{
        return $this->belongsTo(Province::class);
    }

    public function projects(){

    }

}
