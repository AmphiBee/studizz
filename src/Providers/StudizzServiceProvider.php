<?php

namespace AmphiBee\Studizz\Providers;

use AmphiBee\Studizz\Clients\StudizzApiClient;
use AmphiBee\Studizz\Contracts\StudizzApiClientInterface;
use AmphiBee\Studizz\Services\StudizzService;
use Illuminate\Support\ServiceProvider;

/**
 * Studizz service provider.
 *
 * @return void
 */
class StudizzServiceProvider extends ServiceProvider
{
    /**
     * Registers the Studizz service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../../config/studizz.php', 'studizz');

        // Lier l'interface à une implémentation concrète
        $this->app->bind(StudizzApiClientInterface::class, function ($app) {
            $apiKey = config('studizz.api_key');
            $baseUrl = config('studizz.base_url');

            if (empty($apiKey)) {
                throw new \InvalidArgumentException('API Key for Studizz is not set in configuration.');
            }

            return new StudizzApiClient($apiKey, $baseUrl);
        });

        // Register StudizzService in the service container
        $this->app->singleton(StudizzService::class, function ($app) {
            return new StudizzService($app->make(StudizzApiClientInterface::class));
        });
    }

    /**
     * Bootstraps the Studizz service provider.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../config/studizz.php' => config_path('studizz.php'),
        ], 'config');
    }
}
