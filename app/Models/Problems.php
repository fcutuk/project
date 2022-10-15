<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Problems extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'description',
        'title',
        'image',
        'location',
        'title',
        'votes',
        'urgent'
    ];



    public function type(): hasOne
    {
        return $this->hasOne(Type_Of_Problem::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
