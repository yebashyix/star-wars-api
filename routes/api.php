<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LukeStarshipsController;
use App\Http\Controllers\SpeciesClassificationController;
use App\Http\Controllers\GalaxyPopulationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*
 * Star Wars API Endpoints
 */

Route::get('/luke-starships', [LukeStarshipsController::class, 'index']);
Route::get('/species-classification', [SpeciesClassificationController::class, 'index']);
Route::get('/galaxy-population', [GalaxyPopulationController::class, 'index']);
