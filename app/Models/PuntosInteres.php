<?php

namespace App\Models;

use App\Models\Eventos;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PuntosInteres extends Model
{
    use HasFactory;

    protected $table = 'puntosinteres';

    public function ServiciosEsenciales()
    {
        return $this->hasMany(ServiciosEsenciales::class);
    }

    public function VerEventos()
    {
        return $this->hasMany(Eventos::class, 'puntosinteres_id', 'id');
    }
    
    public function VerTelefonos()
    {
        return $this->hasMany(Telefonos::class, 'puntosinteres_id', 'id');

    }

}
