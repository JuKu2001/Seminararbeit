<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lehrer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'kuerzel',
        
    ];


    
}


/*

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class lehrer //extends Model                                   // Die Anschrift des dazugehörigen Lehres wird ermittelt
{
    
    public function anschrift()
    {
        return $this->hasOne(Nummer::class);
        return $this->hasOne(Anschrift::class, 'kuerzel');
    }
}



<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class lehrer //extends Model                                    // Die Klassen in denen der Lehrer Lehrer ist werden ermittelt
{
    public function klassen()
    {
        return $this->belongsToMany(Klasse::class, 'von', 'Kürzel', 'Klassenbezeichnung');
    }
}



use App\Models\Lehrer;

$lehrer = Lehrer::find(1);

foreach ($lehrer->klassen as $klasse) {
}