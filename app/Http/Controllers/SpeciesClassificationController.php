<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class SpeciesClassificationController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        try {
            $client = new Client();
            $response = $client->request('GET', 'https://swapi.dev/api/films/1/');
            $film = json_decode($response->getBody(), true);

            $speciesClassifications = [];
            foreach ($film['species'] as $speciesUrl) {
                $response = $client->request('GET', $speciesUrl);
                $species = json_decode($response->getBody(), true);
                $speciesClassifications[] = [
                    "name" => $species['name'],
                    "classification" => $species['classification']
                ];
            }
            return response()->json(['species_classification' => $speciesClassifications]);
        } catch (\Throwable $exception) {
            return response()->json([
                'error' => 'An error occurred while processing your request.'
            ], 500);
        }
    }
}
