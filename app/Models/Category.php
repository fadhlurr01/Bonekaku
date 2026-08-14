<?php
// app/Models/Category.php

namespace App\Models;

use App\Core\Model;

class Category extends Model {
    protected string $table = 'categories';

    public function getAllWithProductCount(): array {
        $sql = "SELECT c.*, COUNT(p.id) as product_count 
                FROM categories c 
                LEFT JOIN products p ON c.id = p.category_id 
                GROUP BY c.id 
                ORDER BY c.category_name ASC";
        return $this->db->query($sql)->fetchAll();
    }

    public function create(array $data): bool {
        $sql = "INSERT INTO categories (category_name, slug) VALUES (:category_name, :slug)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            'category_name' => $data['category_name'],
            'slug' => $data['slug']
        ]);
    }

    public function count(): int {
        return (int) $this->db->query("SELECT COUNT(*) FROM categories")->fetchColumn();
    }
}
