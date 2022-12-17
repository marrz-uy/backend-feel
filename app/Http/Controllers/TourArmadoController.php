<?php

namespace App\Http\Controllers;

use App\Models\TourArmado;
use App\Models\TourItems;
use Illuminate\Http\Request;
use Validator;

class TourArmadoController extends Controller
{
    public function InsertarTourArmado(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'usuarioId'           => 'required',
            'nombreTour'          => 'required|string',
            'horaInicioTour'      => 'required',
            'puntosdeInteresTour' => 'required|string',
        ],
            [
                'usuarioId.required'           => 'El id de usuario es obligatorio',
                'nombreTour.required'          => 'El nombre del tour de usuario es obligatorio',
                'horaInicioTour.required'      => 'La hora de inicio del tour es obligatoria',
                'puntosdeInteresTour.required' => 'Los puntos de interes son obligatorios',
            ]
        );

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $tour = TourArmado::create([
            'usuarioId'      => $request->usuarioId,
            'nombreTour'     => $request->nombreTour,
            'horaInicioTour' => $request->horaInicioTour,
        ]);

        $puntosdeInteresTour = $request->puntosdeInteresTour;
        $puntos              = explode(',', $puntosdeInteresTour);
        $id                  = $tour->id;
        foreach ($puntos as $punto) {
            TourItems::create([
                'puntoInteresId' => $punto,
                'tourId'         => $id,
            ]);
        }

        return response()->json([
            'Message' => 'Tour Creado correctamente ' . $tour->nombreTour,
        ]);

    }

    public function InsertarTourPredefinido(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombreTourPredefinido'          => 'required|string',
            'horaDeInicioTourPredefinido'      => 'required',
            'descripcionTourPredefinido' => 'required|string',
            'puntosdeInteresTour' => 'required|string',
        ],
            [
                'nombreTourPredefinido.required'           => 'El nombre del tour predefinido de usuario es obligatorio',
                'horaDeInicioTourPredefinido.required'          => 'La hora de inicio del tour es obligatoria',
                'descripcionTourPredefinido.required'      => 'La descripción del tour predefinido es obligatoria',
                'puntosdeInteresTour.required' => 'Los puntos de interes son obligatorios',
            ]
        );

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $tour = TourArmado::create([
            'nombreTourPredefinido'      => $request->nombreTourPredefinido,
            'horaDeInicioTourPredefinido'     => $request->horaDeInicioTourPredefinido,
            'descripcionTourPredefinido' => $request->descripcionTourPredefinido,
            'puntosdeInteresTour' => $request->puntosdeInteresTour,
        ]);

        $puntosdeInteresTour = $request->puntosdeInteresTour;
        $puntos              = explode(',', $puntosdeInteresTour);
        $id                  = $tour->id;
        foreach ($puntos as $punto) {
            TourItems::create([
                'puntoInteresId' => $punto,
                'tourId'         => $id,
            ]);
        }

        return response()->json([
            'Message' => 'Tour Predefinido Creado correctamente ' . $tour->nombreTourPredefinido,
        ]);

    }

    public function ListarToursArmados($id)
    {
        $tourArmados = TourArmado::with('TourItems.PuntosInteres')
            ->where('usuarioId', $id)
            ->get();

        return response()->json([
            $tourArmados,
        ]);

    }

}
