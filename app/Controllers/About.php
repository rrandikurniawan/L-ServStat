<?php

// Mendefinisikan namespace untuk controller About, sesuai dengan struktur folder aplikasi
namespace App\Controllers;

// Kelas About mewarisi BaseController, yang menyediakan fungsi dasar CodeIgniter
class About extends BaseController
{
    // Method about untuk menangani permintaan ke halaman about
    // Mengembalikan string yang merujuk ke file view
    public function about(): string
    {
        // Memuat dan mengembalikan tampilan dari file about.php di folder pages
        return view('pages/about.php');
    }
}