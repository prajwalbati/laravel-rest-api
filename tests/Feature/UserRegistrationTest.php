<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;


class UserRegistrationTest extends TestCase
{
    use RefreshDatabase;
    /**
     * 
     * @test
     */
    public function a_user_can_register()
    {
        //user fills the form
        $user = [
            'email' => 'test@gmail.com',
            'name' => 'Test Name',
            'password' => '12345678',
        ];

        //user submits the form

        $this->json('post', 'api/register', $user)
            ->assertStatus(Response::HTTP_CREATED);
    }
}
