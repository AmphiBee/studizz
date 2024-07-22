<?php

declare(strict_types=1);

use AmphiBee\Studizz\Contracts\StudizzApiClientInterface;
use AmphiBee\Studizz\Dto\ContactDto;
use AmphiBee\Studizz\Services\ContactService;
use Mockery;

beforeEach(function () {
    $this->apiClient = Mockery::mock(StudizzApiClientInterface::class);
    $this->contactService = new ContactService($this->apiClient);
});

afterEach(function () {
    Mockery::close();
});

it('can create a contact', function () {
    $contactData = [
        'firstname' => 'John',
        'lastname' => 'Doe',
        'email' => 'john.doe@example.com',
    ];
    $contactDto = new ContactDto($contactData);

    $this->apiClient->shouldReceive('post')
        ->once()
        ->with('contacts', $contactDto->toArray())
        ->andReturn($contactData);

    $result = $this->contactService->create($contactDto);

    expect($result)->toBeInstanceOf(ContactDto::class)
        ->and($result->firstname)->toBe('John')
        ->and($result->lastname)->toBe('Doe')
        ->and($result->email)->toBe('john.doe@example.com');
});

it('can get contact fields', function () {
    $fieldsData = [
        'degreeLevel' => [
            'properties' => [
                'list' => [
                    ['id' => 1, 'name' => 'Bac+1'],
                    ['id' => 2, 'name' => 'Bac+2'],
                ],
            ],
        ],
    ];

    $this->apiClient->shouldReceive('get')
        ->once()
        ->with('contacts/fields')
        ->andReturn($fieldsData);

    $result = $this->contactService->getFields();

    expect($result)->toBe($fieldsData);
});

it('can add a file to a contact', function () {
    $contactData = [
        'firstname' => 'John',
        'lastname' => 'Doe',
        'email' => 'john.doe@example.com',
        'cV' => [
            'file' => base64_encode('file content'),
            'filename' => 'cv.pdf',
        ]
    ];
    $contactDto = new ContactDto($contactData);

    $this->apiClient->shouldReceive('post')
        ->once()
        ->with('contacts', $contactDto->toArray())
        ->andReturn($contactData);

    $result = $this->contactService->create($contactDto);

    expect($result)->toBeInstanceOf(ContactDto::class)
        ->and($result->firstname)->toBe('John')
        ->and($result->lastname)->toBe('Doe')
        ->and($result->email)->toBe('john.doe@example.com');
});
