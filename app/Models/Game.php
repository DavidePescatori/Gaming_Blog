<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Game extends Model
{
    use HasFactory;

    // DICHIARARE ATTRIBUTI

    protected $fillable = [
        'title',
        'producer',
        'description',
        'cover',
    ];

}
