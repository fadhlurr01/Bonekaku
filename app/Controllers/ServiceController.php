<?php
// app/Controllers/ServiceController.php

namespace App\Controllers;

use App\Core\Controller;

class ServiceController extends Controller {
    public function index(): void {
        $this->render('Public/layanan', [
            'title' => 'Layanan Manufaktur & Custom – Bonekaku.co.id'
        ]);
    }
}
