<?php
// app/Core/Router.php

namespace App\Core;

class Router {
    private array $routes = [];

    public function get(string $path, array $handler, array $middlewares = []): void {
        $this->addRoute('GET', $path, $handler, $middlewares);
    }

    public function post(string $path, array $handler, array $middlewares = []): void {
        $this->addRoute('POST', $path, $handler, $middlewares);
    }

    private function addRoute(string $method, string $path, array $handler, array $middlewares): void {
        $this->routes[] = [
            'method' => $method,
            'path' => $path,
            'handler' => $handler,
            'middlewares' => $middlewares
        ];
    }

    public function dispatch(string $requestMethod, string $requestUri): void {
        // Strip query parameters
        $uri = parse_url($requestUri, PHP_URL_PATH);
        
        // Remove trailing slash except root
        if ($uri !== '/' && substr($uri, -1) === '/') {
            $uri = rtrim($uri, '/');
        }

        foreach ($this->routes as $route) {
            if ($route['method'] !== strtoupper($requestMethod)) {
                continue;
            }

            // Convert route path pattern to regex e.g. /katalog/{slug} -> /katalog/(?P<slug>[^/]+)
            $pattern = preg_replace('/\{([a-zA-Z0-9_]+)\}/', '(?P<\1>[^/]+)', $route['path']);
            $pattern = "#^" . $pattern . "$#";

            if (preg_match($pattern, $uri, $matches)) {
                // Execute middlewares
                foreach ($route['middlewares'] as $middlewareClass) {
                    $middleware = new $middlewareClass();
                    $middleware->handle();
                }

                // Extract named params
                $params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);

                [$controllerClass, $action] = $route['handler'];
                $controller = new $controllerClass();

                call_user_func_array([$controller, $action], $params);
                return;
            }
        }

        // 404 Not Found
        http_response_code(404);
        $config = require __DIR__ . '/../../config/app.php';
        require __DIR__ . '/../Views/Public/404.php';
    }
}
