<?php

use AmphiBee\Studizz\Contracts\StudizzApiClientInterface;
use AmphiBee\Studizz\Dto\CampusDto;
use AmphiBee\Studizz\Services\CampusService;

beforeEach(function () {
    $this->apiClient = Mockery::mock(StudizzApiClientInterface::class);
    $this->campusService = new CampusService($this->apiClient);
});

afterEach(function () {
    Mockery::close();
});

it('can get all campus', function () {
    $campusData = [
        ['id' => '1', 'name' => 'Lille'],
        ['id' => '2', 'name' => 'Paris'],
    ];

    $this->apiClient->shouldReceive('get')
        ->once()
        ->with('campus')
        ->andReturn($campusData);

    $result = $this->campusService->getAll();

    expect($result)->toBeInstanceOf(\Illuminate\Support\Collection::class)
        ->and($result->first())->toBeInstanceOf(CampusDto::class)
        ->and($result->first()->name)->toBe('Lille');
});
