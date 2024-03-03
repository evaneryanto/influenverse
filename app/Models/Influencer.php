<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Influencer extends Model
{
    use HasFactory;
    protected $fillable = [
        'birth_date',
        'gender',
        'about_me',
        'profile_picture_path',
        'address',
        'is_married',
        'province_id',
        'user_id',
        'phone_number'
    ];


    public function province() : BelongsTo
    {
        return $this->belongsTo(Province::class);
    }

    public function categories() : BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

}
