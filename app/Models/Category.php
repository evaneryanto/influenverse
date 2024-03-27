<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $fillable = [
        'name'
    ];

    public function influencers() : BelongsToMany
    {
        return $this->belongsToMany(Influencer::class);
    }

    public function brand(){
        return $this->belongsToMany(Brand::class,'brands');
    }
}
