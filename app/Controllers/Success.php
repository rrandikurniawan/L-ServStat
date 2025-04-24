<?php

namespace App\Controllers;

/**
 * Controller Success untuk menangani tampilan halaman sukses
 */
class Success extends BaseController
{
    /**
     * Menampilkan halaman sukses
     * @return string Mengembalikan view untuk halaman sukses
     */
    public function success(): string
    {
        // Memuat dan mengembalikan file view 'pages/success.php'
        return view('pages/success.php');
    }
}