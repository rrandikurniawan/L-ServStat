<?php

namespace App\Controllers;

class Admin extends BaseController
{
    // Menampilkan halaman dashboard admin dengan daftar booking
    public function index()
    {
        // Inisialisasi model BookingModel
        $model = new \App\Models\BookingModel();
        
        // Ambil semua data booking
        $data['bookings'] = $model->getAllBookings();
        // Ambil data booking yang sudah selesai (is_done = 1)
        $data['bookingdone'] = $model->getBookingIsDone(1); // booking yang sudah selesai
        // Ambil data booking yang belum selesai (is_done = 0)
        $data['bookingpending'] = $model->getBookingIsDone(0); // booking yang belum selesai
        
        // Render halaman admin dengan data booking
        return view('pages/admin', ['data' => $data]);
    }

    // Menandai booking sebagai selesai berdasarkan ID
    public function done($id)
    {
        // Inisialisasi model BookingModel
        $model = new \App\Models\BookingModel();

        // Perbarui status is_done menjadi 1
        if ($model->updateIsDone($id, ['is_done' => 1])) {
            // Redirect ke halaman admin dengan pesan sukses
            return redirect()->to('/admin')->with('message', 'Booking marked as done.');
        } else {
            // Redirect ke halaman admin dengan pesan error
            return redirect()->to('/admin')->with('message', 'Error.');
        }
    }

    // Menghapus booking berdasarkan ID
    public function delete($id)
    {
        // Inisialisasi model BookingModel
        $model = new \App\Models\BookingModel();

        // Hapus booking dari database
        if ($model->deleteBooking($id)) {
            // Redirect ke halaman admin dengan pesan sukses
            return redirect()->to('/admin')->with('message', 'Booking deleted successfully.');
        } else {
            // Redirect ke halaman admin dengan pesan error
            return redirect()->to('/admin')->with('message', 'Failed to delete booking.');
        }
    }
}