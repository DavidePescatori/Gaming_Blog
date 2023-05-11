<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Console extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'brand',
        'logo',
        'description',
        'user_id'
    ];

    public function user(): BelongsTo
    {

        // un oggetto di classe console appartiene a un oggetto di classe user
        return $this->belongsTo(User::class);
    }
}
