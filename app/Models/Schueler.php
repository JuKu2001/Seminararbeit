<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schueler extends Model
{
    //Einbinden von HasFactory
    use HasFactory;
    
    protected $fillable = [
        'name',
        'email'
    ];

    /*
     * Hier müssen die Assoziation/Beziehung zwischen den Models mit Funktionen definiert werden.
     * Sonst weiß das Programm bzw. Eloquent nicht, welches Model zu welchem Model wie in Beziehung steht
     * Quelle: https://laravel.com/docs/8.x/eloquent-relationships#defining-relationships
    */

    //One-To-Many Beziehung zu Anschrift
    public function anschrift() {
        return $this->belongsTo(Anschrift::class);
    }

    //One-To-Many Beziehung zu Klasse
    public function klasse() {
        return $this->belongsTo(Klasse::class);
    }
}