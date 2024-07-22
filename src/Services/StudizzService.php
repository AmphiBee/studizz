<?php

declare(strict_types=1);

namespace AmphiBee\Studizz\Services;

use AmphiBee\Studizz\Clients\StudizzApiClient;
use AmphiBee\Studizz\Contracts\StudizzApiClientInterface;

class StudizzService
{
    private StudizzApiClientInterface $client;

    public function __construct(StudizzApiClient $client)
    {
        $this->client = $client;
    }
}
