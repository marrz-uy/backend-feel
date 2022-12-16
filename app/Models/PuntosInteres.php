<?php

namespace App\Models;

use App\Models\ActividadesInfantiles;
use App\Models\ActividadesNocturnas;
use App\Models\Eventos;
use App\Models\Gastronomicos;
use App\Models\Paseos;
use App\Models\Telefonos;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PuntosInteres extends Model
{
    use HasFactory;

    protected $table = 'puntosinteres';

    public function VerGastronomicos()
    {
        return $this->hasOne(Gastronomicos::class, 'puntosinteres_id', 'id');
    }

    public function VerEspectaculos()
    {
        return $this->hasOne(Eventos::class, 'puntosinteres_id', 'id');
    }

    public function VerActividadesInfantiles()
    {
        return $this->hasOne(ActividadesInfantiles::class, 'puntosinteres_id', 'id');
    }

    public function VerActividadesNocturnas()
    {
        return $this->hasOne(ActividadesNocturnas::class, 'puntosinteres_id', 'id');
    }

    public function VerPaseos()
    {
        return $this->hasOne(Paseos::class, 'puntosinteres_id', 'id');
    }

    public function VerTelefonos()
    {
        return $this->hasMany(Telefonos::class, 'puntosinteres_id', 'id');
    }

    public function touritem()
    {
        return $this->belongsTo(TourItems::class, 'puntoInteresId', 'id');

    }

}
