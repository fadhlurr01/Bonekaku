<?php
// app/Models/Article.php

namespace App\Models;

use App\Core\Model;
use PDO;

class Article extends Model {
    protected string $table = 'articles';

    public function getPublished(int $limit = 10, int $offset = 0): array {
        $sql = "SELECT * FROM articles ORDER BY published_at DESC, id DESC LIMIT :limit OFFSET :offset";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function create(array $data): bool {
        $sql = "INSERT INTO articles (title, slug, content, thumbnail_path, author, published_at) 
                VALUES (:title, :slug, :content, :thumbnail_path, :author, :published_at)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            'title' => $data['title'],
            'slug' => $data['slug'],
            'content' => $data['content'],
            'thumbnail_path' => $data['thumbnail_path'] ?? '',
            'author' => $data['author'] ?? 'Bonekaku.co.id',
            'published_at' => $data['published_at'] ?? date('Y-m-d H:i:s')
        ]);
    }

    public function update(int $id, array $data): bool {
        $sql = "UPDATE articles SET 
                title = :title, 
                slug = :slug, 
                content = :content, 
                thumbnail_path = :thumbnail_path, 
                author = :author, 
                published_at = :published_at 
                WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            'id' => $id,
            'title' => $data['title'],
            'slug' => $data['slug'],
            'content' => $data['content'],
            'thumbnail_path' => $data['thumbnail_path'] ?? '',
            'author' => $data['author'] ?? 'Bonekaku.co.id',
            'published_at' => $data['published_at'] ?? date('Y-m-d H:i:s')
        ]);
    }

    public function count(): int {
        return (int) $this->db->query("SELECT COUNT(*) FROM articles")->fetchColumn();
    }
}
