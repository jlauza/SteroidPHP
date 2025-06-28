<?php

$driver = getenv('DB_CONNECTION') ?? 'mysql';

// Check driver
switch ($driver) {
    case 'pgsql':
        if (!extension_loaded('pdo_pgsql')) {
            error_log("PostgreSQL driver not loaded.");
        }
        break;
    case 'mysql':
        if (!extension_loaded('pdo_mysql')) {
            error_log("MySQL driver not loaded.");
        }
        break;
    case 'sqlite':
        if (!extension_loaded('pdo_sqlite')) {
            error_log("SQLite driver not loaded.");
        }
        break;
}

return [
    'driver'    => $driver,
    'host'      => getenv('DB_HOST'),
    'database'  => getenv('DB_DATABASE'),
    'username'  => getenv('DB_USERNAME'),
    'password'  => getenv('DB_PASSWORD'),
    'charset'   => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'prefix'    => '',
];
