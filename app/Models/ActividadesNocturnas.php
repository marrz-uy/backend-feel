<?php

namespace App\Models;

use App\Models\PuntosInteres;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ActividadesNocturnas extends Model
{
    use HasFactory;

    protected $table = 'actividades_nocturnas';

    protected $fillable = [
        'Tipo',
    ];

    public function PuntosInteres()
    {
        return $this->belongsTo(PuntosInteres::class, 'puntosinteres_id', 'id');
        // return $this->belongsTo(PuntosInteres::class, 'puntosinteres.id', 'ActividadesNocturnas.puntosinteres_id');
    }

}
