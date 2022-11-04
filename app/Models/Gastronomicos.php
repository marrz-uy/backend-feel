<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gastronomicos extends Model
{
    use HasFactory;
    protected $table = 'gastronomicos';

    protected $fillable = [
        'Tipo'
    ];

    // public function PuntosInteres(){
    //     return $this->belongsTo(PuntosInteres::class);
    // }
}
