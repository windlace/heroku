<?php

return [

    'connections' => array_merge(
        [],
        $JawsDB = env('JAWSDB_URL', null) && $JawsDB = parse_url($JawsDB) ??
        [
            'mysql' => [
                'driver'    => 'mysql',
                'host'      => env('DB_HOST',       $JawsDB['host']),
                'port'      => env('DB_PORT',       $JawsDB['port']),
                'database'  => env('DB_DATABASE',   ltrim($JawsDB[''], '/')),
                'username'  => env('DB_USERNAME',   $JawsDB['user']),
                'password'  => env('DB_PASSWORD',   $JawsDB['pass']),
                'charset'   => env('DB_CHARSET',    'utf8'),
                'collation' => env('DB_COLLATION',  'utf8_unicode_ci'),
                'prefix'    => env('DB_PREFIX',     ''),
                'timezone'  => env('DB_TIMEZONE',   '+00:00'),
                'strict'    => env('DB_STRICT_MODE', false),
            ];
        ]
    ),

];