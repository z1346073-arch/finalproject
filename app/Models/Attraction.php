<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Attraction extends Model
{
    protected $fillable = ['name', 'description', 'zone_id', 'ticket_price', 'image'];

    public function zone(): BelongsTo
    {
        return $this->belongsTo(Zone::class);
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }
}
