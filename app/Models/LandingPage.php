<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LandingPage extends Model
{
    use HasFactory, HasFactory;

    protected $fillable = [
        'name',
        'url',
        'ad_id',
        'tracked_button'
    ];

    function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
