<?php

namespace Tests\Feature;

use Illuminate\Http\Response;
use Tests\TestCase;

class LukeStarshipsTest extends TestCase
{
    /**
     * @return void
     */
    public function test_returns_starships_for_luke_skywalker()
    {
        $response = $this->get('/api/luke-starships');

        $response->assertStatus(Response::HTTP_OK);
        $response->assertJsonStructure([
            'starships',
        ]);
    }
}
