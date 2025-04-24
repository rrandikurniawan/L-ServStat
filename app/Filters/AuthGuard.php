<?php

namespace App\Filters;

// Mengimpor interface dan kelas yang diperlukan dari CodeIgniter
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

/**
 * Class AuthGuard
 * Filter untuk memeriksa autentikasi pengguna sebelum mengakses rute tertentu
 */
class AuthGuard implements FilterInterface
{
    /**
     * Method before
     * Dipanggil sebelum controller dijalankan untuk memeriksa status login pengguna
     * @param RequestInterface $request Objek permintaan HTTP
     * @param mixed $arguments Argumen tambahan yang diteruskan ke filter (jika ada)
     * @return mixed Redirect ke halaman login jika pengguna belum login
     */
    public function before(RequestInterface $request, $arguments = null)
    {
        // Memeriksa apakah sesi 'logged_in' tidak ada atau bernilai false
        if (!session()->get('logged_in')) {
            // Mengarahkan pengguna ke halaman login jika belum terautentikasi
            return redirect()->to('/login');
        }
    }

    /**
     * Method after
     * Dipanggil setelah controller dijalankan, saat ini tidak melakukan apa-apa
     * @param RequestInterface $request Objek permintaan HTTP
     * @param ResponseInterface $response Objek respons HTTP
     * @param mixed $arguments Argumen tambahan yang diteruskan ke filter (jika ada)
     * @return void
     */
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Kosong, tidak ada logika yang diterapkan setelah controller dijalankan
    }
}