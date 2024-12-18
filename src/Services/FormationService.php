<?php

declare(strict_types=1);

namespace AmphiBee\Studizz\Services;

use AmphiBee\Studizz\Contracts\StudizzApiClientInterface;
use AmphiBee\Studizz\Dto\FormationDto;
use Illuminate\Support\Collection;

class FormationService
{
    private StudizzApiClientInterface $client;
    private mixed $rawResponse = null;

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
        $this->rawResponse = $this->client->get('formations');

        return collect($this->rawResponse)->map(function ($formation) {
            return new FormationDto($formation);
        });
    }

    /**
     * Retourne la dernière réponse brute de l'API.
     *
     * @return mixed La réponse brute de la dernière requête ou null si aucune requête n'a été effectuée
     */
    public function getRawResponse(): mixed
    {
        return $this->rawResponse;
    }
}
