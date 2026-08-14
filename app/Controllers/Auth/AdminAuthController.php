<?php
// app/Controllers/Auth/AdminAuthController.php

namespace App\Controllers\Auth;

use App\Core\Controller;
use App\Models\Admin;

class AdminAuthController extends Controller {
    public function showLogin(): void {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (!empty($_SESSION['admin_logged_in'])) {
            $this->redirect('/admin');
            return;
        }

        $flash = $this->getFlash();
        $this->render('Admin/login', [
            'title' => 'Login Admin – Bonekaku.co.id',
            'flash' => $flash
        ]);
    }

    public function login(): void {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $username = trim($_POST['username'] ?? '');
        $password = $_POST['password'] ?? '';

        if (empty($username) || empty($password)) {
            $this->setFlash('error', 'Username dan password wajib diisi.');
            $this->redirect('/admin/login');
            return;
        }

        $adminModel = new Admin();
        $user = $adminModel->verifyPassword($username, $password);

        if ($user) {
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_username'] = $user['username'];
            $_SESSION['admin_id'] = $user['id'];
            $this->setFlash('success', 'Selamat datang kembali, ' . htmlspecialchars($user['username']));
            $this->redirect('/admin');
        } else {
            $this->setFlash('error', 'Username atau password salah.');
            $this->redirect('/admin/login');
        }
    }

    public function logout(): void {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        unset($_SESSION['admin_logged_in'], $_SESSION['admin_username'], $_SESSION['admin_id']);
        session_destroy();
        header('Location: /admin/login');
        exit;
    }
}
