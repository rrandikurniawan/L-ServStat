<?php

namespace App\Models;

// Mengimpor kelas Model dari CodeIgniter untuk keperluan operasi database
use CodeIgniter\Model;

/**
 * Class AdminModel
 * Model untuk mengelola data pengguna (admin) pada tabel users
 */
class AdminModel extends Model
{
    /**
     * @var string $table
     * Nama tabel yang digunakan oleh model ini
     */
    protected $table = 'users';

    /**
     * @var string $primaryKey
     * Nama kolom yang menjadi primary key pada tabel
     */
    protected $primaryKey = 'id';

    /**
     * @var array $allowedFields
     * Daftar kolom yang diperbolehkan untuk diisi melalui operasi mass assignment
     */
    protected $allowedFields = ['username', 'password'];
}