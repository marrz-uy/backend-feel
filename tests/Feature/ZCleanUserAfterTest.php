<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class ZCleanUserAfterTest extends TestCase
{
    public function test_Eliminar_usuario1_creado_para_los_test()
    {
        // Insert de un usuario para asegurar existencia de a quien se agregan las preferencias
        $email                = getenv('API_USER_EMAIL1');
        $password             = getenv('API_USER_PASSWORD1');
        $passwordConfirmation = getenv('API_USER_PASSWORDCONFIRMATION1');
        $name                 = getenv('API_USER_NAME1');

        //Se hace Login con usuario para generar el Token
        $response = $this->withHeaders([
            'Content-type' => 'application/json',
        ])->postJson('/api/login', [
            'email'    => $email,
            'password' => $password,
        ]);

        $token = Auth::user()->createToken('authToken')->accessToken;

        // Al tener el token se puede proceder a eliminar los registros creados en los test
        $email = getenv('API_USER_EMAIL1');

        $response = $this->withHeaders([
            'content-type'  => 'application/json',
            'Authorization' => 'Bearer' . $token,
        ])->postJson('/api/deleteUsers', [
            'user' => $email,
           
        ]);
        $response->assertStatus(200);
    }

    public function test_Eliminar_usuario2_creado_para_los_test()
    {
        // Insert de un usuario para asegurar existencia de a quien se agregan las preferencias
        $email                = getenv('API_USER_EMAIL2');
        $password             = getenv('API_USER_PASSWORD2');
        $passwordConfirmation = getenv('API_USER_PASSWORDCONFIRMATION2');
        $name                 = getenv('API_USER_NAME2');

        //Se hace Login con usuario para generar el Token
        $response = $this->withHeaders([
            'Content-type' => 'application/json',
        ])->postJson('/api/login', [
            'email'    => $email,
            'password' => $password,
        ]);

        $token = Auth::user()->createToken('authToken')->accessToken;

        // Al tener el token se puede proceder a eliminar los registros creados en los test
        $email = getenv('API_USER_EMAIL2');

        $response = $this->withHeaders([
            'content-type'  => 'application/json',
            'Authorization' => 'Bearer' . $token,
        ])->postJson('/api/deleteUsers', [
            'user' => $email
        ]);
        $response->assertStatus(200);
    }

    public function test_Eliminar_usuario3_creado_para_los_test()
    {
        // Insert de un usuario para asegurar existencia de a quien se agregan las preferencias
        $email                = getenv('API_USER_EMAIL3');
        $password             = getenv('API_USER_PASSWORD3');
        $passwordConfirmation = getenv('API_USER_PASSWORDCONFIRMATION3');
        $name                 = getenv('API_USER_NAME3');

        //Se hace Login con usuario para generar el Token
        $response = $this->withHeaders([
            'Content-type' => 'application/json',
        ])->postJson('/api/login', [
            'email'    => $email,
            'password' => $password,
        ]);

        $token = Auth::user()->createToken('authToken')->accessToken;

        // Al tener el token se puede proceder a eliminar los registros creados en los test
        $email = getenv('API_USER_EMAIL3');

        $response = $this->withHeaders([
            'content-type'  => 'application/json',
            'Authorization' => 'Bearer' . $token,
        ])->postJson('/api/deleteUsers', [
            'user' => $email
        ]);
        $response->assertStatus(200);
    }

    public function test_Eliminar_usuario4_creado_para_los_test()
    {
        // Insert de un usuario para asegurar existencia de a quien se agregan las preferencias
        $email                = getenv('API_USER_EMAIL4');
        $password             = getenv('API_USER_PASSWORD4');
        $passwordConfirmation = getenv('API_USER_PASSWORDCONFIRMATION4');
        $name                 = getenv('API_USER_NAME4');

        //Se hace Login con usuario para generar el Token
        $response = $this->withHeaders([
            'Content-type' => 'application/json',
        ])->postJson('/api/login', [
            'email'    => $email,
            'password' => $password,
        ]);

        $token = Auth::user()->createToken('authToken')->accessToken;

        // Al tener el token se puede proceder a eliminar los registros creados en los test
        $email = getenv('API_USER_EMAIL4');

        $response = $this->withHeaders([
            'content-type'  => 'application/json',
            'Authorization' => 'Bearer' . $token,
        ])->postJson('/api/deleteUsers', [
            'user' => $email
        ]);
        $response->assertStatus(200);
    }

    public function test_Eliminar_usuario5_creado_para_los_test()
    {
        // Insert de un usuario para asegurar existencia de a quien se agregan las preferencias
        $email                = getenv('API_USER_EMAIL5');
        $password             = getenv('API_USER_PASSWORD5');
        $passwordConfirmation = getenv('API_USER_PASSWORDCONFIRMATION5');
        $name                 = getenv('API_USER_NAME5');

        //Se hace Login con usuario para generar el Token
        $response = $this->withHeaders([
            'Content-type' => 'application/json',
        ])->postJson('/api/login', [
            'email'    => $email,
            'password' => $password,
        ]);

        $token = Auth::user()->createToken('authToken')->accessToken;

        // Al tener el token se puede proceder a eliminar los registros creados en los test
        $email = getenv('API_USER_EMAIL5');

        $response = $this->withHeaders([
            'content-type'  => 'application/json',
            'Authorization' => 'Bearer' . $token,
        ])->postJson('/api/deleteUsers', [
            'user' => $email
        ]);
        $response->assertStatus(200);
    }
}
