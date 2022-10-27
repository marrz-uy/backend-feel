<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;
use Tymon\JWTAuth\Facades\JWTAuth;

class LogoutTest extends TestCase
{
    public function test_Logout_Correcto()
    {

        $email    = getenv('API_USER_EMAIL1');
        $password = getenv('API_USER_PASSWORD1');

        //Se hace Login con usuario para generar el JWToken
        $response = $this->withHeaders([
            'Content-type' => 'application/json',
        ])->postJson('/api/login', [
            'email'    => $email,
            'password' => $password,
        ]);

        //Se recupera el usuario y su JWToken
        // $user  = User::where('email', getenv('API_USER_EMAIL1'))->first();
        // $token = Auth::user()->createToken('authToken')->accessToken;

        $response = $this->withHeaders([
            'Content-type' => 'application/json',
        ])->postJson('/api/logout');

        $response
            ->assertStatus(200)
            ->assertExactJson([
                'message' => 'Successfully logged out',
            ]);
    }

}
