<?php
// config/database.php

return [
    'driver' => 'sqlite', // Default to sqlite for effortless zero-config local dev, or 'mysql'
    'mysql' => [
        'host' => '127.0.0.1',
        'port' => '3306',
        'dbname' => 'bonekaku_db',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8mb4'
    ],
    'sqlite' => [
        'database' => __DIR__ . '/../database/bonekaku.sqlite'
    ]
];
