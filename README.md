# Star Wars API

This is a REST API built using PHP Laravel Framework that connects to the [Star Wars API](https://swapi.dev/documentation#intro). The API provides information about how to beat the Galactic Empire in Star Wars.

## Getting Started

To get started with the API, follow these steps:

1. Clone the repository: `git clone https://github.com/yebashyix/star-wars-api.git`.
2. Install dependencies: `composer install`.
3. Copy `.env.example` to `.env` and configure your environment variables.
4. Start the server: `php artisan serve`.

Now you can visit `http://localhost:8000` in your web browser to see the API documentation and available endpoints.
To interact with the API, you can use an HTTP client like cURL, Postman, or Insomnia.

## Endpoints

There are three endpoints available in this API:

### `GET /api/luke-starships`

This endpoint returns a list of the starships related to Luke Skywalker. The response is a JSON array with `starships` array of objects with the following properties:

- `name` (string): the name of the starship.
- `model` (string): the model of the starship.
- `manufacturer` (string): the manufacturer of the starship.
- `cost_in_credits` (string): the cost of the starship in credits.
- `length` (string): the length of the starship.
- `crew` (string): the number of crew members required to operate the starship.
- `passengers` (string): the maximum number of passengers the starship can carry.
- `cargo_capacity` (string): the maximum amount of cargo the starship can carry.
- `consumables` (string): the maximum duration the starship can operate without resupplying.
- `hyperdrive_rating` (string): the rating of the starship's hyperdrive.
- `MGLT` (string): the maximum number of megalights the starship can travel in a standard hour.
- `starship_class` (string): the class of the starship.

### `GET /api/species-classification`

This endpoint returns a JSON array with `species_classification` key, that is an array of objects with `name` and `classification`all species in the first episode of Star Wars.

### `GET /api/galaxy-population`

This endpoint returns the total population of all planets in the galaxy. The response is a JSON object with the following properties:

- `total_population` (integer): the total population of all planets in the galaxy.

## Tests

Tests are included with the API. To run the tests, use the following command:

```
php artisan test
```
