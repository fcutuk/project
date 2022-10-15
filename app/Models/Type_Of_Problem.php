<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Type_Of_Problem extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
    ];

    public function problem(): BelongsTo
    {
        return $this->belongsTo(Problems::class);
    }
}
