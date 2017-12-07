<?php

$mysqlDriver = [
    'driver'      => 'mysql',
    'unix_socket' => env('DB_SOCKET', ''),
    'charset'     => 'utf8mb4',
    'collation'   => 'utf8mb4_unicode_ci',
    'prefix'      => '',
    'strict'      => true,
    'engine'      => null,
];

$sqLite = [
    'driver'   => 'sqlite',
    'database' => env('DB_DATABASE', database_path('database.sqlite')),
    'prefix'   => '',
];

$pgSql = [
    'driver'   => 'pgsql',
    'host'     => env('DB_HOST', '127.0.0.1'),
    'port'     => env('DB_PORT', '5432'),
    'database' => env('DB_DATABASE', 'forge'),
    'username' => env('DB_USERNAME', 'forge'),
    'password' => env('DB_PASSWORD', ''),
    'charset'  => 'utf8',
    'prefix'   => '',
    'schema'   => 'public',
    'sslmode'  => 'prefer',
];

$sqlSrv = [
    'driver'   => 'sqlsrv',
    'host'     => env('DB_HOST', 'localhost'),
    'port'     => env('DB_PORT', '1433'),
    'database' => env('DB_DATABASE', 'forge'),
    'username' => env('DB_USERNAME', 'forge'),
    'password' => env('DB_PASSWORD', ''),
    'charset'  => 'utf8',
    'prefix'   => '',
];

return [

    'default' => 'default',

    'connections' => [

        'default' => array_merge($mysqlDriver, [
            'host'     => env('DB_HOST', '127.0.0.1'),
            'port'     => env('DB_PORT', '3306'),
            'database' => 'test',
            'username' => 'test',
            'password' => env('DB_PASSWORD', ''),
        ]),
    ],

    'migrations' => 'migrations',

    'redis' => [

        'client' => 'predis',

        'default' => [
            'host'     => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port'     => env('REDIS_PORT', 6379),
            'database' => 0,
        ],

    ],

];
