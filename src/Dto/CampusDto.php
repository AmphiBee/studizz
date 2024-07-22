<?php

declare(strict_types=1);

namespace AmphiBee\Studizz\Dto;

use Illuminate\Contracts\Support\Arrayable;

class CampusDto implements Arrayable
{
    public ?string $id;

    public string $name;

    public function __construct(array|int $data)
    {
        $this->id = $data['uid'] ?? null;
        $this->name = $data['name'];
    }

    public function toArray()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
        ];
    }
}
