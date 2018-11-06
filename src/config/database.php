<?php

return [

    'connections' => array_merge(
        [],
        env('JAWSDB_URL', null) ?
        [
            'mysql' => [
                'driver'    => 'mysql',
                'host'      => env('DB_HOST',       parse_url(env('JAWSDB_URL'))['host']),
                'port'      => env('DB_PORT',       parse_url(env('JAWSDB_URL'))['port']),
                'database'  => env('DB_DATABASE',   ltrim(parse_url(env('JAWSDB_URL'))['path'], '/')),
                'username'  => env('DB_USERNAME',   parse_url(env('JAWSDB_URL'))['user']),
                'password'  => env('DB_PASSWORD',   parse_url(env('JAWSDB_URL'))['pass']),
                'charset'   => env('DB_CHARSET',    'utf8'),
                'collation' => env('DB_COLLATION',  'utf8_unicode_ci'),
                'prefix'    => env('DB_PREFIX',     ''),
                'timezone'  => env('DB_TIMEZONE',   '+00:00'),
                'strict'    => env('DB_STRICT_MODE', false),
            ],
        ] : []
    ),

];
