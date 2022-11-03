<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;
    protected $table = 'userprofile';

    protected $fillable = [
        'nacionalidad',
        'f_nacimiento',
        'alojamiento',
        'gastronomia',
        'espectaculos',
        'actividadesAlAirelibre',
        'actividadesNocturnas',
        'transporte',
        'actividadesInfantiles',
        'serviciosEsenciales',
    ];

    // Realacion uno a uno
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
