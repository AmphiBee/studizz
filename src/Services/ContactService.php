<?php

declare(strict_types=1);

namespace AmphiBee\Studizz\Services;

use AmphiBee\Studizz\Contracts\StudizzApiClientInterface;
use AmphiBee\Studizz\Dto\ContactDto;

class ContactService
{
    private StudizzApiClientInterface $client;
    private mixed $rawResponse = null;

    public function __construct(StudizzApiClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * Creates a new contact using the provided ContactDto object.
     *
     * @param ContactDto $contactDto The ContactDto object containing the contact details.
     * @return ContactDto The created contact represented as a ContactDto object.
     */
    public function create(ContactDto $contactDto): ContactDto|array
    {
        $this->rawResponse = $this->client->post('contacts', $contactDto->toArray());

        if ($this->rawResponse['code'] === 200) {
            return new ContactDto($this->rawResponse['data']);
        } else {
            return $this->rawResponse;
        }
    }

    /**
     * Retrieves the fields available for contacts.
     *
     * @return array An array containing the available fields for contacts.
     */
    public function getFields(): ?array
    {
        $this->rawResponse = $this->client->get('contacts/fields');
        return $this->rawResponse;
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
