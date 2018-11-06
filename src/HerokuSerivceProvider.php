<?php

namespace Cast\Heroku;

use Illuminate\Support\ServiceProvider;

class HerokuServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // use the vendor configuration file as fallback
        $this->mergeConfigFrom(__DIR__.'/config/database.php', 'database');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
    }
}
