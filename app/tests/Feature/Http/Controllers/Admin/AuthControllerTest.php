<?php

namespace Tests\Feature\Http\Controllers\Admin;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Secode\Validation\RequiredParameterException;
use Tests\TestCase;

class AuthControllerTest extends TestCase
{
    use WithoutMiddleware;
    use DatabaseTransactions;

    public function test_the_post_login_returns_a_successful_response()
    {
        $response = $this->post('/api/v1/users/login', [
            'username' => "XD",
            "password" => "11"
        ]);

        $response->assertStatus(200);
    }

    public function test_the_post_login_returns_a_successful_authentification()
    {
        $response = $this->post('/api/v1/users/login', [
            'username' => "admin",
            "password" => "admin"
        ]);

        $response->assertStatus(200);
    }

    public function test_the_post_registrar_returns_a_bad_response()
    {
        $response = $this->post('/api/v1/users/registrar', [
            'username' => "admin2",
            "password" => "admin2"
        ]);

        $response->assertStatus(200);
    }

    public function test_the_post_registrar_returns_a_successful_response()
    {
        $response = $this->post('/api/v1/users/registrar', [
            'username' => "admin2",
            "password" => "admin2",
            "token" => '$2a$12$KecNKjzqK05GwlMG/bKie.gDAAx7VIIKpoGDQ/TbMwczYDwxxKYFi'
        ]);

        $response->assertStatus(200);
    }


    public function test_the_post_login_throws_400_error()
    {
        $this->expectException(RequiredParameterException::class);
        $this->post('/api/v1/users/login', [
            'username' => "XD",
        ]);
    }

    public function test_the_get_check_login_returns_a_successful_response()
    {
        $response = $this->get('/api/v1/users/checkLogin', [
            'username' => "admin2",
            "password" => "admin2"
        ]);

        $response->assertStatus(200);
    }
}
