<?php
// app/Controllers/HomeController.php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller {
    public function index(): void {
        $productModel = new Product();
        $categoryModel = new Category();

        $favoriteProducts = $productModel->getFavorites(4);
        $newProducts = $productModel->getNewProducts(4);
        $categories = $categoryModel->getAllWithProductCount();
        $allProducts = $productModel->getAllWithCategory();

        $this->render('Public/home', [
            'title' => 'Bonekaku – Pusat Souvenir, Maskot & Boneka Custom Terlengkap',
            'favoriteProducts' => $favoriteProducts,
            'newProducts' => $newProducts,
            'categories' => $categories,
            'allProducts' => array_slice($allProducts, 0, 8)
        ]);
    }
}
