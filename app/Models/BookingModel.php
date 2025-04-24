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

    // Mengambil semua data booking dengan nama layanan dari tabel terkait
    public function getAllBookings()
    {
        return $this->db->table('bookings')
            ->select('bookings.id, bookings.name, bookings.email, bookings.waktu_dan_tanggal, bookings.note, layanan.nama_layanan')
            ->join('layanan', 'layanan.id = bookings.layanan_id')
            ->get()
            ->getResultArray();
    }

    // Mengambil data booking berdasarkan ID
    public function getBookingById($id)
    {
        return $this->find($id);
    }

    // Menambahkan data booking baru ke database
    public function createBooking($data)
    {
        return $this->insert($data);
    }

    // Mengambil data booking berdasarkan status is_done
    public function getBookingIsDone($is_done)
    {
        return $this->db->table('bookings')
            ->select('bookings.id, bookings.name, bookings.email, bookings.waktu_dan_tanggal, bookings.note, bookings.is_done, layanan.nama_layanan')
            ->join('layanan', 'layanan.id = bookings.layanan_id')
            ->where('bookings.is_done', $is_done)
            ->get()
            ->getResultArray();
    }

    // Memperbarui status is_done berdasarkan ID
    public function updateIsDone($id, $data) : bool
    {
        return $this->update($id, $data);
    }

    // Menghapus data booking berdasarkan ID
    public function deleteBooking($id)
    {
        return $this->where('id', $id)->delete();
    }
}