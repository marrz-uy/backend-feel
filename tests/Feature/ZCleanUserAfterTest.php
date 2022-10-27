<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Tymon\JWTAuth\Facades\JWTAuth;

class ZCleanUserAfterTest extends TestCase
{
    public function test_Eliminar_usuarios_Despues_de_testing()
    {
         // Insert de un usuario para asegurar existencia de a quien se agregan las preferencias
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
 
         //Se hace Login con usuario para generar el JWToken
         $response = $this->withHeaders([
             'Content-type' => 'application/json',
         ])->postJson('/api/login', [
             'email'    => $email,
             'password' => $password,
         ]);
 
         $user  = User::where('email', $email)->first();
        //  $token = JWTAuth::fromUser($user);

         // Al tener el token se puede proceder a eliminar los registros creados en los test

        $email1 = getenv('API_USER_EMAIL1');
        // $email2 = getenv('API_USER_EMAIL2');
        // $email3 = getenv('API_USER_EMAIL3');
        // $email4 = getenv('API_USER_EMAIL4');
        $user  = User::where('email', $email)->first();
        // $token = JWTAuth::fromUser($user);

        $response = $this->withHeaders([
            'content-type' => 'application/json',
            'Authorization' => 'Bearer' . $token,
        ])->postJson('/api/deleteUsers', [
            'user1' => $email1,
            // 'user2' => $email2,
            // 'user3' => $email3,
            // 'user4' => $email4,
        ]);
        $response->assertStatus(200);
    }
}
