<?php
// app/Controllers/ArticleController.php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Article;

class ArticleController extends Controller {
    public function blog(): void {
        $articleModel = new Article();
        $articles = $articleModel->getPublished(12, 0);

        $this->render('Public/artikel', [
            'title' => 'Artikel & Berita Seputar Bonekaku',
            'articles' => $articles
        ]);
    }

    public function show(string $slug): void {
        $articleModel = new Article();
        $article = $articleModel->findBySlug($slug);

        if (!$article) {
            http_response_code(404);
            $this->render('Public/404');
            return;
        }

        $latestArticles = $articleModel->getPublished(4, 0);
        $latestArticles = array_filter($latestArticles, fn($a) => $a['id'] !== $article['id']);

        $this->render('Public/artikel-detail', [
            'title' => $article['title'] . ' – Artikel Bonekaku',
            'article' => $article,
            'latestArticles' => array_slice($latestArticles, 0, 3)
        ]);
    }
}
