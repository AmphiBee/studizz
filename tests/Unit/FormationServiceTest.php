<?php

use AmphiBee\Studizz\Contracts\StudizzApiClientInterface;
use AmphiBee\Studizz\Dto\FormationDto;
use AmphiBee\Studizz\Services\FormationService;
use Mockery;

beforeEach(function () {
    $this->apiClient = Mockery::mock(StudizzApiClientInterface::class);
    $this->formationService = new FormationService($this->apiClient);
});

afterEach(function () {
    Mockery::close();
});

it('can get all formations', function () {
    $formationsData = [
        ['id' => '1', 'name' => 'Formation 1'],
        ['id' => '2', 'name' => 'Formation 2'],
    ];

    $this->apiClient->shouldReceive('get')
        ->once()
        ->with('formations')
        ->andReturn($formationsData);

    $result = $this->formationService->getAll();

    expect($result)->toBeInstanceOf(\Illuminate\Support\Collection::class)
        ->and($result->first())->toBeInstanceOf(FormationDto::class)
        ->and($result->first()->name)->toBe('Formation 1');
});
