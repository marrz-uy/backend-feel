<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class DeleteProfileTest extends TestCase
{
    public function test_Eliminar_perfil____Operacion_exitosa()
    {
        // Insert de un usuario para asegurar existencia de a quien se agregan las preferencias
        $email                = getenv('API_USER_EMAIL3');
        $password             = getenv('API_USER_PASSWORD3');
        $passwordConfirmation = getenv('API_USER_PASSWORDCONFIRMATION3');
        $name                 = getenv('API_USER_NAME3');

        $response = $this->withHeaders([
            'content-type' => 'application/json',
        ])->postJson('/api/register', [
            'email'                => $email,
            'password'             => $password,
            'passwordConfirmation' => $passwordConfirmation,
            'name'                 => $name,
        ]);

        //Se hace Login con usuario para generar el Token
        $response = $this->withHeaders([
            'Content-type' => 'application/json',
        ])->postJson('/api/login', [
            'email'    => $email,
            'password' => $password,
        ]);

        $user  = User::where('email', $email)->first();
        $token = Auth::user()->createToken('authToken')->accessToken;

        //Creo Perfil
        $response = $this->withHeaders([
            'content-type'  => 'application/json',
            'Authorization' => 'Bearer' . $token,
        ])->postJson('/api/userProfile', [
            "user_id"                => $user->id,
            "nacionalidad"           => "Uruguayo",
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

        //? Elimino perfil
        $response = $this->withHeaders([
            'content-type'  => 'application/json',
            'Authorization' => 'Bearer' . $token,
        ])->deleteJson('api/userProfile/' . $user->id);

        $response->assertStatus(200);
    }

    public function test_Eliminar_perfil____Confirmar_eliminacion()
    {
        // Insert de un usuario para asegurar existencia de a quien se agregan las preferencias
        $email                = getenv('API_USER_EMAIL3');
        $password             = getenv('API_USER_PASSWORD3');
        $passwordConfirmation = getenv('API_USER_PASSWORDCONFIRMATION3');
        $name                 = getenv('API_USER_NAME3');

        $response = $this->withHeaders([
            'content-type' => 'application/json',
        ])->postJson('/api/register', [
            'email'                => $email,
            'password'             => $password,
            'passwordConfirmation' => $passwordConfirmation,
            'name'                 => $name,
        ]);

        //Se hace Login con usuario para generar el Token
        $response = $this->withHeaders([
            'Content-type' => 'application/json',
        ])->postJson('/api/login', [
            'email'    => $email,
            'password' => $password,
        ]);

        $user  = User::where('email', $email)->first();
        $token = Auth::user()->createToken('authToken')->accessToken;

        
        //? <-----CONFIRMAR QUE SE BORRO---->

        $response = $this->withHeaders([
            'content-type'  => 'application/json',
            'Authorization' => 'Bearer' . $token,
        ])->getJson('api/userProfile/' . $user->id);

        $response->assertStatus(404);
    }

    public function test_Eliminar_perfil____Operacion_fallida__Error_en_id_a_eliminar()
    {
        // Insert de un usuario para asegurar existencia de a quien se agregan las preferencias
        $email                = getenv('API_USER_EMAIL4');
        $password             = getenv('API_USER_PASSWORD4');
        $passwordConfirmation = getenv('API_USER_PASSWORDCONFIRMATION4');
        $name                 = getenv('API_USER_NAME4');

        $response = $this->withHeaders([
            'content-type' => 'application/json',
        ])->postJson('/api/register', [
            'email'                => $email,
            'password'             => $password,
            'passwordConfirmation' => $passwordConfirmation,
            'name'                 => $name,
        ]);

        //Se hace Login con usuario para generar el Token
        $response = $this->withHeaders([
            'Content-type' => 'application/json',
        ])->postJson('/api/login', [
            'email'    => $email,
            'password' => $password,
        ]);

        $user  = User::where('email', $email)->first();
        $token = Auth::user()->createToken('authToken')->accessToken;

        //Creo Perfil
        $response = $this->withHeaders([
            'content-type'  => 'application/json',
            'Authorization' => 'Bearer' . $token,
        ])->postJson('/api/userProfile', [
            "user_id"                => $user->id,
            "nacionalidad"           => "Uruguayo",
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

        $response = $this->withHeaders([
            'content-type'  => 'application/json',
            'Authorization' => 'Bearer' . $token,
            //! INGRESAMOS UN ID INCORRECTO
        ])->deleteJson('api/userProfile/9999');

        $response->assertStatus(404);
        $response->assertExactJson([
            'message' => "The user does not exist or does not have a user profile",
        ]);
    }
}
