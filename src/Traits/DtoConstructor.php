<?php

namespace AmphiBee\Studizz\Traits;

trait DtoConstructor
{
    protected function initializeProperties(array $data, bool $requireIdAndName = false): void
    {
        if ($requireIdAndName && (!isset($data['id']) || !isset($data['name']))) {
            throw new \InvalidArgumentException('Les champs id et name sont obligatoires');
        }
        
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }
} 