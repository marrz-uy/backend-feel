<?php

namespace App\Http\Controllers;

use App\Models\PuntosInteres;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PuntosInteresController extends Controller
{
    public function VerPuntoCompleto($id)
    {
        /*
        TABLAS A USAR
        $tabla = 'actividades_infantiles';
        $tabla = 'actividades_nocturnas';
        $tabla = 'alojamientos';
        $tabla = 'espectaculos'; ->(shows)
        $tabla = 'eventos';
        $tabla = 'gastronomicos';
        $tabla = 'paseos';-> (actividades al aire libre)
        $tabla = 'servicios_esenciales';
        $tabla = 'transporte';
         */

        $punto = PuntosInteres::findOrFail($id);

        $tables = [
            'actividades_infantiles',
            'actividades_nocturnas',
            'alojamientos',
            'espectaculos',
            'eventos',
            'gastronomicos',
            'paseos',
            'servicios_esenciales',
            'transporte',
        ];

        $result = null;
        foreach ($tables as $table) {
            $data = DB::table($table)->where('puntosinteres_id', $id)->first();
            if ($data) {
                $result = $data;
                break;
            }
        }

        return response()->json(['punto' => $punto, 'tipo' => $result]);
    }

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
            $tabla = 'eventos';
        }

        if ($Categoria === 'Transporte') {
            $tabla = 'transporte';
        }

        if ($Categoria === 'Actividades Infantiles') {
            $tabla = 'actividades_infantiles';
        }

        if ($Categoria === 'Actividades Nocturnas') {
            $tabla = 'actividades_nocturnas';
        }

        if ($Categoria === 'Paseos') {
            $tabla = 'paseos';
        }

        if ($Categoria === 'Gastronomia') {
            $tabla = 'gastronomicos';
        }

        if ($Categoria === 'Alojamiento') {
            $tabla = 'alojamientos';
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

    public function ListarPuntosDeInteresParaTour(Request $request)
    {
        /*

        TABLAS A USAR
        $tabla = 'gastronomicos';
        $tabla = 'espectaculos'; ->(shows)
        $tabla = 'actividades_infantiles';
        $tabla = 'actividades_nocturnas';
        $tabla = 'paseos';-> (actividades al aire libre)

         */

        $horaInicio          = $request->horaInicio;
        $tipoDeLugar         = $request->tipoDeLugar;
        $restriccionDeEdad   = $request->restriccionDeEdad;
        $enfoqueDePersonas   = $request->enfoqueDePersonas;
        $ubicacion           = $request->ubicacion;
        $puntosParatourArray = array();

        function obtenerPuntosInteres($tablaJoin, $horaInicio, $tipoDeLugar, $restriccionDeEdad, $enfoqueDePersonas, $ubicacion)
        {
            return DB::table('puntosinteres')
                ->where('HoraDeApertura', '<=', $horaInicio)
                ->where('HoraDeCierre', '>', $horaInicio)
                ->where('TipoDeLugar', '=', $tipoDeLugar)
                ->where('RestriccionDeEdad', '=', $restriccionDeEdad)
                ->where('EnfoqueDePersonas', '=', $enfoqueDePersonas)
                ->where('Ciudad', 'like', '%' . $ubicacion . '%')
                ->Join($tablaJoin, 'puntosinteres.id', '=', $tablaJoin . '.puntosinteres_id')
                ->select('puntosinteres.*', $tablaJoin . '.*')
                ->get();
        }

        $puntosParaTourGastronomicos         = obtenerPuntosInteres('gastronomicos', $horaInicio, $tipoDeLugar, $restriccionDeEdad, $enfoqueDePersonas, $ubicacion);
        $puntosParaTourEspectaculos          = obtenerPuntosInteres('eventos', $horaInicio, $tipoDeLugar, $restriccionDeEdad, $enfoqueDePersonas, $ubicacion);
        $puntosParaTourActividadesInfantiles = obtenerPuntosInteres('actividades_infantiles', $horaInicio, $tipoDeLugar, $restriccionDeEdad, $enfoqueDePersonas, $ubicacion);
        $puntosParaTourActividadesNocturnas  = obtenerPuntosInteres('actividades_nocturnas', $horaInicio, $tipoDeLugar, $restriccionDeEdad, $enfoqueDePersonas, $ubicacion);
        $puntosParaTourPaseos                = obtenerPuntosInteres('paseos', $horaInicio, $tipoDeLugar, $restriccionDeEdad, $enfoqueDePersonas, $ubicacion);

        array_push($puntosParatourArray,
            $puntosParaTourGastronomicos,
            $puntosParaTourEspectaculos,
            $puntosParaTourActividadesInfantiles,
            $puntosParaTourActividadesNocturnas,
            $puntosParaTourPaseos
        );

        $data       = collect($puntosParatourArray);
        $arrayFinal = $data->flatten()->toArray();

        return response()->json($arrayFinal);

    }

}