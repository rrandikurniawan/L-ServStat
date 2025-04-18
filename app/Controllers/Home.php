<?php

// Mendefinisikan namespace untuk controller Home, sesuai dengan struktur folder aplikasi
namespace App\Controllers;

// Kelas Home mewarisi BaseController, yang menyediakan fungsi dasar CodeIgniter
class Home extends BaseController
{
    // Method index untuk menangani permintaan ke halaman utama
    // Mengembalikan string yang merujuk ke file view
    public function index(): string
    {
        // Memuat dan mengembalikan tampilan dari file index.php di folder pages
        return view('pages/index.php');
    }
}