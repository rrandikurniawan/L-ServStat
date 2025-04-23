<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LSSData extends Seeder
{
    public function run()
    {
        // Seeder untuk tabel users
        $this->db->table('users')->insertBatch([
            [
                'username' => 'admin',
                'password' => password_hash('admin123', PASSWORD_DEFAULT),
                'name'     => 'Administrator',
            ],
            [
                'username' => 'randi',
                'password' => password_hash('randi123', PASSWORD_DEFAULT),
                'name'     => 'Randi Kurniawan',
            ],
        ]);

        // Seeder untuk tabel layanan
        $this->db->table('layanan')->insertBatch([
            [
                'nama_layanan' => 'Diagnostic Test',
                'deskripsi'    => 'Layanan tes diagnosis yang akurat untuk mendeteksi masalah pada kendaraan Anda dengan teknologi canggih dan tim ahli berpengalaman',
            ],
            [
                'nama_layanan' => 'Engine Servicing',
                'deskripsi'    => 'Layanan servis mesin yakni memperbaiki mesin yang rusak dan menjaga performa serta daya tahan mesin kendaraan tetap optimal',
            ],
            [
                'nama_layanan' => 'Understeel Servicing',
                'deskripsi'    => 'Perawatan kaki-kaki mobil yang memastikan kenyamanan berkendara dan keamanan di setiap perjalanan',
            ],
        ]);

        // Seeder untuk tabel bookings
        $this->db->table('bookings')->insertBatch([
            
        ]);
    }

}