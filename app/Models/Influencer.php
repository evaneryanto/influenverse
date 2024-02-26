<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    ];
}
