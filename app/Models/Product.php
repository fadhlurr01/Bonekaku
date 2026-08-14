<?php
// app/Models/Product.php

namespace App\Models;

use App\Core\Model;
use PDO;

class Product extends Model {
    protected string $table = 'products';

    public function getAllWithCategory(): array {
        $sql = "SELECT p.*, c.category_name, c.slug as category_slug 
                FROM products p 
                LEFT JOIN categories c ON p.category_id = c.id 
                ORDER BY p.id DESC";
        return $this->db->query($sql)->fetchAll();
    }

    public function getByCategorySlug(string $categorySlug): array {
        $sql = "SELECT p.*, c.category_name, c.slug as category_slug 
                FROM products p 
                JOIN categories c ON p.category_id = c.id 
                WHERE c.slug = :category_slug 
                ORDER BY p.id DESC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['category_slug' => $categorySlug]);
        return $stmt->fetchAll();
    }

    public function getFavorites(int $limit = 4): array {
        $sql = "SELECT p.*, c.category_name 
                FROM products p 
                LEFT JOIN categories c ON p.category_id = c.id 
                WHERE p.is_favorite = 1 
                ORDER BY p.id DESC LIMIT :limit";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getNewProducts(int $limit = 4): array {
        $sql = "SELECT p.*, c.category_name 
                FROM products p 
                LEFT JOIN categories c ON p.category_id = c.id 
                WHERE p.is_new = 1 
                ORDER BY p.id DESC LIMIT :limit";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findWithCategory(int $id): ?array {
        $sql = "SELECT p.*, c.category_name, c.slug as category_slug 
                FROM products p 
                LEFT JOIN categories c ON p.category_id = c.id 
                WHERE p.id = :id LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['id' => $id]);
        $res = $stmt->fetch();
        return $res ?: null;
    }

    public function findBySlugWithCategory(string $slug): ?array {
        $sql = "SELECT p.*, c.category_name, c.slug as category_slug 
                FROM products p 
                LEFT JOIN categories c ON p.category_id = c.id 
                WHERE p.slug = :slug LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['slug' => $slug]);
        $res = $stmt->fetch();
        return $res ?: null;
    }

    public function create(array $data): bool {
        $sql = "INSERT INTO products (category_id, product_name, slug, description, image_path, is_favorite, is_new) 
                VALUES (:category_id, :product_name, :slug, :description, :image_path, :is_favorite, :is_new)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            'category_id' => $data['category_id'],
            'product_name' => $data['product_name'],
            'slug' => $data['slug'],
            'description' => $data['description'] ?? '',
            'image_path' => $data['image_path'] ?? '',
            'is_favorite' => !empty($data['is_favorite']) ? 1 : 0,
            'is_new' => !empty($data['is_new']) ? 1 : 0
        ]);
    }

    public function update(int $id, array $data): bool {
        $sql = "UPDATE products SET 
                category_id = :category_id, 
                product_name = :product_name, 
                slug = :slug, 
                description = :description, 
                image_path = :image_path, 
                is_favorite = :is_favorite, 
                is_new = :is_new 
                WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            'id' => $id,
            'category_id' => $data['category_id'],
            'product_name' => $data['product_name'],
            'slug' => $data['slug'],
            'description' => $data['description'] ?? '',
            'image_path' => $data['image_path'] ?? '',
            'is_favorite' => !empty($data['is_favorite']) ? 1 : 0,
            'is_new' => !empty($data['is_new']) ? 1 : 0
        ]);
    }

    public function count(): int {
        return (int) $this->db->query("SELECT COUNT(*) FROM products")->fetchColumn();
    }
}
