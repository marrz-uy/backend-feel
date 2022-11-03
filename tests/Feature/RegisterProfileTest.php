<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class RegisterProfileTest extends TestCase
{
    public function test_Registro_Perfil___Operacion_Exitosa()
    {
        //? Insert de un usuario para asegurar existencia de a quien se agregan las preferencias
        $email                = getenv('API_USER_EMAIL5');
        $password             = getenv('API_USER_PASSWORD5');
        $passwordConfirmation = getenv('API_USER_PASSWORDCONFIRMATION5');
        $name                 = getenv('API_USER_NAME5');

        $response = $this->withHeaders([
            'content-type' => 'application/json',
        ])->postJson('/api/register', [
            'email'                => $email,
            'password'             => $password,
            'passwordConfirmation' => $passwordConfirmation,
            'name'                 => $name,
        ]);

        //? Se hace Login con usuario para generar el Token
        $response = $this->withHeaders([
            'Content-type' => 'application/json',
        ])->postJson('/api/login', [
            'email'    => $email,
            'password' => $password,
        ]);

        $user  = User::where('email', $email)->first();
        $token = Auth::user()->createToken('authToken')->accessToken;

        $response = $this->withHeaders([
            'content-type'  => 'application/json',
            'Authorization' => 'Bearer' . $token,
        ])->postJson('/api/userProfile', [
            'user_id'                => $user->id,
            "nacionalidad"           => "Japones",
            "f_nacimiento"           => "2000-04-12",
            "alojamiento"            => "camping",
            "gastronomia"            => "carrito",
            "espectaculos"           => "teatro",
            "actividadesAlAirelibre" => "playa",
            "actividadesNocturnas"   => "discoteca",
            "transporte"             => "taxi",
            "actividadesInfantiles"  => "circo",
            "serviciosEsenciales"    => "farmacia",
        ]);

        $response->assertStatus(200);

    }

    public function test_Registro_Perfil___Confirmar_que_se_agrego_el_perfil()
    {
        //? Insert de un usuario para asegurar existencia de a quien se agregan las preferencias
        $email                = getenv('API_USER_EMAIL5');
        $password             = getenv('API_USER_PASSWORD5');
        // $passwordConfirmation = getenv('API_USER_PASSWORDCONFIRMATION1');
        // $name                 = getenv('API_USER_NAME1');

        // $response = $this->withHeaders([
        //     'content-type' => 'application/json',
        // ])->postJson('/api/register', [
        //     'email'                => $email,
        //     'password'             => $password,
        //     'passwordConfirmation' => $passwordConfirmation,
        //     'name'                 => $name,
        // ]);

        //? Se hace Login con usuario para generar el Token
        $response = $this->withHeaders([
            'Content-type' => 'application/json',
        ])->postJson('/api/login', [
            'email'    => $email,
            'password' => $password,
        ]);

        $user  = User::where('email', $email)->first();
        $token = Auth::user()->createToken('authToken')->accessToken;

        //? VER Perfil
        $response = $this->withHeaders([
            'content-type'  => 'application/json',
            'Authorization' => 'Bearer' . $token,
        ])->getJson('api/userProfile/' . $user->id);

        $response->assertStatus(200);

    }

}
