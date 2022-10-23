<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;
use Tymon\JWTAuth\Facades\JWTAuth;

class RegisterProfileTest extends TestCase
{
    public function test_Registro_Perfil___Operacion_Exitosa()
    {
        //? Insert de un usuario para asegurar existencia de a quien se agregan las preferencias
        $email                = getenv('API_USER_EMAIL1');
        $password             = getenv('API_USER_PASSWORD1');
        $passwordConfirmation = getenv('API_USER_PASSWORDCONFIRMATION1');
        $name                 = getenv('API_USER_NAME1');

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

        $response = $this->withHeaders([
            'content-type'  => 'application/json',
            'Authorization' => 'Bearer' . $token,
        ])->postJson('/api/userProfile', [
            'user_id'      => $user->id,
            'nacionalidad' => 'Uruguayo',
            'f_nacimiento' => '2020-08-23',
            'preferencias' => 'idgdfgdfgdfgdgdgdfgdfgdgdfgdgdf',
        ]);

        $response->assertStatus(200);

    }

    public function test_Registro_Perfil___Confirmar_Que_se_agrego()
    {
        //? Insert de un usuario para asegurar existencia de a quien se agregan las preferencias
        $email                = getenv('API_USER_EMAIL1');
        $password             = getenv('API_USER_PASSWORD1');
        $passwordConfirmation = getenv('API_USER_PASSWORDCONFIRMATION1');
        $name                 = getenv('API_USER_NAME1');

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

    public function test_Registro_Perfil___Operacion_Fallida()
    {
        //? Insert de un usuario para asegurar existencia de a quien se agregan las preferencias
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

        //? Se hace Login con usuario para generar el JWToken
        $response = $this->withHeaders([
            'Content-type' => 'application/json',
        ])->postJson('/api/login', [
            'email'    => $email,
            'password' => $password,
        ]);

        $user  = User::where('email', $email)->first();
        $token = JWTAuth::fromUser($user);

        $response = $this->withHeaders([
            'content-type'  => 'application/json',
            'Authorization' => 'Bearer' . $token,
        ])->postJson('/api/userProfile', [
            'user_id'      => $user->id,
            'nacionalidad' => 'Uruguayo',
            'f_nacimiento' => '2020-08-',
            'preferencias' => 'idgdfgdfgdfgdgdgdfgdfgdgdfgdgdf',
        ]);

        $response->assertStatus(500);
    }
}
