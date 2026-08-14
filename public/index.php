<?php
// public/index.php

// 1. Start Session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// 2. Custom PSR-4 Autoloader for App\ namespace
spl_autoload_register(function ($class) {
    $prefix = 'App\\';
    $baseDir = __DIR__ . '/../app/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relativeClass = substr($class, $len);
    $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});

// 3. Initialize Router & Load Route Definitions
use App\Core\Router;

$router = new Router();

require __DIR__ . '/../routes/web.php';
require __DIR__ . '/../routes/admin.php';

// 4. Dispatch Request
$requestMethod = $_SERVER['REQUEST_METHOD'];
$requestUri = $_SERVER['REQUEST_URI'];

$router->dispatch($requestMethod, $requestUri);
