<?php

namespace Tests\Feature;

use Tests\TestCase;

class ShowPuntoInteresTest extends TestCase
{
    public function test_ObtenerPuntosInteres()
    {
        $response = $this->post('/api/PuntosInteresCercanos/nombre/hospital');
        $response->assertStatus(200);
    }

    public function test_Paginacion()
    {
        $response = $this->post('/api/PuntosInteresCercanos/categoria/Servicios Esenciales');
        $response->assertJsonCount(12, "data");
        $response->assertJsonStructure(["next_page_url"]);
        $response->assertJsonStructure(["last_page_url"]);
        $response->assertJsonStructure(["current_page"]);
    }
}
