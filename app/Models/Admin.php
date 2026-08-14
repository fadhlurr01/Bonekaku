<?php
// app/Models/Admin.php

namespace App\Models;

use App\Core\Model;

class Admin extends Model {
    protected string $table = 'admins';

    public function findByUsername(string $username): ?array {
        $stmt = $this->db->prepare("SELECT * FROM admins WHERE username = :username LIMIT 1");
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch();
        return $user ?: null;
    }

    public function verifyPassword(string $username, string $password): ?array {
        $user = $this->findByUsername($username);
        if ($user && password_verify($password, $user['password_hash'])) {
            return $user;
        }
        return null;
    }
}
