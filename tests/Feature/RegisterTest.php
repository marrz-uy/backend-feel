<?php

namespace Tests\Feature;

use Tests\TestCase;

class RegisterTest extends TestCase
{

    public function test_Registrar_usuario___Operacion_Exitosa()
    {

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

        $response->assertStatus(201);

    }

    public function test_Registrar_usuario___Confirmar_creacion___usuario_se_loguea()
    {

        $email    = getenv('API_USER_EMAIL2');
        $password = getenv('API_USER_PASSWORD2');

        $response = $this->withHeaders([
            'Content-type' => 'application/json',
        ])->postJson('/api/login', [
            'email'    => $email,
            'password' => $password,
        ]);

        $response->assertStatus(200);
    }

    public function test_Registrar_usuario___Operacion_fallida___error_en_correo()
    {
        $response = $this->withHeaders([
            'content-type' => 'application/json',
        ])->postJson('/api/register', [
            'email'                => '',
            'password'             => '12345678',
            'passwordConfirmation' => '12345678',
            'name'                 => 'martin',
        ]);

        $response->assertStatus(400);
    }

}
