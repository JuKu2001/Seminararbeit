<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anschrift extends Model
{
    use HasFactory;
    protected $fillable = [
        'strasse',
        'hausnummer',
        
    ];
}



/*


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anschrift extends Model                   // Der Lehrer dem die Anschrift gehört wird ermittelt
{  
    
    public function lehrer()
    {
        return $this->belongsTo(lehrer::class);
    }
}

*/