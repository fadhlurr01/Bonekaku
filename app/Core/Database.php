<?php
// app/Core/Database.php

namespace App\Core;

use PDO;
use PDOException;

class Database {
    private static ?PDO $instance = null;

    public static function getConnection(): PDO {
        if (self::$instance === null) {
            $config = require __DIR__ . '/../../config/database.php';
            $driver = $config['driver'] ?? 'sqlite';

            try {
                if ($driver === 'mysql') {
                    $c = $config['mysql'];
                    $dsn = "mysql:host={$c['host']};port={$c['port']};dbname={$c['dbname']};charset={$c['charset']}";
                    self::$instance = new PDO($dsn, $c['username'], $c['password'], [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                        PDO::ATTR_EMULATE_PREPARES => false,
                    ]);
                } else {
                    // SQLite fallback
                    $dbFile = $config['sqlite']['database'];
                    $dir = dirname($dbFile);
                    if (!is_dir($dir)) {
                        mkdir($dir, 0777, true);
                    }

                    $isNew = !file_exists($dbFile) || filesize($dbFile) === 0;

                    self::$instance = new PDO("sqlite:" . $dbFile, null, null, [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    ]);

                    // Execute SQLite pragmas
                    self::$instance->exec("PRAGMA foreign_keys = ON;");

                    if ($isNew) {
                        self::seedDatabase();
                    }
                }
            } catch (PDOException $e) {
                // If MySQL connection fails, attempt fallback to SQLite
                if ($driver === 'mysql') {
                    $dbFile = __DIR__ . '/../../database/bonekaku.sqlite';
                    $dir = dirname($dbFile);
                    if (!is_dir($dir)) {
                        mkdir($dir, 0777, true);
                    }
                    $isNew = !file_exists($dbFile) || filesize($dbFile) === 0;

                    self::$instance = new PDO("sqlite:" . $dbFile, null, null, [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    ]);
                    self::$instance->exec("PRAGMA foreign_keys = ON;");
                    if ($isNew) {
                        self::seedDatabase();
                    }
                } else {
                    die("Database Connection Error: " . $e->getMessage());
                }
            }
        }

        return self::$instance;
    }

    public static function seedDatabase(): void {
        $pdo = self::getConnection();
        $schemaSql = file_get_contents(__DIR__ . '/../../database/schema.sql');
        $seedSql = file_get_contents(__DIR__ . '/../../database/seed.sql');

        if ($schemaSql) {
            $pdo->exec($schemaSql);
        }

        // Check if admin table has rows
        $stmt = $pdo->query("SELECT COUNT(*) as cnt FROM sqlite_master WHERE type='table' AND name='admins'");
        $tableExists = $stmt->fetchColumn() > 0;

        if ($tableExists) {
            $countStmt = $pdo->query("SELECT COUNT(*) FROM admins");
            if ($countStmt->fetchColumn() == 0 && $seedSql) {
                $pdo->exec($seedSql);
            }
        }
    }
}
