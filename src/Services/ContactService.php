<?php

declare(strict_types=1);

namespace AmphiBee\Studizz\Services;

use AmphiBee\Studizz\Contracts\StudizzApiClientInterface;
use AmphiBee\Studizz\Dto\ContactDto;

class ContactService
{
    private StudizzApiClientInterface $client;

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
    public function create(ContactDto $contactDto): ContactDto
    {
        $response = $this->client->post('contacts', $contactDto->toArray());

        return new ContactDto($response);
    }

    /**
     * Retrieves the fields available for contacts.
     *
     * @return array An array containing the available fields for contacts.
     */
    public function getFields(): array
    {
        return $this->client->get('contacts/fields');
    }
}
