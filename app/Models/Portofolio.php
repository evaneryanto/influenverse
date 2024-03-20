<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable = [
        'influencer_id',
        'name',
        'description',
        'platform',
        'url'
    ];

    public function influencer()
    {
        return $this-> belongsTo(Influencer::class);
    }
}
