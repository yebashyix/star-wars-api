<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class GalaxyPopulationController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        try {
            $client = new Client();
            $planetsUrl = 'https://swapi.dev/api/planets/';
            $totalPopulation = 0;

            do {
                $response = $client->request('GET', $planetsUrl);
                $planets = json_decode($response->getBody(), true);

                foreach ($planets['results'] as $planet) {
                    if ($planet['population'] !== 'unknown') {
                        $totalPopulation += (int) $planet['population'];
                    }
                }

                $planetsUrl = $planets['next'];
            } while ($planetsUrl !== null);

            return response()->json([
                'total_population' => $totalPopulation
            ]);
        } catch (\Throwable $exception) {
            return response()->json([
                'error' => 'An error occurred while processing your request.'
            ], 500);
        }
    }
}
