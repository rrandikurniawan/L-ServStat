<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    /**
     * Menampilkan halaman login
     * @return string Mengembalikan view untuk halaman login
     */
    public function login()
    {
        return view('pages/login');
    }

    /**
     * Memproses login pengguna dengan data yang dikirim melalui POST
     * @return \CodeIgniter\HTTP\RedirectResponse Mengarahkan ke halaman admin jika berhasil, atau kembali dengan pesan error jika gagal
     */
    public function loginPost()
    {
        // Menginisialisasi session untuk menyimpan data pengguna
        $session = session();
        // Membuat instance model AdminModel untuk mengakses data admin
        $model = new \App\Models\AdminModel();
        // Mengambil data username dan password dari input POST
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Mencari pengguna berdasarkan username di database
        $user = $model->where('username', $username)->first();

        // Memeriksa apakah pengguna ditemukan
        if ($user) {
            // Memverifikasi kecocokan password dengan hash yang tersimpan
            if (password_verify($password, $user['password'])) {
                // Menyimpan data pengguna ke session jika login berhasil
                $session->set([
                    'user_id' => $user['id'],
                    'username' => $user['username'],
                    'logged_in' => true,
                ]);
                // Mengarahkan ke halaman admin setelah login berhasil
                return redirect()->to('/admin');
            } else {
                // Mengarahkan kembali ke halaman login dengan pesan error jika password salah
                return redirect()->back()->with('error', 'Password salah');
            }
        } else {
            // Mengarahkan kembali ke halaman login dengan pesan error jika username tidak ditemukan
            return redirect()->back()->with('error', 'Username tidak ditemukan');
        }
    }

    /**
     * Menghapus session dan logout pengguna
     * @return \CodeIgniter\HTTP\RedirectResponse Mengarahkan ke halaman login setelah logout
     */
    public function logout()
    {
        // Menghapus semua data session untuk logout
        session()->destroy();
        // Mengarahkan ke halaman login setelah logout
        return redirect()->to('/login');
    }
}