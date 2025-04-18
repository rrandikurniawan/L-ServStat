<?php

// Mendefinisikan namespace untuk controller Contact, sesuai dengan struktur folder aplikasi
namespace App\Controllers;

// Kelas Contact mewarisi BaseController, yang menyediakan fungsi dasar CodeIgniter
class Contact extends BaseController
{
    // Method contact untuk menangani permintaan ke halaman contact
    // Mengembalikan string yang merujuk ke file view
    public function contact(): string
    {
        // Memuat dan mengembalikan tampilan dari file contact.php di folder pages
        return view('pages/contact.php');
    }
}