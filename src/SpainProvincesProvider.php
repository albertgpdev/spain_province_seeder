<?php

namespace Albertgpdev\SpainProvinceSeeder;

use Illuminate\Support\ServiceProvider;

class SpainProvincesProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->bootConfig();
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }

     /**
     * Generates the boot Configuration
     *
     * @return void
     */
    protected function bootConfig()
    {
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->publishes([
            __DIR__.'/models' => app_path('Models')
        ], 'app');
        $this->publishes([
            __DIR__.'/database/seeds/' => database_path('seeds')
        ], 'migrations');
        
    }
}
