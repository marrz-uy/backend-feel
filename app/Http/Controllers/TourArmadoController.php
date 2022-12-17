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
