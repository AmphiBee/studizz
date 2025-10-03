<?php

namespace AmphiBee\Studizz\Traits;

trait CleanArrayable
{
    public function toArray(): array
    {
        return array_filter(get_object_vars($this), function ($value) {
            return $value === 0 || ! empty($value);
        });
    }
} 