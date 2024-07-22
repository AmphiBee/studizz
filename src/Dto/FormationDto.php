<?php

namespace AmphiBee\Studizz\Dto;

use Illuminate\Contracts\Support\Arrayable;

/**
 * Represents a data transfer object (DTO) for a formation.
 */
class FormationDto implements Arrayable
{
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
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->domain = $data['domain'] ?? null;
        $this->domains = $data['domains'] ?? null;
        $this->url = $data['url'] ?? null;
        $this->subscriptionLink = $data['subscriptionLink'] ?? null;
        $this->brochure = $data['brochure'] ?? null;
        $this->image = $data['image'] ?? null;
        $this->verticalImage = $data['verticalImage'] ?? null;
        $this->horizontalImage = $data['horizontalImage'] ?? null;
        $this->crop = $data['crop'] ?? null;
        $this->campus = $data['campus'] ?? null;
        $this->schoolAntennas = $data['schoolAntennas'] ?? null;
        $this->admissions = $data['admissions'] ?? null;
        $this->admissionsPro = $data['admissionsPro'] ?? null;
        $this->type = $data['type'] ?? null;
        $this->learningMode = $data['learningMode'] ?? null;
        $this->teachingType = $data['teachingType'] ?? null;
        $this->accessType = $data['accessType'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->language = $data['language'] ?? null;
        $this->slug = $data['slug'] ?? null;
        $this->price = $data['price'] ?? null;
        $this->priceComment = $data['priceComment'] ?? null;
        $this->currency = $data['currency'] ?? null;
        $this->duration = $data['duration'] ?? null;
        $this->schoolContact = $data['schoolContact'] ?? null;
        $this->video = $data['video'] ?? null;
        $this->outlets = $data['outlets'] ?? null;
        $this->apprenticeship = $data['apprenticeship'] ?? null;
        $this->hiringRate = $data['hiringRate'] ?? null;
        $this->averageSalary = $data['averageSalary'] ?? null;
        $this->sessions = $data['sessions'] ?? null;
        $this->createdAt = $data['createdAt'] ?? null;
        $this->updatedAt = $data['updatedAt'] ?? null;
        $this->externalData = $data['externalData'] ?? null;
        $this->active = $data['active'] ?? null;
    }

    public function toArray()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'domain' => $this->domain,
            'domains' => $this->domains,
            'url' => $this->url,
            'subscriptionLink' => $this->subscriptionLink,
            'brochure' => $this->brochure,
            'image' => $this->image,
            'verticalImage' => $this->verticalImage,
            'horizontalImage' => $this->horizontalImage,
            'crop' => $this->crop,
            'campus' => $this->campus,
            'schoolAntennas' => $this->schoolAntennas,
            'admissions' => $this->admissions,
            'admissionsPro' => $this->admissionsPro,
            'type' => $this->type,
            'learningMode' => $this->learningMode,
            'teachingType' => $this->teachingType,
            'accessType' => $this->accessType,
            'description' => $this->description,
            'language' => $this->language,
            'slug' => $this->slug,
            'price' => $this->price,
            'priceComment' => $this->priceComment,
            'currency' => $this->currency,
            'duration' => $this->duration,
            'schoolContact' => $this->schoolContact,
            'video' => $this->video,
            'outlets' => $this->outlets,
            'apprenticeship' => $this->apprenticeship,
            'hiringRate' => $this->hiringRate,
            'averageSalary' => $this->averageSalary,
            'sessions' => $this->sessions,
            'createdAt' => $this->createdAt,
            'updatedAt' => $this->updatedAt,
            'externalData' => $this->externalData,
            'active' => $this->active,
        ];
    }
}
