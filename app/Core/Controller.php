<?php
// app/Core/Controller.php

namespace App\Core;

abstract class Controller {
    protected function render(string $view, array $data = []): void {
        extract($data);
        $config = require __DIR__ . '/../../config/app.php';
        
        $viewFile = __DIR__ . '/../Views/' . $view . '.php';
        if (file_exists($viewFile)) {
            require $viewFile;
        } else {
            die("View [{$view}] not found at {$viewFile}");
        }
    }

    protected function redirect(string $url): void {
        header("Location: {$url}");
        exit;
    }

    protected function setFlash(string $type, string $message): void {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['flash'] = [
            'type' => $type,
            'message' => $message
        ];
    }

    protected function getFlash(): ?array {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        if (isset($_SESSION['flash'])) {
            $flash = $_SESSION['flash'];
            unset($_SESSION['flash']);
            return $flash;
        }
        return null;
    }
}
