<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class image extends Model
{
    use HasFactory;


    protected $fillable = [
        'sku_id',
        'url',
        'cover'
    ];

    public function sku(): BelongsTo
    {
        return $this->belongsTo(sku::class);
    }
}
