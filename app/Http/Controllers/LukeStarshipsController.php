<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class LukeStarshipsController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        try {
            $client = new Client();
            $response = $client->request('GET', 'https://swapi.dev/api/people/1/');
            $luke = json_decode($response->getBody(), true);

            $starships = [];
            foreach ($luke['starships'] as $starshipUrl) {
                $response = $client->request('GET', $starshipUrl);
                $starship = json_decode($response->getBody(), true);
                $starships[] = $starship;
            }

            return response()->json(['starships' => $starships]);
        } catch (\Throwable $exception) {
            return response()->json([
                'error' => 'An error occurred while processing your request.'
            ], 500);
        }
    }
}
