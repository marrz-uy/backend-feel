<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourPredefinido extends Model
{
    use HasFactory;

    protected $table = 'tour_predefinido';

    protected $fillable = [
        'nombreTourPredefinido',
        'descripcionTourPredefinido',
        'horaDeInicioTourPredefinido',
    ];

    public function PuntosInteres()
    {
        return $this->hasMany(PuntosInteres::class, 'puntosinteres_id', 'id');
    }
}