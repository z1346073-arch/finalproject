<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Zone extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price_range',
        'image',
    ];

    public function attractions(): HasMany
    {
        return $this->hasMany(Attraction::class);
    }
}
