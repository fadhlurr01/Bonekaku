<?php
// routes/admin.php

use App\Controllers\Auth\AdminAuthController;
use App\Controllers\AdminProductController;
use App\Controllers\AdminCategoryController;
use App\Controllers\AdminArticleController;
use App\Core\Middleware\AuthMiddleware;

/** @var App\Core\Router $router */

// Auth Routes
$router->get('/admin/login', [AdminAuthController::class, 'showLogin']);
$router->post('/admin/login', [AdminAuthController::class, 'login']);
$router->get('/admin/logout', [AdminAuthController::class, 'logout']);

// Protected Admin Dashboard
$router->get('/admin', [AdminProductController::class, 'dashboard'], [AuthMiddleware::class]);

// Product CRUD
$router->get('/admin/products', [AdminProductController::class, 'index'], [AuthMiddleware::class]);
$router->get('/admin/products/create', [AdminProductController::class, 'create'], [AuthMiddleware::class]);
$router->post('/admin/products/store', [AdminProductController::class, 'store'], [AuthMiddleware::class]);
$router->get('/admin/products/edit/{id}', [AdminProductController::class, 'edit'], [AuthMiddleware::class]);
$router->post('/admin/products/update/{id}', [AdminProductController::class, 'update'], [AuthMiddleware::class]);
$router->post('/admin/products/delete/{id}', [AdminProductController::class, 'delete'], [AuthMiddleware::class]);

// Category CRUD
$router->get('/admin/categories', [AdminCategoryController::class, 'index'], [AuthMiddleware::class]);
$router->post('/admin/categories/store', [AdminCategoryController::class, 'store'], [AuthMiddleware::class]);
$router->post('/admin/categories/delete/{id}', [AdminCategoryController::class, 'delete'], [AuthMiddleware::class]);

// Article CRUD
$router->get('/admin/articles', [AdminArticleController::class, 'index'], [AuthMiddleware::class]);
$router->get('/admin/articles/create', [AdminArticleController::class, 'create'], [AuthMiddleware::class]);
$router->post('/admin/articles/store', [AdminArticleController::class, 'store'], [AuthMiddleware::class]);
$router->get('/admin/articles/edit/{id}', [AdminArticleController::class, 'edit'], [AuthMiddleware::class]);
$router->post('/admin/articles/update/{id}', [AdminArticleController::class, 'update'], [AuthMiddleware::class]);
$router->post('/admin/articles/delete/{id}', [AdminArticleController::class, 'delete'], [AuthMiddleware::class]);
