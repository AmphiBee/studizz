<?php
namespace AmphiBee\Studizz\Clients;

use AmphiBee\Studizz\Contracts\StudizzApiClientInterface;
use AmphiBee\Studizz\Exceptions\StudizzException;
use Illuminate\Support\Facades\Http;

/**
 * Client for interacting with the Studizz API.
 */
class StudizzApiClient implements StudizzApiClientInterface
{
    /**
     * The API key used for authentication with the Studizz API.
     *
     * @var string
     */
    private string $apiKey;

    /**
     * The base URL for the Studizz API.
     *
     * @var string
     */
    private string $baseUrl;


    /**
     * Constructs a new instance of the StudizzApiClient with the provided API key and base URL.
     *
     * @param  string  $apiKey  The API key to authenticate the client with the Studizz API.
     * @param  string  $baseUrl  The base URL of the Studizz API.
     */
    public function __construct(string $apiKey, string $baseUrl)
    {
        $this->apiKey = $apiKey;
        $this->baseUrl = $baseUrl;
    }

    /**
     * Sends a GET request to the Studizz API using the provided endpoint and optional parameters.
     *
     * @param string $endpoint The endpoint to send the GET request to.
     * @param array $params Optional parameters to include in the request.
     * @return array|null The response from the Studizz API as a JSON object.
     *
     * @throws StudizzException If the API request fails.
     */
    public function get(string $endpoint, array $params = []): ?array
    {
        $response = $this->request('GET', $endpoint, $params);

        return $response['code'] === 200 ? $response['data'] : null;
    }

    /**
     * Sends a POST request to the Studizz API using the provided endpoint and optional parameters.
     *
     * @param string $endpoint The endpoint to send the POST request to.
     * @param array $data Optional parameters to include in the request body.
     * @return array|null The response from the Studizz API as a JSON object.
     *
     * @throws StudizzException If the API request fails.
     */
    public function post(string $endpoint, array $data = []): ?array
    {
        $response = $this->request('POST', $endpoint, $data);

        return $response->getStatusCode() === 200 ? $response->json()['data'] : null;
    }

    /**
     * Sends a request to the Studizz API using the provided method, endpoint, and optional parameters.
     *
     * @param  string  $method  The HTTP method to use for the request (e.g., 'GET', 'POST', 'PUT', 'DELETE').
     * @param  string  $endpoint  The endpoint to send the request to.
     * @param  array  $data  Optional parameters to include in the request body.
     * @return array The response from the Studizz API as a JSON object.
     *
     * @throws StudizzException If the API request fails.
     */
    private function request(string $method, string $endpoint, array $data = [])
    {
        $response = Http::withHeaders([
            'x-api-key' => $this->apiKey,
            'Content-Type' => 'application/json',
        ])->$method("{$this->baseUrl}/{$endpoint}", $data);

        if ($response->failed()) {
            throw new StudizzException("API request failed: {$response->status()} - {$response->body()}");
        }

        return $response;
    }
}
