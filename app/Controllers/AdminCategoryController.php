<?php
// app/Controllers/AdminCategoryController.php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Category;

class AdminCategoryController extends Controller {
    public function index(): void {
        $categoryModel = new Category();
        $categories = $categoryModel->getAllWithProductCount();

        $flash = $this->getFlash();
        $this->render('Admin/category/list', [
            'title' => 'Kelola Kategori – Admin Bonekaku',
            'categories' => $categories,
            'flash' => $flash
        ]);
    }

    public function store(): void {
        $name = trim($_POST['category_name'] ?? '');

        if (empty($name)) {
            $this->setFlash('error', 'Nama kategori wajib diisi.');
            $this->redirect('/admin/categories');
            return;
        }

        $categoryModel = new Category();
        $slug = $categoryModel->generateSlug($name);

        $success = $categoryModel->create([
            'category_name' => $name,
            'slug' => $slug
        ]);

        if ($success) {
            $this->setFlash('success', 'Kategori berhasil ditambahkan!');
        } else {
            $this->setFlash('error', 'Gagal menambahkan kategori.');
        }

        $this->redirect('/admin/categories');
    }

    public function delete(string $id): void {
        $categoryModel = new Category();
        $success = $categoryModel->delete((int)$id);

        if ($success) {
            $this->setFlash('success', 'Kategori berhasil dihapus.');
        } else {
            $this->setFlash('error', 'Gagal menghapus kategori.');
        }

        $this->redirect('/admin/categories');
    }
}
