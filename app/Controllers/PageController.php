<?php
// app/Controllers/PageController.php

namespace App\Controllers;

use App\Core\Controller;

class PageController extends Controller {
    public function about(): void {
        $this->render('Public/tentang-kami', [
            'title' => 'Tentang Kami – Bonekaku Enterprise'
        ]);
    }
}
