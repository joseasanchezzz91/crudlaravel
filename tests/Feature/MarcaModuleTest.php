<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MarcaModuleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_vistamarca()
    {
        $this->get('/marcas')->assertStatus(200);
    }

    public function test_vistamarcacreate()
    {
        $this->get('/marcas/create')->assertStatus(200);
    }

    public function test_vistamarcaver()
    {
        $this->get('/marca/ver')->assertStatus(200);
    }
}
