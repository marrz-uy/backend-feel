<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Tymon\JWTAuth\Facades\JWTAuth;

class ShowProfileTest extends TestCase
{
    public function test_Ver_pefil___Operacion_exitosa()
    {
        //? Insert de un usuario para asegurar existencia de a quien se agregan las preferencias
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

        //? Se hace Login con usuario para generar el JWToken
        $response = $this->withHeaders([
            'Content-type' => 'application/json',
        ])->postJson('/api/login', [
            'email'    => $email,
            'password' => $password,
        ]);

        $user  = User::where('email', $email)->first();
        $token = JWTAuth::fromUser($user);

        //? Creo Perfil
        $response = $this->withHeaders([
            'content-type'  => 'application/json',
            'Authorization' => 'Bearer' . $token,
        ])->postJson('/api/userProfile', [
            'user_id'      => $user->id,
            'nacionalidad' => 'Uruguayo',
            'f_nacimiento' => '2020-08-23',
            'preferencias' => 'idgdfgdfgdfgdgdgdfgdfgdgdfgdgdf',
        ]);

        //? VER Perfil
        $response = $this->withHeaders([
            'content-type'  => 'application/json',
            'Authorization' => 'Bearer' . $token,
        ])->getJson('api/userProfile/' . $user->id);

        $response->assertStatus(200);

    }

    public function test_Ver_pefil___Operacion_fallida___error_en_endpoint()
    {
        //? Insert de un usuario para asegurar existencia de a quien se agregan las preferencias
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

        //? Se hace Login con usuario para generar el JWToken
        $response = $this->withHeaders([
            'Content-type' => 'application/json',
        ])->postJson('/api/login', [
            'email'    => $email,
            'password' => $password,
        ]);

        $user  = User::where('email', $email)->first();
        $token = JWTAuth::fromUser($user);

        //? Creo Perfil
        $response = $this->withHeaders([
            'content-type'  => 'application/json',
            'Authorization' => 'Bearer' . $token,
        ])->postJson('/api/userProfile', [
            'user_id'      => $user->id,
            'nacionalidad' => 'Uruguayo',
            'f_nacimiento' => '2020-08-23',
            'preferencias' => 'idgdfgdfgdfgdgdgdfgdfgdgdfgdgdf',
        ]);


        $response = $this->withHeaders([
            'content-type'  => 'application/json',
            'Authorization' => 'Bearer' . $token,
        ])->getJson('api/userProfil/' . $user->id);

        $response->assertStatus(404);

    }
}
