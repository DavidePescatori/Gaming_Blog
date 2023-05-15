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

    // un gioco può girare su più consoles
    public function consoles(){

        return $this->belongsToMany(Console::class);
    }

}
