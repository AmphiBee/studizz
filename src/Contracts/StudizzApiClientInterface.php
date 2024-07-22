<?php

namespace AmphiBee\Studizz\Contracts;

/**
 * Interface for the Studizz API client.
 */
interface StudizzApiClientInterface
{
    /**
     * Sends a GET request to the Studizz API at the specified endpoint.
     *
     * This method should be used to retrieve data from the Studizz API. It allows optional
     * parameters to be specified that can modify the request.
     *
     * @param string $endpoint The API endpoint to send the GET request to.
     * @param array $params Optional parameters to include in the query string of the request.
     * @return array Returns the API response as an associative array.
     */
    public function get(string $endpoint, array $params = []);

    /**
     * Sends a POST request to the Studizz API at the specified endpoint.
     *
     * This method should be used to send data to the Studizz API. It allows data to be included
     * in the body of the request, typically used for creating or updating resources.
     *
     * @param string $endpoint The API endpoint to send the POST request to.
     * @param array $data Optional data to include in the body of the POST request.
     * @return array Returns the API response as an associative array.
     */
    public function post(string $endpoint, array $data = []);
}
