<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lehrer extends Model
{
    //Einbinden von HasFactory
    use HasFactory;
    
    protected $fillable = [
        'name',
        'kuerzel'
    ];

    /*
     * Hier müssen die Assoziation/Beziehung zwischen den Models mit Funktionen definiert werden.
     * Sonst weiß das Programm bzw. Eloquent nicht, welches Model zu welchem Model wie in Beziehung steht
     * Quelle: https://laravel.com/docs/8.x/eloquent-relationships#defining-relationships
    */

    //One-To-One Beziehung zu Anschrift
    public function anschrift() {
        return $this->hasOne(Phone::class);
    }

    //Many-To-Many Beziehung zu Klasse
    public function lehrer() {
        return $this->belongsToMany(Klasse::class);
    }

}