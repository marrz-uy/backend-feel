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
        $tabla = 'espectaculos';
        $tabla = 'actividades_infantiles';
        $tabla = 'actividades_nocturnas';
        $tabla = 'paseos';

         */

        $horaInicio          = $request->horaInicio;
        $tipoDeLugar         = $request->tipoDeLugar;
        $restriccionDeEdad   = $request->restriccionDeEdad;
        $enfoqueDePersonas   = $request->enfoqueDePersonas;
        $ubicacion           = $request->ubicacion;
        $puntosParatourArray = array();

        $puntosParaTourGastronomicos = DB::table('puntosinteres')
            ->where('HoraDeApertura', '<=', $horaInicio)
            ->where('HoraDeCierre', '>', $horaInicio)
            ->where('TipoDeLugar', '=', $tipoDeLugar)
            ->where('RestriccionDeEdad', '=', $restriccionDeEdad)
            ->where('EnfoqueDePersonas', '=', $enfoqueDePersonas)
            ->where('Ciudad', 'like', '%' . $ubicacion . '%')
            ->Join('gastronomicos', 'puntosinteres.id', '=', 'puntosinteres_id')
            ->select('puntosinteres.*', 'gastronomicos.*')
            ->get();

        $puntosParaTourEspectaculos = DB::table('puntosinteres')
            ->where('HoraDeApertura', '<=', $horaInicio)
            ->where('HoraDeCierre', '>', $horaInicio)
            ->where('TipoDeLugar', '=', $tipoDeLugar)
            ->where('RestriccionDeEdad', '=', $restriccionDeEdad)
            ->where('EnfoqueDePersonas', '=', $enfoqueDePersonas)
            ->where('Ciudad', 'like', '%' . $ubicacion . '%')
            ->Join('eventos', 'puntosinteres.id', '=', 'puntosinteres_id')
            ->select('puntosinteres.*', 'eventos.*')
            ->get();

        $puntosParaTourActividadesInfantiles = DB::table('puntosinteres')
            ->Join('actividades_infantiles', 'puntosinteres.id', '=', 'actividades_infantiles.puntosinteres_id')
            ->where('HoraDeApertura', '<=', $horaInicio)
            ->where('HoraDeCierre', '>', $horaInicio)
            ->where('TipoDeLugar', '=', $tipoDeLugar)
            ->where('RestriccionDeEdad', '=', $restriccionDeEdad)
            ->where('EnfoqueDePersonas', '=', $enfoqueDePersonas)
            ->where('Ciudad', 'like', '%' . $ubicacion . '%')
            ->select('puntosinteres.*', 'actividades_infantiles.*')
            ->get();

        $puntosParaTourActividadesNocturnas = DB::table('puntosinteres')
            ->Join('actividades_nocturnas', 'puntosinteres.id', '=', 'actividades_nocturnas.puntosinteres_id')
            ->where('HoraDeApertura', '<=', $horaInicio)
            ->where('HoraDeCierre', '>', $horaInicio)
            ->where('TipoDeLugar', '=', $tipoDeLugar)
            ->where('RestriccionDeEdad', '=', $restriccionDeEdad)
            ->where('EnfoqueDePersonas', '=', $enfoqueDePersonas)
            ->where('Ciudad', 'like', '%' . $ubicacion . '%')
            ->select('puntosinteres.*', 'actividades_nocturnas.*')
            ->get();

        $puntosParaTourPaseos = DB::table('puntosinteres')
            ->where('HoraDeApertura', '<=', $horaInicio)
            ->where('HoraDeCierre', '>', $horaInicio)
            ->where('TipoDeLugar', '=', $tipoDeLugar)
            ->where('RestriccionDeEdad', '=', $restriccionDeEdad)
            ->where('EnfoqueDePersonas', '=', $enfoqueDePersonas)
            ->where('Ciudad', 'like', '%' . $ubicacion . '%')
            ->Join('paseos', 'puntosinteres.id', '=', 'paseos.puntosinteres_id')
            ->select('puntosinteres.*', 'paseos.*')
            ->get();

        array_push($puntosParatourArray,
            $puntosParaTourGastronomicos,
            $puntosParaTourEspectaculos,
            $puntosParaTourActividadesInfantiles,
            $puntosParaTourActividadesNocturnas,
            $puntosParaTourPaseos
        );

        $data      = collect($puntosParatourArray);
        $arrayFinal = $data->flatten()->toArray();

        return response()->json($arrayFinal);

        ####################################################################
        /*  $results = DB::table('puntosinteres AS t1')
        ->join('gastronomicos AS t2', 't1.id', '=', 't2.puntosinteres_id')
        ->join('eventos AS t3', 't1.id', '=', 't3.puntosinteres_id')
        ->join('actividades_infantiles AS t4', 't1.id', '=', 't4.puntosinteres_id')
        ->select('t1.*', 't2.*', 't3.*', 't4.*')
        ->where('t1.HoraDeApertura', '<=', $horaInicio)
        ->where('t1.HoraDeCierre', '>', $horaInicio)
        ->where('t1.TipoDeLugar', '=', $tipoDeLugar)
        ->where('t1.RestriccionDeEdad', '=', $restriccionDeEdad)
        ->where('t1.EnfoqueDePersonas', '=', $enfoqueDePersonas)
        ->where('t1.Ciudad', 'like', '%' . $ubicacion . '%')
        ->get();

        return response()->json($results); */

        

    }

}
