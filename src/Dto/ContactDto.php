<?php

namespace AmphiBee\Studizz\Dto;

use Illuminate\Contracts\Support\Arrayable;

/**
 * Represents a data transfer object for contact information.
 */
class ContactDto implements Arrayable
{
    public ?string $id;
    public ?string $title;
    public string $firstname;
    public string $lastname;
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

    public function __construct(array $data)
    {
        $this->id = $data['id'] ?? null;
        $this->title = $data['title'] ?? null;
        $this->firstname = $data['firstname'];
        $this->lastname = $data['lastname'];
        $this->email = $data['email'];
        $this->phone = $data['phone'] ?? null;
        $this->address1 = $data['address1'] ?? null;
        $this->address2 = $data['address2'] ?? null;
        $this->city = $data['city'] ?? null;
        $this->state = $data['state'] ?? null;
        $this->zipcode = $data['zipcode'] ?? null;
        $this->country = $data['country'] ?? null;
        $this->locale = $data['locale'] ?? null;
        $this->lastActive = $data['lastActive'] ?? null;
        $this->website = $data['website'] ?? null;
        $this->socialNetwork = $data['socialNetwork'] ?? null;
        $this->studizz_contact_id = $data['studizz_contact_id'] ?? null;
        $this->studizz_visitor_id = $data['studizz_visitor_id'] ?? null;
        $this->school = $data['school'] ?? null;
        $this->nbchats = $data['nbchats'] ?? null;
        $this->timechats = $data['timechats'] ?? null;
        $this->contactWhen = $data['contactWhen'] ?? null;
        $this->contactSubject = $data['contactSubject'] ?? null;
        $this->age = $data['age'] ?? null;
        $this->currentDomain = $data['currentDomain'] ?? null;
        $this->threads = $data['threads'] ?? null;
        $this->source = $data['source'] ?? null;
        $this->degree = $data['degree'] ?? null;
        $this->degreeLevel = $data['degreeLevel'] ?? null;
        $this->formation = $data['formation'] ?? null;
        $this->formationType = $data['formationType'] ?? null;
        $this->needContactBy = $data['needContactBy'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->englishLevel = $data['englishLevel'] ?? null;
        $this->steps = $data['steps'] ?? null;
        $this->qualifs = $data['qualifs'] ?? null;
        $this->score = $data['score'] ?? null;
        $this->wayContact = $data['wayContact'] ?? null;
        $this->validEmail = $data['validEmail'] ?? null;
        $this->hasValidPhoneNumber = $data['hasValidPhoneNumber'] ?? null;
        $this->stage = $data['stage'] ?? null;
        $this->stages = $data['stages'] ?? null;
        $this->notes = $data['notes'] ?? null;
        $this->teamAssigned = $data['teamAssigned'] ?? null;
        $this->mailIds = $data['mailIds'] ?? null;
        $this->lockBy = $data['lockBy'] ?? null;
        $this->flows = $data['flows'] ?? null;
        $this->participation = $data['participation'] ?? null;
        $this->withdrawal = $data['withdrawal'] ?? null;
        $this->interestedFormations = $data['interestedFormations'] ?? null;
        $this->deliveryExclusion = $data['deliveryExclusion'] ?? null;
        $this->customFields = $data['customFields'] ?? null;
        $this->createdAt = $data['createdAt'] ?? null;
        $this->updatedAt = $data['updatedAt'] ?? null;
        $this->oldCrmId = $data['oldCrmId'] ?? null;
        $this->organism = $data['organism'] ?? null;
        $this->organisms = $data['organisms'] ?? null;
        $this->job = $data['job'] ?? null;
        $this->landline = $data['landline'] ?? null;
        $this->relations = $data['relations'] ?? null;
        $this->rgpd = $data['rgpd'] ?? null;
        $this->documentsCollection = $data['documentsCollection'] ?? null;
        $this->itemsCatalog = $data['itemsCatalog'] ?? null;
        $this->archived = $data['archived'] ?? null;
    }

    public function toArray()
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'phone' => $this->phone,
            'address1' => $this->address1,
            'address2' => $this->address2,
            'city' => $this->city,
            'state' => $this->state,
            'zipcode' => $this->zipcode,
            'country' => $this->country,
            'locale' => $this->locale,
            'lastActive' => $this->lastActive,
            'website' => $this->website,
            'socialNetwork' => $this->socialNetwork,
            'studizz_contact_id' => $this->studizz_contact_id,
            'studizz_visitor_id' => $this->studizz_visitor_id,
            'school' => $this->school,
            'nbchats' => $this->nbchats,
            'timechats' => $this->timechats,
            'contactWhen' => $this->contactWhen,
            'contactSubject' => $this->contactSubject,
            'age' => $this->age,
            'currentDomain' => $this->currentDomain,
            'threads' => $this->threads,
            'source' => $this->source,
            'degree' => $this->degree,
            'degreeLevel' => $this->degreeLevel,
            'formation' => $this->formation,
            'formationType' => $this->formationType,
            'needContactBy' => $this->needContactBy,
            'status' => $this->status,
            'englishLevel' => $this->englishLevel,
            'steps' => $this->steps,
            'qualifs' => $this->qualifs,
            'score' => $this->score,
            'wayContact' => $this->wayContact,
            'validEmail' => $this->validEmail,
            'hasValidPhoneNumber' => $this->hasValidPhoneNumber,
            'stage' => $this->stage,
            'stages' => $this->stages,
            'notes' => $this->notes,
            'teamAssigned' => $this->teamAssigned,
            'mailIds' => $this->mailIds,
            'lockBy' => $this->lockBy,
            'flows' => $this->flows,
            'participation' => $this->participation,
            'withdrawal' => $this->withdrawal,
            'interestedFormations' => $this->interestedFormations,
            'deliveryExclusion' => $this->deliveryExclusion,
            'customFields' => $this->customFields,
            'createdAt' => $this->createdAt,
            'updatedAt' => $this->updatedAt,
            'oldCrmId' => $this->oldCrmId,
            'organism' => $this->organism,
            'organisms' => $this->organisms,
            'job' => $this->job,
            'landline' => $this->landline,
            'relations' => $this->relations,
            'rgpd' => $this->rgpd,
            'documentsCollection' => $this->documentsCollection,
            'itemsCatalog' => $this->itemsCatalog,
            'archived' => $this->archived,
        ];
    }
}
