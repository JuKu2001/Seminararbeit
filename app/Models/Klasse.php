<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klasse extends Model
{
    use HasFactory;
}



<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Klasse extends Model   // die Schüler die in eine Klasse gehöre werden ermittelt
{
    
    public function schuelers()
    {
        return $this->hasMany(Schueler::class);
    }
}



use App\Models\Klasse;

$schuelers = Klasse::find(1)->schuelers;

foreach ($schuelers as $schueler) {
    
}




<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Klasse extends Model     // alle Lehrer die zu der Klasse gehören bzw. dort unterrichten werden ermittelt
{
   
    public function lehrer()
    {
        return $this->belongsToMany(Lehrer::class);
    }
}