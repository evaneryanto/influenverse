<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'province',
        'category_id',
    ];
}
