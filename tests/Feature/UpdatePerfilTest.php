<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;
use Tymon\JWTAuth\Facades\JWTAuth;

class UpdatePerfilTest extends TestCase
{

    public function test_Actualizar_perfil___Operacion_exitosa()
    {
        $email = getenv('API_USER_EMAIL4');
        $user  = User::where('email', $email)->first();
        $token = JWTAuth::fromUser($user);

        $response = $this->withHeaders([
            'content-type'  => 'application/json',
            'Authorization' => 'Bearer' . $token,
        ])->patchJson('api/userProfile/' . $user->id, [
            'nacionalidad' => 'Paraguayo',
            'f_nacimiento' => '2015-09-23',
            'preferencias' => 'gksdgswtgdgdgdregdgdf',
        ]);

        $response->assertStatus(200);
    }

    public function test_Actualizar_perfil___Confirmar_actualizacion()
    {
        $email = getenv('API_USER_EMAIL4');
        
        $user  = User::where('email', $email)->first();
        $token = JWTAuth::fromUser($user);

        $response = $this->withHeaders([
            'content-type'  => 'application/json',
            'Authorization' => 'Bearer' . $token,
        ])->getJson('api/userProfile/' . $user->id);

        $expected = "Paraguayo";
        $actual   = $user->profile->nacionalidad;

        $this->assertEquals(
            $expected,
            $actual,
        );

    }

    public function test_Actualizar_perfil___Operacion_fallida___error_formato_de_fecha()
    {

        $email = getenv('API_USER_EMAIL1');

        $user  = User::where('email', $email)->first();
        $token = JWTAuth::fromUser($user);

        $response = $this->withHeaders([
            'content-type'  => 'application/json',
            'Authorization' => 'Bearer' . $token,
        ])->patchJson('api/userProfile/' . $user->id, [
            'nacionalidad' => 'Paraguayo',
            'f_nacimiento' => '2015-0',
            'preferencias' => 'gksdgswtgdgdgdregdgdf',
        ]);

        $response->assertStatus(500);

    }
}
