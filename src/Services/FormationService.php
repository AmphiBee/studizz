<?php

declare(strict_types=1);

namespace AmphiBee\Studizz\Services;

use AmphiBee\Studizz\Contracts\StudizzApiClientInterface;
use AmphiBee\Studizz\Dto\FormationDto;
use Illuminate\Support\Collection;

class FormationService
{
    private StudizzApiClientInterface $client;

    public function __construct(StudizzApiClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves all formations from the Studizz API.
     *
     * @return Collection A collection of FormationDto objects representing the formations.
     */
    public function getAll(): Collection
    {
        $response = $this->client->get('formations');

        return collect($response)->map(function ($formation) {
            return new FormationDto($formation);
        });
    }
}
