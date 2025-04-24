<!-- Booking Start -->
<!-- Bagian untuk formulir pemesanan layanan dan informasi layanan bengkel -->
<div class="container-fluid bg-secondary booking my-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gx-5">
            <!-- Kolom kiri: Informasi tentang layanan bengkel -->
            <div class="col-lg-6 py-5">
                <div class="py-5">
                    <h1 class="text-white mb-4">Bersertifikat Layanan Perbaikan Mobil</h1>
                    <p class="text-white mb-0">LAMPUNG SERVICE STATION hadir sebagai solusi untuk perbaikan mobil pribadi anda. Dengan tim teknisi profesional yang bersertifikat, kami memastikan setiap perbaikan dilakukan dengan standar tinggi, akurat, dan berkualitas. Percayakan kendaraan Anda dan kunjungi bengkel kami untuk layanan terbaik!</p>
                </div>
            </div>
            <!-- Kolom kanan: Formulir pemesanan dan konsultasi -->
            <div class="col-lg-6">
                <div class="bg-primary h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                    <h1 class="text-white mb-4">Pesan Layanan & Konsultasikan Kendala Mobil Anda</h1>
                    <!-- Menampilkan notifikasi sukses atau error dari session flashdata -->
                    <?php if (session()->getFlashdata('message')): ?>
                        <div class="alert alert-success" role="alert">
                            <?= session()->getFlashdata('message') ?>
                        </div>
                    <?php elseif (session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger" role="alert">
                            <?= session()->getFlashdata('error') ?>
                        </div>
                    <?php endif; ?>
                    <!-- Formulir untuk mengirimkan data pemesanan layanan -->
                    <form id="konsultasiForm" method="POST" action="/">
                        <div class="row g-3">
                            <!-- Input untuk nama pengguna -->
                            <div class="col-12 col-sm-6">
                                <input type="text" name="nama" class="form-control border-0" placeholder="Nama" style="height: 55px;" required>
                            </div>
                            <!-- Input untuk alamat email -->
                            <div class="col-12 col-sm-6">
                                <input type="email" name="email" class="form-control border-0" placeholder="Email" style="height: 55px;" required>
                            </div>
                            <!-- Dropdown untuk memilih jenis layanan -->
                            <div class="col-12 col-sm-6">
                                <select name="pilihan_service" class="form-select border-0" style="height: 55px;" required>
                                    <option value="">Pilih Layanan</option>
                                    <option value="1">Diagnostic Test</option>
                                    <option value="2">Engine Servicing</option>
                                    <option value="3">Understeel Servicing</option>
                                </select>
                            </div>
                            <!-- Input untuk memilih tanggal layanan -->
                            <div class="col-12 col-sm-6">
                                <input type="date" name="tanggal" class="form-control border-0" style="height: 55px;" required>
                            </div>
                            <!-- Textarea untuk pesan atau deskripsi kendala -->
                            <div class="col-12">
                                <textarea name="pesan" class="form-control border-0" placeholder="Tulis Pesan" required></textarea>
                            </div>
                            <!-- Tombol untuk mengirim formulir -->
                            <div class="col-12">
                                <button class="btn btn-secondary w-100 py-3" type="submit">Kirim</button>
                            </div>
                        </div>
                    </form>
                    <!-- Elemen untuk menampilkan respons atau pesan setelah pengiriman formulir -->
                    <p id="response" class="text-white mt-3"></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Booking End -->