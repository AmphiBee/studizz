<?php

namespace AmphiBee\Studizz\Dto;

use AmphiBee\Studizz\Traits\CleanArrayable;
use AmphiBee\Studizz\Traits\DtoConstructor;
use Illuminate\Contracts\Support\Arrayable;

/**
 * Represents a data transfer object (DTO) for a formation.
 */
class FormationDto implements Arrayable
{
    use CleanArrayable, DtoConstructor;

    public string $id;
    public string $name;
    public ?string $domain;
    public ?array $domains;
    public ?string $url;
    public ?string $subscriptionLink;
    public ?string $brochure;
    public ?string $image;
    public ?string $verticalImage;
    public ?string $horizontalImage;
    public ?string $crop;
    public ?array $campus;
    public ?array $schoolAntennas;
    public ?array $admissions;
    public ?array $admissionsPro;
    public ?array $type;
    public ?array $learningMode;
    public ?int $teachingType;
    public ?int $accessType;
    public ?string $description;
    public ?string $language;
    public ?string $slug;
    public ?float $price;
    public ?string $priceComment;
    public ?string $currency;
    public ?string $duration;
    public array|string|null $schoolContact;
    public ?string $video;
    public ?array $outlets;
    public ?bool $apprenticeship;
    public ?float $hiringRate;
    public ?float $averageSalary;
    public ?array $sessions;
    public ?int $createdAt;
    public ?int $updatedAt;
    public ?array $externalData;
    public ?bool $active;

    public function __construct(array $data)
    {
        $this->initializeProperties($data, true);
    }
}
