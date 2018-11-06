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
        $this->connectJawsDbFromEnv();
    }

    public function connectJawsDbFromEnv()
    {
        if (!env('JAWSDB_URL')) {
            return;
        }

        $JawsDB = parse_url(env('JAWSDB_URL'));

        config(['database.connections.mysql.host'     => $JawsDB['host']]);
        config(['database.connections.mysql.port'     => $JawsDB['port']]);
        config(['database.connections.mysql.username' => $JawsDB['user']]);
        config(['database.connections.mysql.password' => $JawsDB['pass']]);
        config(['database.connections.mysql.database' => ltrim($JawsDB['path'], '/')]);
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
