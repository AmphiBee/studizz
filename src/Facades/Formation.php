<?php

declare(strict_types=1);

namespace AmphiBee\Studizz\Facades;

use Illuminate\Support\Facades\Facade;

class Formation extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string The fully qualified class name of the service implementation.
     */
    protected static function getFacadeAccessor()
    {
        return \AmphiBee\Studizz\Services\FormationService::class;
    }
}
