<?php
// app/Core/Middleware/AuthMiddleware.php

namespace App\Core\Middleware;

class AuthMiddleware {
    public function handle(): void {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (empty($_SESSION['admin_logged_in'])) {
            header('Location: /admin/login');
            exit;
        }
    }
}
