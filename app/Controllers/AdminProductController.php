<?php
// app/Controllers/AdminProductController.php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Product;
use App\Models\Category;

class AdminProductController extends Controller {
    public function dashboard(): void {
        $productModel = new Product();
        $categoryModel = new Category();
        $articleModel = new \App\Models\Article();

        $totalProducts = $productModel->count();
        $totalCategories = $categoryModel->count();
        $totalArticles = $articleModel->count();
        $latestProducts = array_slice($productModel->getAllWithCategory(), 0, 5);

        $flash = $this->getFlash();
        $this->render('Admin/dashboard', [
            'title' => 'Admin Dashboard – Bonekaku',
            'totalProducts' => $totalProducts,
            'totalCategories' => $totalCategories,
            'totalArticles' => $totalArticles,
            'latestProducts' => $latestProducts,
            'flash' => $flash
        ]);
    }

    public function index(): void {
        $productModel = new Product();
        $products = $productModel->getAllWithCategory();

        $flash = $this->getFlash();
        $this->render('Admin/product/list', [
            'title' => 'Kelola Produk – Admin Bonekaku',
            'products' => $products,
            'flash' => $flash
        ]);
    }

    public function create(): void {
        $categoryModel = new Category();
        $categories = $categoryModel->all();

        $flash = $this->getFlash();
        $this->render('Admin/product/form', [
            'title' => 'Tambah Produk Baru – Admin Bonekaku',
            'categories' => $categories,
            'product' => null,
            'flash' => $flash
        ]);
    }

    public function store(): void {
        $productName = trim($_POST['product_name'] ?? '');
        $categoryId = (int) ($_POST['category_id'] ?? 0);
        $description = trim($_POST['description'] ?? '');
        $isFavorite = isset($_POST['is_favorite']) ? 1 : 0;
        $isNew = isset($_POST['is_new']) ? 1 : 0;

        if (empty($productName) || $categoryId <= 0) {
            $this->setFlash('error', 'Nama produk dan kategori wajib diisi.');
            $this->redirect('/admin/products/create');
            return;
        }

        $productModel = new Product();
        $slug = $productModel->generateSlug($productName);

        // Handle Image Upload
        $imagePath = '';
        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $imagePath = $this->handleFileUpload($_FILES['image']);
        }

        $success = $productModel->create([
            'category_id' => $categoryId,
            'product_name' => $productName,
            'slug' => $slug,
            'description' => $description,
            'image_path' => $imagePath,
            'is_favorite' => $isFavorite,
            'is_new' => $isNew
        ]);

        if ($success) {
            $this->setFlash('success', 'Produk berhasil ditambahkan!');
            $this->redirect('/admin/products');
        } else {
            $this->setFlash('error', 'Gagal menambahkan produk.');
            $this->redirect('/admin/products/create');
        }
    }

    public function edit(string $id): void {
        $productModel = new Product();
        $categoryModel = new Category();

        $product = $productModel->find((int)$id);
        if (!$product) {
            $this->setFlash('error', 'Produk tidak ditemukan.');
            $this->redirect('/admin/products');
            return;
        }

        $categories = $categoryModel->all();
        $flash = $this->getFlash();

        $this->render('Admin/product/form', [
            'title' => 'Edit Produk – Admin Bonekaku',
            'categories' => $categories,
            'product' => $product,
            'flash' => $flash
        ]);
    }

    public function update(string $id): void {
        $productId = (int)$id;
        $productModel = new Product();
        $existing = $productModel->find($productId);

        if (!$existing) {
            $this->setFlash('error', 'Produk tidak ditemukan.');
            $this->redirect('/admin/products');
            return;
        }

        $productName = trim($_POST['product_name'] ?? '');
        $categoryId = (int) ($_POST['category_id'] ?? 0);
        $description = trim($_POST['description'] ?? '');
        $isFavorite = isset($_POST['is_favorite']) ? 1 : 0;
        $isNew = isset($_POST['is_new']) ? 1 : 0;

        $slug = $existing['slug'];
        if ($productName !== $existing['product_name']) {
            $slug = $productModel->generateSlug($productName);
        }

        $imagePath = $existing['image_path'];
        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $uploaded = $this->handleFileUpload($_FILES['image']);
            if ($uploaded) {
                $imagePath = $uploaded;
            }
        }

        $success = $productModel->update($productId, [
            'category_id' => $categoryId,
            'product_name' => $productName,
            'slug' => $slug,
            'description' => $description,
            'image_path' => $imagePath,
            'is_favorite' => $isFavorite,
            'is_new' => $isNew
        ]);

        if ($success) {
            $this->setFlash('success', 'Produk berhasil diperbarui!');
            $this->redirect('/admin/products');
        } else {
            $this->setFlash('error', 'Gagal mengupdate produk.');
            $this->redirect('/admin/products/edit/' . $productId);
        }
    }

    public function delete(string $id): void {
        $productId = (int)$id;
        $productModel = new Product();
        $success = $productModel->delete($productId);

        if ($success) {
            $this->setFlash('success', 'Produk berhasil dihapus.');
        } else {
            $this->setFlash('error', 'Gagal menghapus produk.');
        }

        $this->redirect('/admin/products');
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
