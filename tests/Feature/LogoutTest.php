<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class LogoutTest extends TestCase
{
    public function test_Logout_Correcto()
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

        $response = $this->withHeaders([
            'Content-type' => 'application/json',
        ])->postJson('/api/login', [
            "email"    => "martin1@gmail.com",
            "password" => "12345678",
        ]);

        $token = Auth::user()->createToken('authToken')->accessToken;

        $response = $this->withHeaders([
            'Content-type'  => 'application/json',
            'Authorization' => 'Bearer ' . $token,
        ])->postJson('/api/logout');

        $response
            ->assertStatus(200)
            ->assertExactJson(['Successfully logged out']);
    }

}
