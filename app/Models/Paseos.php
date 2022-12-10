<?php

namespace App\Models;

use App\Models\PuntosInteres;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Paseos extends Model
{
    use HasFactory;

    protected $table = 'paseos';

    protected $fillable = [
        'Tipo'
    ];

    public function PuntosInteres(){
        return $this->belongsTo(PuntosInteres::class, 'puntosinteres_id', 'id');
    }
}
