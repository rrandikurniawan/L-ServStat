<!-- Extends the main layout template for consistent site structure -->
<?= $this->extend('layout/main'); ?>

<!-- Defines the 'content' section to be injected into the main layout -->
<?= $this->section('content'); ?>

    <!-- Service Start: Detailed service options with tabbed navigation -->
    <div class="container-xxl service py-5">
        <div class="container">
            <!-- Section header with animation -->
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Our Services //</h6>
                <h1 class="mb-5">Opsi Pilihan Jasa</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <!-- Service navigation pills -->
                <div class="col-lg-4">
                    <div class="nav w-100 nav-pills me-4">
                        <!-- Tab 1: Diagnostic Test (active by default) -->
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <i class="fa fa-car-side fa-2x me-3"></i>
                            <h4 class="m-0">Diagnostic Test</h4>
                        </button>
                        <!-- Tab 2: Engine Servicing -->
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <i class="fa fa-car fa-2x me-3"></i>
                            <h4 class="m-0">Engine Servicing</h4>
                        </button>
                        <!-- Tab 3: Understeel Servicing -->
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <i class="fa fa-cog fa-2x me-3"></i>
                            <h4 class="m-0">Understeel Servicing</h4>
                        </button>
                    </div>
                </div>
                <!-- Tab content for services -->
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <!-- Tab Pane 1: Diagnostic Test -->
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <!-- Service image (note: potential file extension issue) -->
                                        <img class="position-absolute img-fluid w-100 h-100" src="<?= base_url('frontend/img/service-1')?>.jpg" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Diagnostic Test</h3>
                                    <p class="mb-4">Layanan tes diagnosis yang akurat untuk mendeteksi masalah pada kendaraan Anda dengan teknologi canggih dan tim ahli berpengalaman</p>
                                    <!-- Service highlights -->
                                    <p><i class="fa fa-check text-success me-3"></i>Akurasi Tinggi</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Teknisi Berpengalaman</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Alat Diagnostik Modern</p>
                                </div>
                            </div>
                        </div>
                        <!-- Tab Pane 2: Engine Servicing -->
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <!-- Service image (note: potential file extension issue) -->
                                        <img class="position-absolute img-fluid w-100 h-100" src="<?= base_url('frontend/img/service-2')?>.jpg" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Engine Servicing</h3>
                                    <p class="mb-4">Layanan servis mesin yakni memperbaiki mesin yang rusak dan menjaga performa serta daya tahan mesin kendaraan tetap optimal</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Perbaikan Berkualitas</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Teknisi Ahli</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Peralatan Modern</p>
                                </div>
                            </div>
                        </div>
                        <!-- Tab Pane 3: Understeel Servicing -->
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <!-- Service image (note: potential file extension issue) -->
                                        <img class="position-absolute img-fluid w-100 h-100" src="<?= base_url('frontend/img/service-3')?>.jpg" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Understeel Servicing</h3>
                                    <p class="mb-4">Perawatan kaki-kaki mobil yang memastikan kenyamanan berkendara dan keamanan di setiap perjalanan</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Perbaikan Berkualitas</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Teknisi Ahli</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Peralatan Modern</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Booking Start: Call-to-action section with a booking form -->
    <div class="container-fluid bg-secondary booking my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <!-- Promotional text -->
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="text-white mb-4">Bersertifikat Layanan Perbaikan Mobil</h1>
                        <p class="text-white mb-0">LAMPUNG SERVICE STATION hadir sebagai solusi untuk perbaikan mobil pribadi anda. Dengan tim teknisi profesional yang bersertifikat, kami memastikan setiap perbaikan dilakukan dengan standar tinggi, akurat, dan berkualitas. Percayakan kendaraan Anda dan kunjungi bengkel kami untuk layanan terbaik!</p>
                    </div>
                </div>
                <!-- Booking form -->
                <div class="col-lg-6">
                    <div class="bg-primary h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">Pesan Layanan & Konsultasikan Kendala Mobil Anda</h1>
                        <!-- Form without action or method (potential issue) -->
                        <form>
                            <div class="row g-3">
                                <!-- Input fields without name attributes or required validation -->
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Nama" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select name="pilihan_service" class="form-select border-0" style="height: 55px;" required>
                                        <option value="">Pilih Layanan</option>
                                        <option value="Diagnostic Test">Diagnostic Test</option>
                                        <option value="Engine Servicing">Engine Servicing</option>
                                        <option value="Understeel Servicing">Understeel Servicing</option>
                                    </select>
                                </div>
                                <!-- Date picker input with datetimepicker integration -->
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text"
                                            class="form-control border-0 datetimepicker-input"
                                            placeholder="Tanggal" data-target="#date1" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="Tulis Pesan"></textarea>
                                </div>
                                <!-- Submit button -->
                                <div class="col-12">
                                    <button class="btn btn-secondary w-100 py-3" type="submit">Kirim</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->

<!-- Closes the content section -->
<?= $this->endSection('content'); ?>