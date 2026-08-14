<?php
// routes/web.php

use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Controllers\ServiceController;
use App\Controllers\PageController;
use App\Controllers\ContactController;
use App\Controllers\ArticleController;

/** @var App\Core\Router $router */

$router->get('/', [HomeController::class, 'index']);
$router->get('/index', [HomeController::class, 'index']);

// Katalog Routes
$router->get('/katalog', [ProductController::class, 'index']);
$router->get('/katalog/{slug}', [ProductController::class, 'show']);

// Layanan Route
$router->get('/layanan', [ServiceController::class, 'index']);

// Tentang Kami Route
$router->get('/tentang-kami', [PageController::class, 'about']);

// Kontak Kami Routes
$router->get('/kontak', [ContactController::class, 'index']);
$router->post('/kontak/submit', [ContactController::class, 'submit']);

// Artikel Routes
$router->get('/artikel', [ArticleController::class, 'blog']);
$router->get('/artikel/{slug}', [ArticleController::class, 'show']);
