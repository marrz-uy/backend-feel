<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class UpdatePerfilTest extends TestCase
{

    public function test_Actualizar_perfil___Operacion_exitosa()
    {
        $email    = getenv('API_USER_EMAIL4');
        $password = getenv('API_USER_PASSWORD4');

        //Se hace Login con usuario para generar el Token
        $response = $this->withHeaders([
            'Content-type' => 'application/json',
        ])->postJson('/api/login', [
            'email'    => $email,
            'password' => $password,
        ]);

        $user  = User::where('email', $email)->first();
        $token = Auth::user()->createToken('authToken')->accessToken;

        $response = $this->withHeaders([
            'content-type' => 'application/json',
            'Authorization' => 'Bearer' . $token,
        ])->patchJson('/api/userProfile/' . $user->id, [
            "nacionalidad"           => "Peruano",
            "f_nacimiento"           => "2020-08-25",
            "alojamiento"            => "hotel",
            "gastronomia"            => "restaurante",
            "espectaculos"           => "cine",
            "actividadesAlAirelibre" => "playa",
            "actividadesNocturnas"   => "discoteca",
            "transporte"             => "taxi",
            "actividadesInfantiles"  => "circo",
            "serviciosEsenciales"    => "farmacia",
        ]);

        $response->assertStatus(200);
    }

    public function test_Actualizar_perfil___Confirmar_actualizacion()
    {
        $email    = getenv('API_USER_EMAIL4');
        $password = getenv('API_USER_PASSWORD4');

        //Se hace Login con usuario para generar el Token
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
        ])->getJson('api/userProfile/' . $user->id);

        //! dato expected fue actualizado en el test anterior
        $expected = "Peruano";
        $actual   = $user->profile->nacionalidad;

        $this->assertEquals(
            $expected,
            $actual,
        );

    }

    public function test_Actualizar_perfil___Operacion_fallida___error_formato_de_fecha()
    {

        $email    = getenv('API_USER_EMAIL4');
        $password = getenv('API_USER_PASSWORD4');

        //Se hace Login con usuario para generar el Token
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
        ])->patchJson('/api/userProfile/' . $user->id, [
            "nacionalidad" => "Peruano",
            "f_nacimiento" => "2025",
        ]);

        $response->assertStatus(500);

    }
}
