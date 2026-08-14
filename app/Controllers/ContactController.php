<?php
// app/Controllers/ContactController.php

namespace App\Controllers;

use App\Core\Controller;

class ContactController extends Controller {
    public function index(): void {
        $this->render('Public/kontak', [
            'title' => 'Kontak Kami & Alamat Workshop – Bonekaku.co.id'
        ]);
    }

    public function submit(): void {
        $name = $_POST['name'] ?? '';
        $phone = $_POST['phone'] ?? '';
        $message = $_POST['message'] ?? '';

        $text = "Halo Admin Bonekaku, nama saya {$name} ({$phone}). Pesan: {$message}";
        $waUrl = "https://wa.me/6281385508611?text=" . urlencode($text);
        
        $this->redirect($waUrl);
    }
}
