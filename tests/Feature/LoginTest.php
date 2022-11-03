<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Config;
use Tests\TestCase;

class LoginTest extends TestCase
{
    public function test_Login___Operacion_exitosa()
    {
        // Insert de un usuario para testear login
        $email                = getenv('API_USER_EMAIL2');
        $password             = getenv('API_USER_PASSWORD2');
        $passwordConfirmation = getenv('API_USER_PASSWORDCONFIRMATION2');
        $name                 = getenv('API_USER_NAME2');

        $response = $this->withHeaders([
            'content-type' => 'application/json',
        ])->postJson('/api/register', [
            'email'                => $email,
            'password'             => $password,
            'passwordConfirmation' => $passwordConfirmation,
            'name'                 => $name,
        ]);

        $response = $this->withHeaders([
            'Content-type' => 'application/json',
        ])->postJson('/api/login', [
            'email'    => $email,
            'password' => $password,
        ]);

        $response->assertStatus(200);
        $response->assertJsonStructure(["access_token"]);
    }

    public function test_Login___Operacion_fallida___usuario_que_no_existe()
    {
        $response = $this->withHeaders([
            'Content-type' => 'application/json',
        ])->postJson('/api/login', [
            'email'    => 'yessica@gmail.com',
            'password' => '12345678',
        ]);

        $response->assertStatus(401);
    }

    public function test_Login___Operacion_fallida___password_corto()
    {
        $email    = Config::get('api.apiEmail1');

        $response = $this->withHeaders([
            'Content-type' => 'application/json',
        ])->postJson('/api/login', [
            'email'    => $email,
            'password' => '123456',
        ]);

        $response->assertStatus(401);
    }
}
