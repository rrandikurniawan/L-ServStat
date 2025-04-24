<?php

// Mendefinisikan namespace untuk controller Home, sesuai dengan struktur folder aplikasi
namespace App\Controllers;

// Kelas Home mewarisi BaseController, yang menyediakan fungsi dasar CodeIgniter
class Home extends BaseController
{
    // Menampilkan halaman utama
    public function index()
    {
        // Render the page for GET requests
        helper(['url']);
        return view('pages/index.php');
    }

    // Menangani proses pemesanan dari form
    public function pesan()
    {
        // Inisialisasi model BookingModel
        $model = new \App\Models\BookingModel();

        // Ambil data dari form
        $name = $this->request->getPost('nama');
        $email = $this->request->getPost('email');
        $tanggal = $this->request->getPost('tanggal');
        $pesan = $this->request->getPost('pesan');

        // Siapkan data untuk disimpan ke database
        $data = [
            'name' => $name,
            'email' => $email,
            'layanan_id' => 1, // ID layanan default
            'waktu_dan_tanggal' => $tanggal,
            'note' => $pesan,
            'is_done' => 0, // Status booking belum selesai
        ];

        // Save to database
        if ($model->insert($data)) {
            // Redirect to success page
            return redirect()->to('/success');
        } else {
            // Redirect back with error message
            session()->setFlashdata('error', 'Failed to submit booking. Please try again.');
            return redirect()->to('/');
        }
    }
}