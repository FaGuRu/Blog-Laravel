<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WelcomeUsersTest extends TestCase
{
    /** @test */
    function it_welcomes_user_with_nickname()
    {
        $this->get('/saludo/fabricio/FaGuRu')
            ->assertStatus(200)
            ->assertSee('Biemvenido Fabricio, tu apodo es FaGuRu');
    }

    /** @test */
    function it_welcomes_user_without_nickname()
    {
        $this->get('/saludo/fabricio')
            ->assertStatus(200)
            ->assertSee('Biemvenido Fabricio, no cuentas conun apodo');
    }
}
