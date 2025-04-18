<?php

// Mendefinisikan namespace untuk controller Services, sesuai dengan struktur folder aplikasi
namespace App\Controllers;

// Kelas Services mewarisi BaseController, yang menyediakan fungsi dasar CodeIgniter
class Services extends BaseController
{
    // Method services untuk menangani permintaan ke halaman services
    // Mengembalikan string yang merujuk ke file view
    public function services(): string
    {
        // Memuat dan mengembalikan tampilan dari file services.php di folder pages
        return view('pages/services.php');
    }
}