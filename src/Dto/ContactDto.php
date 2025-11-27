<?php

namespace AmphiBee\Studizz\Dto;

use AmphiBee\Studizz\Traits\CleanArrayable;
use AmphiBee\Studizz\Traits\DtoConstructor;
use Illuminate\Contracts\Support\Arrayable;

/**
 * Represents a data transfer object for contact information.
 */
class ContactDto implements Arrayable
{
    use CleanArrayable, DtoConstructor;

    public ?string $id;
    public ?string $title;
    public ?string $firstname;
    public ?string $lastname;
    public string $email;
    public ?string $phone;
    public ?string $address1;
    public ?string $address2;
    public ?string $city;
    public ?string $state;
    public ?string $zipcode;
    public ?string $country;
    public ?string $locale;
    public ?string $lastActive;
    public ?string $website;
    public ?array $socialNetwork;
    public ?string $studizz_contact_id;
    public ?string $studizz_visitor_id;
    public ?string $school;
    public ?int $nbchats;
    public ?string $timechats;
    public ?string $contactWhen;
    public ?string $contactSubject;
    public ?int $age;
    public ?string $currentDomain;
    public ?array $threads;
    public ?string $source;
    public ?string $degree;
    public ?int $degreeLevel;
    public ?string $formation;
    public ?string $formationType;
    public ?string $needContactBy;
    public ?string $status;
    public ?string $englishLevel;
    public ?array $steps;
    public ?array $qualifs;
    public ?int $score;
    public ?string $wayContact;
    public ?int $validEmail;
    public ?bool $hasValidPhoneNumber;
    public ?string $stage;
    public ?array $stages;
    public ?array $notes;
    public ?string $teamAssigned;
    public ?array $mailIds;
    public ?string $lockBy;
    public ?array $flows;
    public ?string $participation;
    public ?string $withdrawal;
    public ?array $interestedFormations;
    public ?string $deliveryExclusion;
    public ?array $customFields;
    public ?string $createdAt;
    public ?string $updatedAt;
    public ?string $oldCrmId;
    public ?string $organism;
    public ?array $organisms;
    public ?string $job;
    public ?string $landline;
    public ?array $relations;
    public ?string $rgpd;
    public ?array $documentsCollection;
    public ?array $itemsCatalog;
    public ?bool $archived;
    public ?array $evenement;
    public string|array|null $formationVisee;
    public ?string $utm_source;
    public ?string $utm_medium;
    public ?string $utm_campaign;
    public ?string $ad_click_id_tiktok;
    public ?string $ad_click_id_snapchat;
    public ?string $ad_click_id_meta;
    public ?string $ad_click_id_linkedin;
    public ?string $ad_click_id_google;
    public ?string $jeSuisUnParent;
    public ?string $nom_parent_;
    public ?string $prenom_parent_;
    public ?string $email_parent_;

    public function __construct(array $data)
    {
        $this->initializeProperties($data);
    }
}
