<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PuntosInteresController extends Controller
{

    //**LISTAR PUNTOS DE INTERES POR NOMBRE con DISTANCIA**
    public function ListarPuntosDeInteresPorNombreCercanos(Request $request, $Nombre)
    {

        // VALORES RECIBIDOS
        $latpunto  = $request->latitudAEnviar;
        $longpunto = $request->longitudAEnviar;
        $distancia = $request->distanciaAEnviar;
        // LATITUD
        $latMIN = $latpunto - ($distancia);
        $latMAX = $latpunto + ($distancia);
        // LONGITUD
        $longMIN = $longpunto - ($distancia);
        $longMAX = $longpunto + ($distancia);

        // WERE-WEREBETWEEN FUNCIONANDO BIEN

        if (!$latpunto || !$longpunto || !$distancia) {
            $eventosPorNombre = DB::table('puntosinteres')
                ->Join('eventos', 'puntosinteres_id', '=', 'puntosinteres.id')
                ->where('eventos.NombreEvento', 'like', '%' . $Nombre . '%')
                ->orWhere('eventos.tipo', 'like', '%' . $Nombre . '%')
                ->paginate(12);

            $puntosPorNombre = DB::table('puntosinteres')
                ->where('nombre', 'like', '%' . $Nombre . '%')
                ->paginate(12);

            if ($puntosPorNombre == '') {
                return response()->json($eventosPorNombre);
            } else {
                return response()->json($puntosPorNombre);
            }
        }

        if ($latpunto && $longpunto) {
            $eventosPorNombre = DB::table('puntosinteres')
                ->Join('eventos', 'puntosinteres_id', '=', 'puntosinteres.id')
                ->whereBetween('Latitud', [$latMIN, $latMAX])
                ->whereBetween('Longitud', [$longMIN, $longMAX])
                ->where('eventos.NombreEvento', 'like', '%' . $Nombre . '%')
            // ->orWhere('eventos.tipo', 'like', '%' . $Nombre . '%')
                ->paginate(12);

            $puntosPorNombre = DB::table('puntosinteres')
                ->where('nombre', 'like', '%' . $Nombre . '%')
                ->whereBetween('Latitud', [$latMIN, $latMAX])
                ->whereBetween('Longitud', [$longMIN, $longMAX])
                ->paginate(12);

            if ($puntosPorNombre == '') {
                return response()->json($eventosPorNombre);
            } else {
                return response()->json($puntosPorNombre);
            }
        }
    }

    //**LISTAR PUNTOS DE INTERES POR CATEGORIA con DISTANCIA**
    public function ListarPuntosDeInteresPorCategoriaCercanos(Request $request, $Categoria)
    {
        if ($Categoria === 'Servicios Esenciales') {
            $tabla = 'servicios_esenciales';
        }

        if ($Categoria === 'Espectaculos') {
            $tabla = 'espectaculos';
        }

        if ($Categoria === 'Transporte') {
            $tabla = 'transporte';
        }

        // VALORES RECIBIDOS
        $latpunto  = $request->latitudAEnviar;
        $longpunto = $request->longitudAEnviar;
        $distancia = $request->distanciaAEnviar;
        // LATITUD
        $latMIN = $latpunto - ($distancia);
        $latMAX = $latpunto + ($distancia);
        // LONGITUD
        $longMIN = $longpunto - ($distancia);
        $longMAX = $longpunto + ($distancia);

        if (!$latpunto || !$longpunto || !$distancia) {

            $puntosPorCategoria = DB::table('puntosinteres')
                ->Join($tabla, 'puntosinteres.id', '=', 'puntosinteres_id')
                ->orderBy('Tipo')
                ->paginate(12);
            return response()->json($puntosPorCategoria);
        }

        if ($latpunto && $longpunto && $distancia) {
            $puntosPorCategoria = DB::table('puntosinteres')
                ->Join($tabla, 'puntosinteres.id', '=', 'puntosinteres_id')
                ->whereBetween('Latitud', [$latMIN, $latMAX])
                ->whereBetween('Longitud', [$longMIN, $longMAX])
                ->orderBy('Tipo')
                ->paginate(12);

            return response()->json($puntosPorCategoria);
        }

    }

}
