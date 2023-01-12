<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Mail\RegistroUsuario;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Validator;

// use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'    => 'required|email',
            'password' => 'required|string|min:8',
        ], [
            'email.required'    => 'El Email es obligatorio',
            'email.unique'      => 'El Email ya existe',
            'email.email'       => 'El Email debe tener un @',
            'password.required' => 'La contraseña es obligatoria',
            'password.min'      => 'La contraseña debe contener 8 caracteres minimo',
        ]
        );

        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $accessToken = Auth::user()->createToken('authToken')->accessToken;

        return response()->json([
            'status'       => 200,
            "id"           => Auth::user()->id,
            "user"         => Auth::user()->name,
            "email"        => Auth::user()->email,
            "access_token" => $accessToken,
            'userProfile'  => Auth::user()->profile,
            'cheked'       => Auth::check(),
        ]);
    }

    public function userGoogleData(Request $request)
    {
        $email             = $request->email;
        $userGoogle        = DB::table('users')->where('email', '=', $email)->first();
        $UserGoogleProfile = DB::table('userprofile')->where('user_id', '=', $userGoogle->id)->first();

        return response()->json([
            'userGoogleId' => $userGoogle->id,
            'userProfile'  => $UserGoogleProfile,
        ]);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'                => 'required|string|email|max:100|unique:users',
            'password'             => 'required|string|min:8',
            'passwordConfirmation' => 'required|min:8|same:password',
            'name'                 => 'required|string|min:2|max:100',
        ], [
            'email.required'                => 'El Email es obligatorio',
            'email.unique'                  => 'El Email ya existe',
            'email.email'                   => 'El Email debe tener un @',
            'password.required'             => 'La contraseña es obligatoria',
            'password.min'                  => 'La contraseña debe contener 8 caracteres como minimo',
            'passwordConfirmation.required' => 'La Confirmacion de contraseña es obligatoria',
            'passwordConfirmation.same'     => 'Las Contraseñas no coinciden',
            'passwordConfirmation.min'      => 'La Confirmacion de contraseña debe tener 8 caracteres como minimo',
            'name.required'                 => 'El Usuario es Obligatorio',
            'name.min'                      => 'El Usuario debe tener 2 caracteres como minimo',
        ]
        );

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $user = User::create([
            'email'    => $request->email,
            'password' => bcrypt($request->password),
            'name'     => $request->name,
        ]);

        $correo = new RegistroUsuario($user->name);
        Mail::to($user->email)->send($correo);

        return response()->json([
            'message' => 'User successfully registered',
            'user'    => $user,
        ], 201);

    }

    public function userEmailUpdate(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:100|unique:users',

        ], [
            'email.required' => 'El Email es obligatorio',
            'email.unique'   => 'El Email ya existe',
            'email.email'    => 'El Email debe tener un @',
        ]
        );

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $userToUpdate = User::findOrFail($id);

        if ($userToUpdate !== null) {

            $userToUpdate->email = $request->email;
            $userToUpdate->save();

            return response()->json([
                'message' => 'Successfully updated User email',
                'user'    => $userToUpdate,
            ]);
        }
    }

    public function userNameUpdate(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:2|max:100',

        ], [
            'name.required' => 'El Usuario es Obligatorio',
            'name.min'      => 'El Usuario debe tener 2 caracteres como minimo',
        ]
        );

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $userToUpdate = User::findOrFail($id);

        if ($userToUpdate !== null) {
            $userToUpdate->name = $request->name;
            $userToUpdate->save();

            return response()->json([
                'message' => 'Successfully updated User name',
                'user'    => $userToUpdate,
            ]);
        }
    }

    public function userPasswordUpdate(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'password'             => 'required|string|min:8',
            'passwordConfirmation' => 'required|min:8|same:password',

        ], [
            'password.required'             => 'La contraseña es obligatoria',
            'password.min'                  => 'La contraseña debe contener 8 caracteres como minimo',
            'passwordConfirmation.required' => 'La Confirmacion de contraseña es obligatoria',
            'passwordConfirmation.same'     => 'Las Contraseñas no coinciden',
            'passwordConfirmation.min'      => 'La Confirmacion de contraseña debe tener 8 caracteres como minimo',
        ]
        );

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $userToUpdate = User::findOrFail($id);

        if ($userToUpdate !== null) {
            $userToUpdate->password = bcrypt($request->password);
            $userToUpdate->save();

            return response()->json([
                'message' => 'Successfully updated User password',
                'user'    => $userToUpdate,

            ]);
        }
    }

    public function logout()
    {
        $user = Auth::user()->token();
        $user->revoke();
        return response()->json([
            'Successfully logged out',
        ], 200);
    }

    public function deleteUsersAfterTesting(Request $request)
    {
        $userDeleted = User::where('email', $request->user)->first();
        $userDeleted->delete();

        return response()->json(['mensaje' => 'Usuarios eliminados'], 200);

    }

}