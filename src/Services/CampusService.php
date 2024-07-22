<?php

declare(strict_types=1);

namespace AmphiBee\Studizz\Services;

use AmphiBee\Studizz\Contracts\StudizzApiClientInterface;
use AmphiBee\Studizz\Dto\CampusDto;
use AmphiBee\Studizz\Dto\FormationDto;
use Illuminate\Support\Collection;

class CampusService
{
    private StudizzApiClientInterface $client;

    public function __construct(StudizzApiClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves all campuses from the Studizz API.
     *
     * @return Collection A collection of CampusDto objects representing the campuses.
     */
    public function getAll(): Collection
    {
        $response = $this->client->get('campus');

        return collect($response)->map(function ($formation) {
            return new CampusDto($formation);
        });
    }
}
