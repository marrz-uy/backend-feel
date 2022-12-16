<?php

namespace App\Models;

use App\Models\TourArmado;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TourItems extends Model
{
    use HasFactory;

    protected $fillable = [
        'tourId', /* foreign key */
        'puntoInteresId', /* foreign key */
    ];

    public function tour()
    {
        return $this->belongsTo(TourArmado::class, 'tourId', 'id');
    }

    public function punto()
    {
        return $this->hasOne(PuntosInteres::class, 'tourId', 'id');
    }
}
