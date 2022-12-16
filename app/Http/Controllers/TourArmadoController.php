<?php

namespace App\Http\Controllers;

use App\Models\TourArmado;
use App\Models\TourItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $puntos = explode(',', $puntosdeInteresTour);
        $id = $tour->id;
        foreach ($puntos as $punto) {
            TourItems::create([
                'puntoInteresId' => $punto,
                'tourId'         => $id,
            ]);
        }

        return response()->json([
            'Message' => 'Tour Creado correctamente' . $tour->nombreTour,
        ]);

    }


    
    public function ListarToursArmados($id)/* NO FUNCIONA BIEN ESTE AÚN */
    {
        /* ----------------------------------------------------------- */
        $tours = DB::table('tour_armados')->where('usuarioId', $id)
        // ->Join('tour_items', 'tour_armados.id', '=', 'tourId')
        // ->Join('puntosinteres', 'puntosinteres.id', '=', 'puntoInteresId')
        ->get();

        return response()->json([
        $tours
        ]);
        /* ----------------------------------------------------------- */

        // $tours     = DB::table('tour_armados')->where('usuarioId', $id);
        // $touritems = TourArmado::find($id)->touritems('puntoInteresId')->get();
        // foreach ($touritems as $items) {
        // }  
        // $touritems = TourItems::find($id)->punto;
        /* return response()->json([
            'tour' => $tours,
            'items' => $touritems,
        ]); */
        /* ----------------------------------------------------------- */
    }

}
