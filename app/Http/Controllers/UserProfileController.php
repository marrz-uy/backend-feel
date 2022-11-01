<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{

    public function insertUserProfile(Request $request)
    {
        $userprofile                         = new UserProfile();
        $userprofile->user_id                = $request->user_id;
        $userprofile->nacionalidad           = $request->nacionalidad;
        $userprofile->f_nacimiento           = $request->f_nacimiento;
        $userprofile->alojamiento            = $request->alojamiento;
        $userprofile->gastronomia            = $request->gastronomia;
        $userprofile->espectaculos           = $request->espectaculos;
        $userprofile->actividadesAlAirelibre = $request->actividadesAlAirelibre;
        $userprofile->actividadesNocturnas   = $request->actividadesNocturnas;
        $userprofile->transporte             = $request->transporte;
        $userprofile->actividadesInfantiles  = $request->actividadesInfantiles;
        $userprofile->serviciosEsenciales    = $request->serviciosEsenciales;
        $userprofile->save();

        return response()->json([
            'message'     => 'Successfully registered User profile',
            'userprofile' => $userprofile,
            'status'      => 201,
        ]);
    }

    public function showUserProfile(Request $request)
    {
        //BUSCA POR ID DE USUARIO, NO POR EL ID DE USERPROFILE
        $user        = User::findOrFail($request->id);
        $userprofile = UserProfile::where('user_id', $request->id)->first();

        if (!$userprofile) {
            return response()->json([
                'message' => 'Record not found.',
            ], 404);
        }

        return response()->json($user->profile);

    }

    public function updateUserProfile(Request $request, $id)
    {
        $user_id = $id;
        $userprofile = UserProfile::where('user_id', $user_id)->first();

        if ($userprofile !== null) {

            $userprofile->nacionalidad           = $request->nacionalidad;
            $userprofile->f_nacimiento           = $request->f_nacimiento;
            $userprofile->alojamiento            = $request->alojamiento;
            $userprofile->gastronomia            = $request->gastronomia;
            $userprofile->espectaculos           = $request->espectaculos;
            $userprofile->actividadesAlAirelibre = $request->actividadesAlAirelibre;
            $userprofile->actividadesNocturnas   = $request->actividadesNocturnas;
            $userprofile->transporte             = $request->transporte;
            $userprofile->actividadesInfantiles  = $request->actividadesInfantiles;
            $userprofile->serviciosEsenciales    = $request->serviciosEsenciales;
            $userprofile->save();

            return response()->json([
                'message' => 'Successfully updated User profile',
                'user'    => $userprofile,
                'status'      => 200,
            ]);
        } else {
            return response()->json([
                'message' => 'NO EXISTE PERFIL PARA EL USUARIO',
            ]);
        }
    }

    public function deleteUserProfile($id)
    {
        $userDeleted = UserProfile::where('user_id', $id)->first();
        $eliminado   = $userDeleted;
        if ($userDeleted !== null) {

            $userDeleted->delete();
            return response()->json([
                'message' => 'Successfully deleted User profile',
                'user'    => $eliminado,
            ], 200);
        } else {
            return response()->json([
                'message' => 'The user does not exist or does not have a user profile',
            ], 404);
        }
    }
}
