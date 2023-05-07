<?php

namespace Tests\Feature;

use Illuminate\Http\Response;
use Tests\TestCase;

class GalaxyPopulationTest extends TestCase
{
    /**
     * @return void
     */
    public function test_returns_galaxy_population()
    {
        $response = $this->get('/api/galaxy-population');
        $response->assertStatus(Response::HTTP_OK)
            ->assertJson([
                'total_population' => 1711401432500 // Replace with the expected total population of all planets in the galaxy
            ]);
    }
}
