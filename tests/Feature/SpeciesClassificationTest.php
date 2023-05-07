<?php

namespace Tests\Feature;

use Illuminate\Http\Response;
use Tests\TestCase;

class SpeciesClassificationTest extends TestCase
{
    /**
     * @return void
     */
    public function test_returns_classification_of_species_in_episode_one()
    {
        $response = $this->get('/api/species-classification');
        $response->assertStatus(Response::HTTP_OK);
    }
}
