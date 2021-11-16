<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schueler extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        
    ];
}



/*
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schueler extends Model              // Die Klasse die zu dem Schüer gehört wird aufgerufen
{
   
    public function klasse()
    {
        return $this->belongsTo(Klasse::class);
    }
}



use App\Models\Schueler;

$schueler = schueler::find(1);

return $schueler->klasse->title;

*/