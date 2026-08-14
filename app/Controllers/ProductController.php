<?php
// app/Controllers/ProductController.php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller {
    public function index(): void {
        $productModel = new Product();
        $categoryModel = new Category();

        $selectedCategory = $_GET['category'] ?? 'all';

        if ($selectedCategory !== 'all') {
            $products = $productModel->getByCategorySlug($selectedCategory);
        } else {
            $products = $productModel->getAllWithCategory();
        }

        $categories = $categoryModel->getAllWithProductCount();

        $this->render('Public/katalog', [
            'title' => 'Katalog Produk – Bonekaku.co.id',
            'products' => $products,
            'categories' => $categories,
            'selectedCategory' => $selectedCategory
        ]);
    }

    public function show(string $slug): void {
        $productModel = new Product();
        $product = $productModel->findBySlugWithCategory($slug);

        if (!$product) {
            http_response_code(404);
            $this->render('Public/404');
            return;
        }

        $relatedProducts = $productModel->getByCategorySlug($product['category_slug']);
        // Filter out current product
        $relatedProducts = array_filter($relatedProducts, fn($p) => $p['id'] !== $product['id']);

        $this->render('Public/katalog-detail', [
            'title' => $product['product_name'] . ' – Katalog Bonekaku',
            'product' => $product,
            'relatedProducts' => array_slice($relatedProducts, 0, 4)
        ]);
    }
}
