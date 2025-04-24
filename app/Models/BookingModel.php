<?php

namespace App\Models;

use CodeIgniter\Model;

class BookingModel extends Model
{
    protected $table      = 'bookings';         // Nama tabel
    protected $primaryKey = 'id';               // Primary key

    protected $allowedFields = [                // Kolom yang boleh diisi
        'name',
        'email',
        'layanan_id',
        'waktu_dan_tanggal',
        'note',
        'is_done',
    ];

    protected $useTimestamps = false;           // Nonaktifkan timestamps (created_at, updated_at)

    // Method untuk mengambil semua data bookings
    public function getAllBookings()
    {
        return $this->db->table('bookings')
            ->select('bookings.id, bookings.name, bookings.email, bookings.waktu_dan_tanggal, bookings.note, layanan.nama_layanan')
            ->join('layanan', 'layanan.id = bookings.layanan_id')
            ->get()
            ->getResultArray();
    }

    // Method untuk mengambil booking berdasarkan ID
    public function getBookingById($id)
    {
        return $this->find($id);
    }

    // Method untuk menambahkan data booking baru
    public function createBooking($data)
    {
        return $this->insert($data);
    }

    // Method untuk mengambil data bookings berdasarkan status is_done
    public function getBookingIsDone($is_done)
    {
        return $this->db->table('bookings')
            ->select('bookings.id, bookings.name, bookings.email, bookings.waktu_dan_tanggal, bookings.note, bookings.is_done, layanan.nama_layanan')
            ->join('layanan', 'layanan.id = bookings.layanan_id')
            ->where('bookings.is_done', $is_done)
            ->get()
            ->getResultArray();
    }

    // Method untuk memperbarui status is_done berdasarkan ID
    public function updateIsDone($id, $data) : bool
    {
        return $this->update($id, $data);
    }
}