<?php

namespace App\Models;

use App\Models\PuntosInteres;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Eventos extends Model
{
    use HasFactory;

    public function PuntosInteres(){
        return $this->belongsTo(PuntosInteres::class, "puntosinteres_id", "id");
    }


}
