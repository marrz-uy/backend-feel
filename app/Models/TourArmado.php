<?php

namespace App\Models;

use App\Models\TourItems;
use Illuminate\Database\Eloquent\Model;

class TourArmado extends Model
{
    // use HasFactory;

    protected $fillable = [
    'usuarioId',
    'nombreTour',
    'horaInicioTour',
    ];

    public function touritems()
    {
        return $this->hasMany(TourItems::class, 'tourId', 'id');
    }
}
