<?php
// app/Controllers/AdminArticleController.php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Article;

class AdminArticleController extends Controller {
    public function index(): void {
        $articleModel = new Article();
        $articles = $articleModel->all();

        $flash = $this->getFlash();
        $this->render('Admin/article/list', [
            'title' => 'Kelola Artikel – Admin Bonekaku',
            'articles' => $articles,
            'flash' => $flash
        ]);
    }

    public function create(): void {
        $flash = $this->getFlash();
        $this->render('Admin/article/form', [
            'title' => 'Tulis Artikel Baru – Admin Bonekaku',
            'article' => null,
            'flash' => $flash
        ]);
    }

    public function store(): void {
        $title = trim($_POST['title'] ?? '');
        $content = trim($_POST['content'] ?? '');
        $author = trim($_POST['author'] ?? 'Bonekaku.co.id');

        if (empty($title) || empty($content)) {
            $this->setFlash('error', 'Judul dan isi artikel wajib diisi.');
            $this->redirect('/admin/articles/create');
            return;
        }

        $articleModel = new Article();
        $slug = $articleModel->generateSlug($title);

        $thumbnailPath = '';
        if (isset($_FILES['thumbnail']) && $_FILES['thumbnail']['error'] === UPLOAD_ERR_OK) {
            $thumbnailPath = $this->handleFileUpload($_FILES['thumbnail']);
        }

        $success = $articleModel->create([
            'title' => $title,
            'slug' => $slug,
            'content' => $content,
            'thumbnail_path' => $thumbnailPath,
            'author' => $author,
            'published_at' => date('Y-m-d H:i:s')
        ]);

        if ($success) {
            $this->setFlash('success', 'Artikel berhasil diterbitkan!');
            $this->redirect('/admin/articles');
        } else {
            $this->setFlash('error', 'Gagal menerbitkan artikel.');
            $this->redirect('/admin/articles/create');
        }
    }

    public function edit(string $id): void {
        $articleModel = new Article();
        $article = $articleModel->find((int)$id);

        if (!$article) {
            $this->setFlash('error', 'Artikel tidak ditemukan.');
            $this->redirect('/admin/articles');
            return;
        }

        $flash = $this->getFlash();
        $this->render('Admin/article/form', [
            'title' => 'Edit Artikel – Admin Bonekaku',
            'article' => $article,
            'flash' => $flash
        ]);
    }

    public function update(string $id): void {
        $articleId = (int)$id;
        $articleModel = new Article();
        $existing = $articleModel->find($articleId);

        if (!$existing) {
            $this->setFlash('error', 'Artikel tidak ditemukan.');
            $this->redirect('/admin/articles');
            return;
        }

        $title = trim($_POST['title'] ?? '');
        $content = trim($_POST['content'] ?? '');
        $author = trim($_POST['author'] ?? 'Bonekaku.co.id');

        $slug = $existing['slug'];
        if ($title !== $existing['title']) {
            $slug = $articleModel->generateSlug($title);
        }

        $thumbnailPath = $existing['thumbnail_path'];
        if (isset($_FILES['thumbnail']) && $_FILES['thumbnail']['error'] === UPLOAD_ERR_OK) {
            $uploaded = $this->handleFileUpload($_FILES['thumbnail']);
            if ($uploaded) {
                $thumbnailPath = $uploaded;
            }
        }

        $success = $articleModel->update($articleId, [
            'title' => $title,
            'slug' => $slug,
            'content' => $content,
            'thumbnail_path' => $thumbnailPath,
            'author' => $author,
            'published_at' => $existing['published_at']
        ]);

        if ($success) {
            $this->setFlash('success', 'Artikel berhasil diperbarui!');
            $this->redirect('/admin/articles');
        } else {
            $this->setFlash('error', 'Gagal memperbarui artikel.');
            $this->redirect('/admin/articles/edit/' . $articleId);
        }
    }

    public function delete(string $id): void {
        $articleModel = new Article();
        $success = $articleModel->delete((int)$id);

        if ($success) {
            $this->setFlash('success', 'Artikel berhasil dihapus.');
        } else {
            $this->setFlash('error', 'Gagal menghapus artikel.');
        }

        $this->redirect('/admin/articles');
    }

    private function handleFileUpload(array $file): string {
        $allowedTypes = ['image/jpeg', 'image/png', 'image/webp'];
        if (!in_array($file['type'], $allowedTypes)) {
            return '';
        }

        $targetDir = __DIR__ . '/../../public/assets/images/';
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        $filename = time() . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', basename($file['name']));
        $targetFile = $targetDir . $filename;

        if (move_uploaded_file($file['tmp_name'], $targetFile)) {
            return $filename;
        }

        return '';
    }
}
