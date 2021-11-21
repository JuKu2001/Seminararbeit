<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anschrift extends Model
{
    //Einbinden von HasFactory
    use HasFactory;
    
    protected $fillable = [
        'strasse',
        'hausnummer'  
    ];

    /*
     * Hier müssen die Assoziation/Beziehung zwischen den Models mit Funktionen definiert werden.
     * Sonst weiß das Programm bzw. Eloquent nicht, welches Model zu welchem Model wie in Beziehung steht
     * Quelle: https://laravel.com/docs/8.x/eloquent-relationships#defining-relationships
    */

    //One-To-Many Beziehung zu Schueler
    public function schueler() {
        return $this->hasMany(Schueler::class);
    }

    //One-To-One Beziehung zu Lehrer
    public function lehrer() {
        return $this->belongsTo(Lehrer::class);
    }
}