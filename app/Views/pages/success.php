<!-- Menggunakan template utama dari file layout/main.php -->
<?= $this->extend('layout/main'); ?>

<!-- Memulai bagian konten yang akan dimasukkan ke dalam template -->
<?= $this->section('content'); ?>

<!-- Kontainer untuk menampilkan pesan sukses di tengah halaman -->
<div class="container my-5 text-center">
    <!-- Judul yang menunjukkan pemesanan berhasil -->
    <h1 class="text-success">Successfully!</h1>
    <!-- Pesan konfirmasi dan informasi tindak lanjut -->
    <p>Terima kasih atas pemesanan yang Anda kirimkan. Kami akan segera menghubungi Anda.</p>
    <!-- Tombol untuk kembali ke halaman utama -->
    <a href="index" class="btn btn-primary mt-3">Back to Home</a>
</div>

<!-- Mengakhiri bagian konten -->
<?= $this->endSection(); ?>