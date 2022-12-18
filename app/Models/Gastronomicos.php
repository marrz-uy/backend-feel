<?php

namespace App\Models;

use App\Models\PuntosInteres;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gastronomicos extends Model
{
    use HasFactory;
    protected $table = 'gastronomicos';

    protected $fillable = [
        'Tipo'
    ];

    public function PuntosInteres(){
        return $this->belongsTo(PuntosInteres::class, 'puntosinteres_id', 'id');
    }
}
